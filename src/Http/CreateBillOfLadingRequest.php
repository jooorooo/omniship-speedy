<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Speedy\Http;

use Omniship\Common\Address;
use Omniship\Common\PieceBag;
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

    /* @todo CloudCart number */
    const SpeedyClientId = 18060510100; //An optional value used to identify user's client software. Please verify the allowed values with Speedy's IT Department.

    /**
     * @return ParamCalculation
     */
    public function getData()
    {
        if (!$login = $this->getClient()->getResultLogin()) {
            return null;
        }

        $convert = new Convert();

        $picking = new ParamPicking();

        //sender
        $sender = new ParamClientData();
        $sender_address = $this->getSenderAddress();

        $sender_city_id = null;
        $sender_office_id = null;
        $sender->setClientId($this->getOtherParameters('sender_id', $login->getClientId()));

        if ($sender_address) {

//            $sender->setPartnerName($sender_address->getFirstName() . ' ' . $sender_address->getLastName());
            $sender->setContactName($sender_address->getFullName());

            if ($company = $sender_address->getCompanyName()) {
                $sender->setObjectName($company);
            }

            if ($sender_address->getPhone()) {
                $senderPhone = new ParamPhoneNumber();
                $senderPhone->setNumber($sender_address->getPhone());
                $sender->setPhones([$senderPhone]);
            }

            $sender_city = $sender_address->getCity();
            $sender_office = $sender_address->getOffice();
            if ($sender_city && $sender_city->getId()) {
                $sender_city_id = $sender_city->getId();
            } elseif (!$sender_office || !$sender_office->getId()) {
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
            if ($client_info && $phones = $client_info->getPhones()) {
                $senderPhone = new ParamPhoneNumber();
                $senderPhone->setNumber($phones[0]->getNumber());
                $sender->setPhones([$senderPhone]);
            }
        }

        $picking->setSender($sender);

        $receiver = new ParamClientData();
        $receiver->setEmail($this->getReceiverEmail());
        $receiver_address = $this->getReceiverAddress();
        if ($receiver_address) {
            $receiver->setPartnerName($receiver_address->getFullName());
            $receiver->setContactName($receiver_address->getFullName());

            if ($company = $receiver_address->getCompanyName()) {
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

        if (!is_null($priority_time = $this->getPriorityTime())) {
            $picking->setFixedTimeDelivery($priority_time->format('Hi'));
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
        if (!is_null($package_id = $this->getPackageId())) {
            $picking->setPackId($package_id);
        }
        $picking->setDocuments($this->getIsDocuments());
        $picking->setPalletized(false);

        $payer_type = ParamCalculation::PAYER_TYPE_SENDER;
        if ($this->getPayer() == Consts::PAYER_RECEIVER) {
            $payer_type = ParamCalculation::PAYER_TYPE_RECEIVER;
        } elseif ($this->getPayer() == Consts::PAYER_OTHER) {
            $payer_type = ParamCalculation::PAYER_TYPE_THIRD_PARTY;
        }
        $picking->setPayerType($payer_type);

        if($payer_type == ParamCalculation::PAYER_TYPE_THIRD_PARTY) {
            if(!empty($payer = $this->getOtherParameters('payer_id'))) {
                $payer_id = $payer;
            } else {
                $payer_id = $login->getClientId();
            }
            $picking->setPayerRefId($payer_id);
            $picking->setPayerRefPackingsId($payer_id);
            if($this->getInsuranceAmount() > 0) {
                $picking->setPayerRefInsuranceId($payer_id);
            }
        }

        //Packings payer type (0=sender, 1=reciever or 2=third party)
        $picking->setPayerTypePackings($payer_type);

        if (($ins = $this->getInsuranceAmount()) > 0) {
            $picking->setFragile((bool)$this->getOtherParameters('fragile'));
            $picking->setAmountInsuranceBase($ins);
            $picking->setPayerTypeInsurance($payer_type);
        } else {
            $picking->setFragile(false);
        }

        if (is_null($taking_date = $this->getShipmentDate())) {
            $result = $this->getClient()->getAllowedDaysForTaking(
                $this->getServiceId(),
                Carbon::now($this->getSenderTimeZone())->addDay()->timestamp,
                $sender_city_id && !$sender_office_id ? $sender_city_id : null,
                !$sender_city_id && $sender_office_id ? $sender_office_id : null
            );
            if ($result && !empty($result[1])) {
                $this->setShipmentDate($result[1]);
            }
        } else {
            $picking->setTakingDate($taking_date->format('Y-m-d'));
        }

        if ($this->getOtherParameters('deffered_days')) {
            $picking->setDeferredDeliveryWorkDays($this->getOtherParameters('deffered_days'));
        }

        if ($note = $this->getClientNote()) {
            $picking->setNoteClient($note);
        }

        $cod = $this->getCashOnDeliveryAmount();
        if ($cod > 0 && ($this->getMoneyTransfer() && strtoupper($receiver_address->getCountry()->getIso2()) == 'BG')) {
            $picking->setRetMoneyTransferReqAmount($cod);
            $picking->setAmountCodBase(0);
        } elseif($cod > 0) {
            $picking->setAmountCodBase($cod);
            $picking->setIncludeShippingPriceInCod((bool)$this->getOtherParameters('shipping_price_in_cod'));
        }

        $optionBeforePayment = new ParamOptionsBeforePayment();
        if ($cod > 0 && in_array($this->getOptionBeforePayment(), [Consts::OPTION_BEFORE_PAYMENT_OPEN, Consts::OPTION_BEFORE_PAYMENT_TEST])) {
            if ($this->getInstructionReturns() == 'return') {
                $payer_type_return = ParamCalculation::PAYER_TYPE_RECEIVER;
            } else {
                $payer_type_return = ParamCalculation::PAYER_TYPE_SENDER;
            }
            if ($this->getOptionBeforePayment() == Consts::OPTION_BEFORE_PAYMENT_TEST) {
                $optionBeforePayment->setTest(true);
                $optionBeforePayment->setReturnServiceTypeId($this->getServiceId());
                $optionBeforePayment->setReturnPayerType($payer_type_return);
            } elseif ($this->getOptionBeforePayment() == Consts::OPTION_BEFORE_PAYMENT_OPEN) {
                $optionBeforePayment->setOpen(true);
                $optionBeforePayment->setReturnServiceTypeId($this->getServiceId());
                $optionBeforePayment->setReturnPayerType($payer_type_return);
            }
            $picking->setOptionsBeforePayment($optionBeforePayment);
        }

        /** @var $pieces PieceBag */
        $pieces = $this->getPieces();
        if ($pieces->count()) {
            $parcels = [];
            $total_pieces = $pieces->count();
            foreach ($pieces->all() as $row => $item) {
                $parcel = new \ParamParcelInfo();
                $parcel->setSeqNo($row + 1);
                $parcel->setParcelId(-1);
                if (($id = $item->getId())) {
                    $parcel->setPackId($id);
                }
                $parcel->setWeight($convert->convertWeightUnit($item->getWeight(), $this->getWeightUnit()));
                if ($item->getWidth() && $item->getDepth() && $item->getHeight()) {
                    $size = new \Size();
                    $size->setDepth($convert->convertLengthUnit($item->getDepth(), $this->getDimensionUnit()));
                    $size->setHeight($convert->convertLengthUnit($item->getHeight(), $this->getDimensionUnit()));
                    $size->setWidth($convert->convertLengthUnit($item->getWidth(), $this->getDimensionUnit()));
                    $parcel->setSize($size);
                } elseif (trim($name = $item->getName())&& in_array(strtoupper($name), ['XS','S','M','L']) && $this->getServiceId() == 500 && $total_pieces == 1) {
                    $parcel->setPredefinedSize(strtoupper($name));
                }
                $parcels[] = $parcel;
            }
            $picking->setParcels($parcels);
        }

        if(($money_transfer = $this->getOtherParameters('money_transfer')) > 0) {
            $picking->setRetMoneyTransferReqAmount($money_transfer);
        }

        if ($this->getClient()->getError()) {
            return null;
        }

        return $picking;
    }

    /**
     * @param mixed $data
     * @return CreateBillOfLadingResponse
     */
    public function sendData($data)
    {
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
        if (!$address || $address->isEmpty()) {
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
            if ($city->getId()) {
                $new_address->setSiteId($city->getId());
            } elseif ($city->getName()) {
                $new_address->setSiteName($city->getName());
            }
        }
        if ($office && $office->getId()) {
            $new_address->setSiteId(null);
        }

        if ($quarter) {
            if ($quarter->getId()) {
                $new_address->setQuarterId($quarter->getId());
            } elseif ($quarter->getName()) {
                $new_address->setQuarterName($quarter->getName());
            }
        }

        if ($street) {
            if ($street->getId()) {
                $new_address->setStreetId($street->getId());
            } else {
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

        $lines = array_filter([$address->getNote(), $address->getAddress1(), $address->getAddress2()]);
        if ($lines) {
            $new_address->setAddressNote(implode(', ', $lines));
        }

        if($address->getAddress3()) {
            $str = mb_substr($address->getAddress3(), 0, 80, 'utf-8');
            if(mb_strlen($str, 'utf-8') > 40) {
                $new_address->setFrnAddressLine1(mb_substr($str, 0, 40, 'utf-8'));
                $new_address->setFrnAddressLine2(mb_substr($str, 40, 80, 'utf-8'));
            } else {
                $new_address->setFrnAddressLine1($str);
            }
        }

//        $l = null;
//        if ($street && !$street->getId()) {
//            $l = [0=>$street->getName()];
//            if ($address->getStreetNumber()) {
//                $l[0] .= ' ' . $address->getStreetNumber();
//            }
//        }
//        if ($quarter && !$quarter->getId()) {
//            $l[1] = $quarter->getName();
//            if (!$street && $address->getStreetNumber()) {
//                $l[1] .= ' ' . $address->getStreetNumber();
//            }
//        }

//        $lines = array_filter([$address->getAddress1(), $address->getAddress2(), $address->getAddress3()]);
//        if($l) {
//            $new_address->setFrnAddressLine1(implode(', ', $l));
//            if($lines) {
//                $new_address->setFrnAddressLine2(implode(', ', $lines));
//            }
//        } else {
//            if($lines) {
//                $new_address->setFrnAddressLine1(implode(', ', $lines));
//            }
//        }
        /*if ($l = $address->getAddress1()) {
            if ($street && !$street->getId()) {
                $l = $street->getName() . ($l ? ', ' . $l : '');
            }
            if ($quarter && !$quarter->getId()) {
                $l = $quarter->getName() . ($l ? ', ' . $l : '');
            }
            $new_address->setFrnAddressLine1($l);
        }

        if ($l = $address->getAddress2()) {
            $new_address->setFrnAddressLine2($l);
        }*/

        if ($post_code = $address->getPostCode()) {
            $new_address->setPostCode(str_replace(' ', '', $post_code));
        }

        //lat & lng
//        if(!is_null($address->getLongitude()) && !is_null($address->getLatitude())) {
//            $new_address->setCoordX($address->getLongitude());
//            $new_address->setCoordY($address->getLatitude());
//        }

        return $new_address;
    }

}