<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Speedy\Http;

use Omniship\Common\ItemBag;
use Omniship\Common\ShippingService;
use ParamCalculation;
use ParamClientData;
use ParamPhoneNumber;
use ParamOptionsBeforePayment;
use ParamAddress;
use Carbon\Carbon;
use ParamPicking;

class CreateBillOfLadingRequest extends AbstractRequest
{

    const SpeedyClientId = null; //An optional value used to identify user's client software. Please verify the allowed values with Speedy's IT Department.

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
            $sender->setPhones([$senderPhone]);
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

        $note = array_filter([$receiver_address->getAddress1(), $receiver_address->getAddress2(), $receiver_address->getAddress3()]);
        if ($note) {
            $receiverAddress->setAddressNote(implode(', ', $note));
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
        $receiver->setContactName($receiver_address->getFirstName() . ' ' . $receiver_address->getLastName());
        $receiverPhone = new ParamPhoneNumber();
        $receiverPhone->setNumber($receiver_address->getPhone());
        $receiver->setPhones(array(0 => $receiverPhone));
        $receiver->setEmail($this->getOtherParameters('receiver_email'));

        $picking = new ParamPicking();
        $picking->setClientSystemId(self::SpeedyClientId);
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

        $picking->setServiceTypeId($this->getServiceId());

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

        /** @var $items ItemBag */
        $items = $this->getItems();
//        $parcels = [];
//        foreach($items->all() AS $row => $item) {
//            $parcel = new ParamParcelInfo();
//            $parcel->setSeqNo($row - 1);
//            $parcel->setWeight($item->getWeight());
//            if($item->getWidth() && $item->getDepth() && $item->getHeight()) {
//                $size = new Size();
//                $size->setDepth($item->getDepth());
//                $size->setHeight($item->getHeight());
//                $size->setWidth($item->getWidth());
//                $parcel->setSize($size);
//            }
//            $parcels[] = $parcel;
//        }
//        $picking->setParcels($parcels);

        $picking->setParcelsCount($items->count());
        $picking->setWeightDeclared($this->getWeight());
        $picking->setContents($this->getOtherParameters('contents_text'));
        $picking->setPacking($this->getOtherParameters('packing_type')); // number of packages
        $picking->setPackId($this->getOtherParameters('package_id'));
        $picking->setDocuments($this->getOtherParameters('is_documents'));
        $picking->setPalletized(false);

        $payer_type = ParamCalculation::PAYER_TYPE_SENDER;
        if($this->getPayer() == ShippingService::PAYER_RECEIVER) {
            $payer_type = ParamCalculation::PAYER_TYPE_RECEIVER;
        } elseif($this->getPayer() == ShippingService::PAYER_OTHER) {
            $payer_type = ParamCalculation::PAYER_TYPE_THIRD_PARTY;
        }
        $picking->setPayerType($payer_type);

        if(($ins = $this->getInsuranceAmount()) > 0) {
            $picking->setFragile((bool)$this->getOtherParameters('fragile'));
            $picking->setAmountInsuranceBase($ins);
            $picking->setPayerTypeInsurance($payer_type);
        } else {
            $picking->setFragile(false);
        }

        $picking->setSender($sender);
        $picking->setReceiver($receiver);

        $picking->setPayerType($payer_type);
        if(is_null($taking_date = $this->getTakingDate())) {
            $result = $this->getClient()->getAllowedDaysForTaking(
                $this->getServiceId(),
                Carbon::now($this->getSenderTimeZone())->addDay(1)->timestamp
            );
            if($result && !empty($result[1])) {
                $this->setTakingDate($result[1]);
            }
        }

        if(!is_null($taking_date = $this->getTakingDate())) {
            $picking->setTakingDate($this->getTakingDate()->format('H:i'));
        }

        if ($this->getOtherParameters('deffered_days')) {
            $picking->setDeferredDeliveryWorkDays($this->getOtherParameters('deffered_days'));
        }

        if ($this->getOtherParameters('client_note')) {
            $picking->setNoteClient($this->getOtherParameters('client_note'));
        }

        if(($cod = $this->getCashOnDeliveryAmount()) > 0) {
            $picking->setAmountCodBase($cod);
        } else {
            $picking->setAmountCodBase(0);
        }

//        if ($cod > 0 && ($this->getOtherParameters('money_transfer') && !$data['abroad'])) {
//            $picking->setRetMoneyTransferReqAmount($data['total']);
//            $picking->setAmountCodBase(0);
//        }

        $optionBeforePayment = new ParamOptionsBeforePayment();
        if ($cod > 0 && !empty($this->getOtherParameters('option_before_payment')) && $this->getOtherParameters('option_before_payment') != 'no_option') {
            if($this->getOtherParameters('option_before_payment') == 'test') {
                $optionBeforePayment->setTest(true);
                $optionBeforePayment->setReturnServiceTypeId($this->getServiceId());
                $optionBeforePayment->setReturnPayerType($payer_type);
            } elseif($this->getOtherParameters('option_before_payment') == 'open') {
                $optionBeforePayment->setOpen(true);
                $optionBeforePayment->setReturnServiceTypeId($this->getServiceId());
                $optionBeforePayment->setReturnPayerType($payer_type);
            }
            $picking->setOptionsBeforePayment($optionBeforePayment);
        }

        $picking->setIncludeShippingPriceInCod((bool)$this->getOtherParameters('shipping_price_in_cod'));

        if($this->getClient()->getError()) {
            return null;
        }

        return $picking;
    }

    /**
     * @param mixed $data
     * @return CreateBillOfLadingResponse
     */
    public function sendData($data) {
        $response = $data ? $this->getClient()->createBillOfLading($data) : null;
        return $this->createResponse(!$response && $this->getClient()->getError() ? $this->getClient()->getError() : $response);
    }

    /**
     * @param $data
     * @return CreateBillOfLadingResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new CreateBillOfLadingResponse($this, $data);
    }

}