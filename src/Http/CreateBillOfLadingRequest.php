<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Speedy\Http;

use Omniship\Common\ShippingService;
use ParamCalculation;
use ParamClientData;
use ParamPhoneNumber;
use ParamOptionsBeforePayment;
use ParamAddress;
use Carbon\Carbon;
use ParamPicking;
use Omniship\Speedy\Client AS SpeedyClient;

class CreateBillOfLadingRequest extends AbstractRequest
{

    /**
     * @var SpeedyClient
     */
    protected $client;

    /**
     * @return ParamCalculation
     */
    public function getData() {
        if(!$login = $this->getClient()->getResultLogin()) {
            return null;
        }

        //sender
        $sender = new ParamClientData();
        $sender->setClientId($login->getClientId());
        $sender_address = $this->getSenderAddress();
        if ($sender_address->getPhone()) {
            $senderPhone = new ParamPhoneNumber();
            $senderPhone->setNumber($sender_address->getPhone());
            $sender->setPhones(array(0 => $senderPhone));
        }

        $receiver_address = $this->getReceiverAddress();
        $receiver_country = $receiver_address->getCountry();
        $receiver_state = $receiver_address->getState();
        $receiver_city = $receiver_address->getCity();
        $receiver_quarter = $receiver_address->getQuarter();
        $receiver_street = $receiver_address->getStreet();
        $receiverAddress = new ParamAddress();
        if ($receiver_city && $receiver_city->getId()) {
            $receiverAddress->setSiteId($receiver_city->getId());
        } else {
            $receiverAddress->setSiteName($receiver_city ? $receiver_city->getName() : '');
        }

        if ($receiver_quarter && $receiver_quarter->getName()) {
            $receiverAddress->setQuarterName($receiver_quarter->getName());
        }

        if ($receiver_quarter && $receiver_quarter->getId()) {
            $receiverAddress->setQuarterId($receiver_quarter->getId());
        }

        if ($receiver_street && $receiver_street->getName()) {
            $receiverAddress->setStreetName($receiver_street->getName());
        }

        if ($receiver_street && $receiver_street->getId()) {
            $receiverAddress->setStreetId($receiver_street->getId());
        }

        if ($receiver_address->getStreetNumber()) {
            $receiverAddress->setStreetNo($receiver_address->getStreetNumber());
        }

        if (1==2) {
            $receiverAddress->setBlockNo(null);
        }

        if ($receiver_address->getEntrance()) {
            $receiverAddress->setEntranceNo($receiver_address->getEntrance());
        }

        if ($receiver_address->getFloor()) {
            $receiverAddress->setFloorNo($receiver_address->getFloor());
        }

        if ($receiver_address->getApartment()) {
            $receiverAddress->setApartmentNo($receiver_address->getApartment());
        }

        if (isset($data['note']) && $data['note']) {
            $receiverAddress->setAddressNote($data['note']);
        }

        if ($receiver_state && $receiver_state->getId()) {
            $receiverAddress->setStateId($receiver_state->getId());
        }

        if ($receiver_country && $receiver_country->getId()) {
            $receiverAddress->setPostCode($receiver_address->getPostCode());
            $receiverAddress->setFrnAddressLine1($receiver_address->getAddress1());
            $receiverAddress->setFrnAddressLine2($receiver_address->getAddress2());
            $receiverAddress->setCountryId($receiver_country->getId());
            $receiverAddress->setStateId($receiver_state ? $receiver_state->getId() : null);
        }

        $receiver = new ParamClientData();
        $receiver->setPartnerName($receiver_address->getFirstName() . ' ' . $receiver_address->getLastName());
        $receiverPhone = new ParamPhoneNumber();
        $receiverPhone->setNumber($receiver_address->getPhone());
        $receiver->setPhones(array(0 => $receiverPhone));
        $receiver->setEmail($this->getOtherParameters('receiver_email'));

        $picking = new ParamPicking();
//        $picking->setClientSystemId(self::SpeedyClientId);
        $picking->setRef1($this->getTransactionId());

//        if ($data['depth'] || $data['height'] || $data['width']) {
//            $size = new Size();
//
//            if ($data['depth']) {
//                $size->setDepth($data['depth']);
//            }
//
//            if ($data['height']) {
//                $size->setHeight($data['height']);
//            }
//
//            if ($data['width']) {
//                $size->setWidth($data['width']);
//            }
//
//            $picking->setSize($size);
//        }

        if ($this->getOtherParameters('priority_time_value')) {
            $picking->setFixedTimeDelivery($this->getOtherParameters('priority_time_value'));
        }

        $picking->setServiceTypeId($data['shipping_method_id']);

        if ($receiver_address->getParameter('office_id')) {
            $picking->setOfficeToBeCalledId($receiver_address->getParameter('office_id'));
        } else {
            $receiver->setAddress($receiverAddress);
            $picking->setOfficeToBeCalledId(null);
        }

        $picking->setBackDocumentsRequest($this->getOtherParameters('back_documents'));
        $picking->setBackReceiptRequest($this->getOtherParameters('back_receipt'));

        if ($special_delivery_id = $this->getOtherParameters('special_delivery_id')) {
            //A special delivery ID
            $picking->setSpecialDeliveryId($special_delivery_id);
        }

        if ($sender_address->getParameter('office_id')) {
            $picking->setWillBringToOffice(true);
            $picking->setWillBringToOfficeId($sender_address->getParameter('office_id'));
        } else {
            $picking->setWillBringToOffice(false);
        }

        $picking->setParcelsCount($this->getItems()->count());
        $picking->setWeightDeclared($this->getWeight());
        $picking->setContents('Shipping items aaaa');
        $picking->setPacking(1); // number of packages
        $picking->setPackId(null);
        $picking->setDocuments($this->getOtherParameters('is_documents'));
        $picking->setPalletized(false);

        $payer_type = \ParamCalculation::PAYER_TYPE_SENDER;
        if($this->getPayer() == ShippingService::PAYER_RECEIVER) {
            $payer_type = \ParamCalculation::PAYER_TYPE_RECEIVER;
        } elseif($this->getPayer() == ShippingService::PAYER_OTHER) {
            $payer_type = \ParamCalculation::PAYER_TYPE_THIRD_PARTY;
        }
        $picking->setPayerType($payer_type);

        if(($ins = $this->getInsuranceAmount()) > 0) {
            $picking->setFragile((bool)$this->getOtherParameters('fragile'));
            $picking->setAmountInsuranceBase($data['totalNoShipping']);
            $picking->setPayerTypeInsurance($payer_type);
        } else {
            $picking->setFragile(false);
        }

        $picking->setSender($sender);
        $picking->setReceiver($receiver);

        $picking->setPayerType($payer_type);

        if(empty($data['taking_date'])) {
            $result = $this->getClient()->getAllowedDaysForTaking([
                'shipping_method_id' => $data['shipping_method_id'],
                'taking_date' => time()
            ]);
            if($result && !empty($result[1])) {
                $this->setOtherParameters('taking_date', $result[1]->format('Y-m-d'));
            }
        }

        $picking->setTakingDate($this->getOtherParameters('taking_date'));

        if ($this->getOtherParameters('deffered_days')) {
            $picking->setDeferredDeliveryWorkDays($this->getOtherParameters('deffered_days'));
        }

        if ($this->getOtherParameters('client_note')) {
            $picking->setNoteClient($this->getOtherParameters('client_note'));
        }

//				$currency = $this->registry->get('currency');
//				if ($data['abroad'] && $data['active_currency_code'] && $currency->has($data['active_currency_code'])) {
//					$data['total'] = $currency->convert($data['total'], setting('speedy_currency'), $data['active_currency_code']);
//				}

        if(($cod = $this->getCashOnDeliveryAmount()) > 0) {
            $picking->setAmountCodBase($cod);
        } else {
            $picking->setAmountCodBase(0);
        }

        if ($cod > 0 && ($this->getOtherParameters('money_transfer') && !$data['abroad'])) {
            $picking->setRetMoneyTransferReqAmount($data['total']);
            $picking->setAmountCodBase(0);
        }

        $optionBeforePayment = new ParamOptionsBeforePayment();
        if ($data['cod'] && !empty($data['option_before_payment']) && $data['option_before_payment'] != 'no_option') {
            if($data['option_before_payment'] == 'test') {
                $optionBeforePayment->setTest(true);
                $optionBeforePayment->returnServiceTypeId($data['shipping_method_id']);
                $optionBeforePayment->returnPayerType($payerType);
            } elseif($data['option_before_payment'] == 'open') {
                $optionBeforePayment->setOpen(true);
                $optionBeforePayment->returnServiceTypeId($data['shipping_method_id']);
                $optionBeforePayment->returnPayerType($payerType);
            }
            $picking->setOptionsBeforePayment($optionBeforePayment);
        }

        if (isset($data['abroad']) && $data['abroad'] && $data['cod'] && ($data['price_gen_method'] == 'calculator' || $data['price_gen_method'] == 'calculator_fixed')) {
            $picking->setIncludeShippingPriceInCod(true);
        }



        $paramCalculation = new ParamCalculation();
        if(is_null($login = $this->getClient()->getResultLogin())) {
            return $paramCalculation;
        }

        //The date for shipment pick-up (the "time" component is ignored if it is allready passed or is overriden with 09:01). Default value is "today". (Required: no)
        $paramCalculation->setTakingDate(Carbon::now()->format('H:i'));
        //If set to true, the "takingDate" field is not just to be validated, but the first allowed (following) date will be used instead (in compliance with the pick-up schedule etc.). (Required: no)
        $paramCalculation->setAutoAdjustTakingDate(true);

        $sender_address = $this->getSenderAddress();
        // if no sender address get information from profile
        if(!$sender_address) {
            $paramCalculation->setSenderId($login->getClientId());
        } else {
            //if send from office
            if(!is_null($office_id = $sender_address->getParameter('office_id'))) {
                $paramCalculation->setWillBringToOfficeId($office_id);
            } else {
                $paramCalculation->setSenderCountryId($sender_address->getCountry()->getId());
                $paramCalculation->setSenderSiteId($sender_address->getCity()->getId());
                $paramCalculation->setSenderPostCode($sender_address->getPostCode());
            }
        }

        $receiver_address = $this->getReceiverAddress();
        if($receiver_address && !is_null($office_id = $receiver_address->getParameter('office_id'))) {
            //ID of an office "to be called". Non-null and non-zero value indicates this picking as "to office". Otherwise "to address" is considered. If officeToBeCalledId is provided (non-null and non-zero), toBeCalled flag is considered "true". If officeToBeCalledId is set to 0, toBeCalled flag is considered "false".
            $paramCalculation->setOfficeToBeCalledId($office_id);
            //Specifies if the shipment is "to be called". If this flag is true the shipment is considered "to office". Otherwise "to address" is considered.
            $paramCalculation->setToBeCalled(true);
        } else {
            if($receiver_address) {
                $paramCalculation->setReceiverCountryId($receiver_address->getCountry()->getId());
                $paramCalculation->setReceiverSiteId($receiver_address->getCity()->getId());
                $paramCalculation->setReceiverPostCode($receiver_address->getPostCode());
            }
            $paramCalculation->setOfficeToBeCalledId(0);
            $paramCalculation->setToBeCalled(false);
        }

        //Fixed time for delivery ("HHmm" format, i.e., the number "1315" means "13:15", "830" means "8:30" etc.) (Depending on the courier service, this property could be required, allowed or banned)
        $paramCalculation->setFixedTimeDelivery(null);

        //In some rare cases users might prefer the delivery to be deferred by a day or two. This parameter allows users to specify by how many (working) days they would like to postpone the shipment delivery.
        $paramCalculation->setDeferredDeliveryWorkDays(0);

        //Shipment insurance value (if the shipment is insured)
        $paramCalculation->setAmountInsuranceBase($this->getInsuranceAmount());
        //Specifies whether the shipment is fragile - necessary when the price of insurance is being calculated
        $paramCalculation->setFragile(true);

        //Cash-on-Delivery (COD) amount
        $paramCalculation->setAmountCodBase($this->getCashOnDeliveryAmount());

        //Specifies if the COD value is to be paid to a third party. Allowed only if the shipment has payerType = 2 (third party). (Required: no)
        $paramCalculation->setPayCodToThirdParty(false);

        //Parcels count (must be equal to the number of parcels described in List parcels)
        $paramCalculation->setParcelsCount($this->getItems()->count());
        //Declared weight (the greater of "volume" and "real" weight values)
        $paramCalculation->setWeightDeclared($this->getWeight());
        //Specifies whether the shipment only consists of documents
        $paramCalculation->setDocuments(false);
        //Specifies whether the shipment is palletized
        $paramCalculation->setPalletized(false);

        //if send out of bg disable cod & payer is sender
        //Payer type (0=sender, 1=receiver or 2=third party)
        $payer_type = \ParamCalculation::PAYER_TYPE_SENDER;
        if($this->getPayer() == ShippingService::PAYER_RECEIVER) {
            $payer_type = \ParamCalculation::PAYER_TYPE_RECEIVER;
        } elseif($this->getPayer() == ShippingService::PAYER_OTHER) {
            $payer_type = \ParamCalculation::PAYER_TYPE_THIRD_PARTY;
        }
        $paramCalculation->setPayerType($payer_type);
        //Insurance payer type (0=sender, 1=reciever or 2=third party)
        $paramCalculation->setPayerTypeInsurance($payer_type);
        //Packings payer type (0=sender, 1=reciever or 2=third party)
        $paramCalculation->setPayerTypePackings($payer_type);

        if ($special_delivery_id = $this->getOtherParameters('special_delivery_id')) {
            //A special delivery ID
            $paramCalculation->setSpecialDeliveryId($special_delivery_id);
        }

        //Flag indicating whether the shipping price should be included into the cash on delivery price.
        $paramCalculation->setIncludeShippingPriceInCod(true);

        //Check if specified office to be called is working. Default value - true
        $paramCalculation->setCheckTBCOfficeWorkDay(true);

        return $paramCalculation;
    }

    public function sendData($data) {
        $response = $data ? $this->getClient()->calculate($data, $this->getOtherParameters('allowed_services')) : null;
        return $this->createResponse(!$response && $this->getClient()->getError() ? $this->getClient()->getError() : $response);
    }

    /**
     * @param $data
     * @return ShippingServicesResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new ShippingServicesResponse($this, $data);
    }

}