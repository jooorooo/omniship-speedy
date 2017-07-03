<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Speedy\Http;

use Omniship\Common\Address;
use Omniship\Consts;
use Omniship\Speedy\Helper\Convert;
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

        $convert = new Convert();

        $picking = new ParamPicking();

        //sender
        $sender = new ParamClientData();
        $sender_address = $this->getSenderAddress();

        $sender_city_id = null;
        $sender_office_id = null;
        $sender->setClientId($login->getClientId());

        if($sender_address) {

//            $sender->setPartnerName($sender_address->getFirstName() . ' ' . $sender_address->getLastName());
            $sender->setContactName($sender_address->getFirstName() . ' ' . $sender_address->getLastName());

            if($company = $sender_address->getCompanyName()) {
                $sender->setObjectName($company);
            }

            if ($sender_address->getPhone()) {
                $senderPhone = new ParamPhoneNumber();
                $senderPhone->setNumber($sender_address->getPhone());
                $sender->setPhones([$senderPhone]);
            }

            $sender_city = $sender_address->getCity();
            $sender_office = $sender_address->getOffice();
            if($sender_city && $sender_city->getId()) {
                $sender_city_id = $sender_city->getId();
            } elseif(!$sender_office || !$sender_office->getId()) {
                $client_info = $this->getClient()->getClientInfo()->getAddress();
                $sender_city_id = $client_info->getSiteId();
            }
            if ($sender_office && $sender_office->getId()) {
                $picking->setWillBringToOffice(true);
                $picking->setWillBringToOfficeId($sender_office->getId());
            } else {
                $picking->setWillBringToOffice(false);
//                $sender->setAddress($this->translateAddress($sender_address));
            }
        } else {
            $client_info = $this->getClient()->getClientInfo();
            if($client_info && $phones = $client_info->getPhones()) {
                $senderPhone = new ParamPhoneNumber();
                $senderPhone->setNumber($phones[0]->getNumber());
                $sender->setPhones([$senderPhone]);
            }
        }

        $picking->setSender($sender);

        $receiver = new ParamClientData();
        $receiver->setEmail($this->getReceiverEmail());
        $receiver_address = $this->getReceiverAddress();
        if($receiver_address) {
            $receiver->setPartnerName($receiver_address->getFirstName() . ' ' . $receiver_address->getLastName());
            $receiver->setContactName($receiver_address->getFirstName() . ' ' . $receiver_address->getLastName());

            if($company = $receiver_address->getCompanyName()) {
                $receiver->setObjectName($company);
            }

            if ($receiver_address->getPhone()) {
                $receiverPhone = new ParamPhoneNumber();
                $receiverPhone->setNumber($receiver_address->getPhone());
                $receiver->setPhones([$receiverPhone]);
            }

            $receiver_office = $receiver_address->getOffice();
            if ($receiver_office && $receiver_office->getId()) {
                $picking->setOfficeToBeCalledId($receiver_office->getId());
            } else {
                $picking->setOfficeToBeCalledId(null);
                $receiver->setAddress($this->translateAddress($receiver_address));
            }
        }
        $picking->setReceiver($receiver);

        $picking->setClientSystemId(self::SpeedyClientId);
        $picking->setRef1($this->getTransactionId());

        if($dimensions = $this->getParcelDimensions()) {
            $size = new \Size();

            if (($length = (float)$dimensions->getLength()) > 0) {
                $size->setDepth($length);
            }
            if (($height = (float)$dimensions->getHeight()) > 0) {
                $size->setHeight($height);
            }
            if (($width = (float)$dimensions->getWidth()) > 0) {
                $size->setWidth($width);
            }

            $picking->setSize($size);
        }

        if (($priority_time_value = $this->getOtherParameters('priority_time_value')) instanceof Carbon) {
            $picking->setFixedTimeDelivery($priority_time_value->format('Hi'));
        }

        $picking->setServiceTypeId($this->getServiceId());

        $picking->setBackDocumentsRequest($this->getBackDocuments());
        $picking->setBackReceiptRequest($this->getBackReceipt());

        if ($special_delivery_id = $this->getOtherParameters('special_delivery_id')) {
            //A special delivery ID
            $picking->setSpecialDeliveryId($special_delivery_id);
        }

        $picking->setParcelsCount($this->getNumberOfPieces());
        $picking->setWeightDeclared($convert->convertWeightUnit($this->getWeight(), $this->getWeightUnit()));
        $picking->setContents($this->getContent());
        $picking->setPacking($this->getPackageType()); // packing type
        if(!is_null($package_id = $this->getOtherParameters('package_id'))) {
            $picking->setPackId($package_id);
        }
        $picking->setDocuments($this->getIsDocuments());
        $picking->setPalletized(false);

        $payer_type = ParamCalculation::PAYER_TYPE_SENDER;
        if($this->getPayer() == Consts::PAYER_RECEIVER) {
            $payer_type = ParamCalculation::PAYER_TYPE_RECEIVER;
        } elseif($this->getPayer() == Consts::PAYER_OTHER) {
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

        if(is_null($taking_date = $this->getShipmentDate())) {
            $result = $this->getClient()->getAllowedDaysForTaking(
                $this->getServiceId(),
                Carbon::now($this->getSenderTimeZone())->addDay(1)->timestamp,
                $sender_city_id && !$sender_office_id ? $sender_city_id : null,
                !$sender_city_id && $sender_office_id ? $sender_office_id : null
            );
            if($result && !empty($result[1])) {
                $this->setShipmentDate($result[1]);
            }
        }

        if(!is_null($taking_date = $this->getShipmentDate())) {
            $picking->setTakingDate($taking_date->timestamp);
        }

        if ($this->getOtherParameters('deffered_days')) {
            $picking->setDeferredDeliveryWorkDays($this->getOtherParameters('deffered_days'));
        }

        if ($note = $this->getClientNote()) {
            $picking->setNoteClient($note);
        }

        if(($cod = $this->getCashOnDeliveryAmount()) > 0) {
            $picking->setAmountCodBase($cod);
            $picking->setIncludeShippingPriceInCod((bool)$this->getOtherParameters('shipping_price_in_cod'));
        } else {
            $picking->setAmountCodBase(0);
        }

        if ($cod > 0 && ($this->getOtherParameters('money_transfer') && $receiver_address->getCountry()->getIso2() == 'BG')) {
            $picking->setRetMoneyTransferReqAmount($cod);
            $picking->setAmountCodBase(0);
        }

        $optionBeforePayment = new ParamOptionsBeforePayment();
        if ($cod > 0 && in_array($this->getOptionBeforePayment(), [Consts::OPTION_BEFORE_PAYMENT_OPEN, Consts::OPTION_BEFORE_PAYMENT_TEST])) {
            if($this->getOtherParameters('instruction_returns') == 'return') {
                $payer_type_return = ParamCalculation::PAYER_TYPE_SENDER;
            } else {
                $payer_type_return = ParamCalculation::PAYER_TYPE_RECEIVER;
            }
            if($this->getOptionBeforePayment() == Consts::OPTION_BEFORE_PAYMENT_TEST) {
                $optionBeforePayment->setTest(true);
                $optionBeforePayment->setReturnServiceTypeId($this->getServiceId());
                $optionBeforePayment->setReturnPayerType($payer_type_return);
            } elseif($this->getOptionBeforePayment() == Consts::OPTION_BEFORE_PAYMENT_OPEN) {
                $optionBeforePayment->setOpen(true);
                $optionBeforePayment->setReturnServiceTypeId($this->getServiceId());
                $optionBeforePayment->setReturnPayerType($payer_type_return);
            }
            $picking->setOptionsBeforePayment($optionBeforePayment);
        }

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

    /**
     * @param null|Address $address
     * @return null|ParamAddress
     */
    protected function translateAddress($address = null)
    {
        if(!$address || $address->isEmpty()) {
            return null;
        }
        $country = $address->getCountry();
        $state = $address->getState();
        $city = $address->getCity();
        $office = $address->getOffice();
        $quarter = $address->getQuarter();
        $street = $address->getStreet();

        $new_address = new ParamAddress();

        if ($country && $country->getId()) {
            $new_address->setCountryId($country->getId());
        }

        if ($state && $state->getId()) {
            $new_address->setStateId($state->getId());
        }

        if ($city) {
            if($city->getId()) {
                $new_address->setSiteId($city->getId());
            } elseif ($city->getName()) {
                $new_address->setSiteName($city->getName());
            }
        }
        if($office && $office->getId()) {
            $new_address->setSiteId(null);
        }

        if ($quarter) {
            if($quarter->getId()) {
                $new_address->setQuarterId($quarter->getId());
            } elseif($quarter->getName()) {
                $new_address->setQuarterName($quarter->getName());
            }
        }

        if ($street) {
            if($street->getId()) {
                $new_address->setStreetId($street->getId());
            } elseif($street->getName()) {
                $new_address->setStreetName($street->getName());
            }
        }

        if ($address->getStreetNumber()) {
            $new_address->setStreetNo($address->getStreetNumber());
        }

        if ($address->getBuilding()) {
            $new_address->setBlockNo($address->getBuilding());
        }

        if ($address->getEntrance()) {
            $new_address->setEntranceNo($address->getEntrance());
        }

        if ($address->getFloor()) {
            $new_address->setFloorNo($address->getFloor());
        }

        if ($address->getApartment()) {
            $new_address->setApartmentNo($address->getApartment());
        }

        if($l = $address->getNote()) {
            $new_address->setAddressNote($l);
        }

        if($l = $address->getAddress1()) {
            $new_address->setFrnAddressLine1($l);
        }

        if($l = $address->getAddress2()) {
            $new_address->setFrnAddressLine2($l);
        }

        if($post_code = $address->getPostCode()) {
            $new_address->setPostCode($post_code);
        }

        return $new_address;
    }

}