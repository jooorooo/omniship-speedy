<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Speedy\Http;

use Omniship\Common\ItemBag;
use Omniship\Consts;
use Omniship\Speedy\Helper\Convert;
use ParamCalculation;
use Carbon\Carbon;

class ShippingQuoteRequest extends AbstractRequest
{

    /**
     * @return ParamCalculation
     */
    public function getData() {

        $paramCalculation = new ParamCalculation();
        if(is_null($login = $this->getClient()->getResultLogin())) {
            return $paramCalculation;
        }

        $convert = new Convert();

        //if send out of bg disable cod & payer is sender
        //Payer type (0=sender, 1=receiver or 2=third party)
        $payer_type = ParamCalculation::PAYER_TYPE_SENDER;
        if($this->getPayer() == Consts::PAYER_RECEIVER) {
            $payer_type = ParamCalculation::PAYER_TYPE_RECEIVER;
        } elseif($this->getPayer() == Consts::PAYER_OTHER) {
            $payer_type = ParamCalculation::PAYER_TYPE_THIRD_PARTY;
        }
        $paramCalculation->setPayerType($payer_type);

        //Packings payer type (0=sender, 1=reciever or 2=third party)
        $paramCalculation->setPayerTypePackings($payer_type);
        
        //The date for shipment pick-up (the "time" component is ignored if it is allready passed or is overriden with 09:01). Default value is "today". (Required: no)
        if(($taking_date = $this->getShipmentDate()) instanceof Carbon) {
            $paramCalculation->setTakingDate($taking_date->timestamp);
        } else {
            $paramCalculation->setTakingDate(Carbon::now()->timestamp);
        }
        //If set to true, the "takingDate" field is not just to be validated, but the first allowed (following) date will be used instead (in compliance with the pick-up schedule etc.). (Required: no)
//        $paramCalculation->setAutoAdjustTakingDate(true);

        $sender_address = $this->getSenderAddress();
        // if no sender address get information from profile
        if(!$sender_address) {
            $paramCalculation->setSenderId($login->getClientId());
        } else {
            //if send from office
            if(!is_null($office = $sender_address->getOffice()) && $office->getId()) {
                $paramCalculation->setWillBringToOfficeId($office->getId());
            } else {
                $paramCalculation->setSenderCountryId($sender_address->getCountry()->getId());
                $paramCalculation->setSenderSiteId($sender_address->getCity()->getId());
                $paramCalculation->setSenderPostCode($sender_address->getPostCode());
//                $paramCalculation->setSenderId($login->getClientId());
            }
        }

        $receiver_address = $this->getReceiverAddress();
        if($receiver_address && !is_null($office = $receiver_address->getOffice()) && $office->getId()) {
            //ID of an office "to be called". Non-null and non-zero value indicates this picking as "to office". Otherwise "to address" is considered. If officeToBeCalledId is provided (non-null and non-zero), toBeCalled flag is considered "true". If officeToBeCalledId is set to 0, toBeCalled flag is considered "false".
            $paramCalculation->setOfficeToBeCalledId($office->getId());
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
        if (($priority_time_value = $this->getOtherParameters('priority_time_value')) instanceof Carbon) {
            $paramCalculation->setFixedTimeDelivery($priority_time_value->format('Hi'));
        }

        //In some rare cases users might prefer the delivery to be deferred by a day or two. This parameter allows users to specify by how many (working) days they would like to postpone the shipment delivery.
        if ($this->getOtherParameters('deffered_days')) {
            $paramCalculation->setDeferredDeliveryWorkDays($this->getOtherParameters('deffered_days'));
        }

        if(($insurance = $this->getInsuranceAmount()) > 0) {
            //Shipment insurance value (if the shipment is insured)
            $paramCalculation->setAmountInsuranceBase($insurance);
            //Specifies whether the shipment is fragile - necessary when the price of insurance is being calculated
            $paramCalculation->setFragile((bool)$this->getOtherParameters('fragile'));
            //Insurance payer type (0=sender, 1=reciever or 2=third party)
            $paramCalculation->setPayerTypeInsurance($payer_type);
        } else {
            $paramCalculation->setFragile(false);
        }

        //Cash-on-Delivery (COD) amount

        if(($cod = $this->getCashOnDeliveryAmount()) > 0) {
            $paramCalculation->setAmountCodBase($cod);
            //Flag indicating whether the shipping price should be included into the cash on delivery price.
            $paramCalculation->setIncludeShippingPriceInCod((bool)$this->getOtherParameters('shipping_price_in_cod'));
        } else {
            $paramCalculation->setAmountCodBase(0);
        }

        //Specifies if the COD value is to be paid to a third party. Allowed only if the shipment has payerType = 2 (third party). (Required: no)
        $paramCalculation->setPayCodToThirdParty(false);

        //Parcels count (must be equal to the number of parcels described in List parcels)
        $paramCalculation->setParcelsCount($this->getNumberOfPieces());
        //Declared weight (the greater of "volume" and "real" weight values)
        $paramCalculation->setWeightDeclared($convert->convertWeightUnit($this->getWeight(), $this->getWeightUnit()));
        //Specifies whether the shipment only consists of documents
        $paramCalculation->setDocuments($this->getIsDocuments());
        //Specifies whether the shipment is palletized
        $paramCalculation->setPalletized(false);



        if ($special_delivery_id = $this->getOtherParameters('special_delivery_id')) {
            //A special delivery ID
            $paramCalculation->setSpecialDeliveryId($special_delivery_id);
        }

        //Check if specified office to be called is working. Default value - true
        $paramCalculation->setCheckTBCOfficeWorkDay(true);

        /** @var $items ItemBag */
//        $items = $this->getItems();
//        $parcels = [];
//        foreach($items->all() AS $row => $item) {
//            $parcel = new \ParamParcelInfo();
//            $parcel->setSeqNo($row+1);
//            $parcel->setParcelId(-1);
//            $parcel->setWeight($convert->convertWeightUnit($item->getWeight(), $this->getWeightUnit()));
//            if($item->getWidth() && $item->getDepth() && $item->getHeight()) {
//                $size = new \Size();
//                $size->setDepth($convert->convertLengthUnit($item->getDepth(), $this->getDimensionUnit()));
//                $size->setHeight($convert->convertLengthUnit($item->getHeight(), $this->getDimensionUnit()));
//                $size->setWidth($convert->convertLengthUnit($item->getWidth(), $this->getDimensionUnit()));
//                $parcel->setSize($size);
//            }
//            $parcels[] = $parcel;
//        }
//        $paramCalculation->setParcels($parcels);

        return $paramCalculation;
    }

    public function sendData($data) {
        $response = $this->getClient()->calculate($data, $this->getOtherParameters('allowed_services'));
        return $this->createResponse(!$response && $this->getClient()->getError() ? $this->getClient()->getError() : $response);
    }

    /**
     * @param $data
     * @return ShippingQuoteResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new ShippingQuoteResponse($this, $data);
    }

}