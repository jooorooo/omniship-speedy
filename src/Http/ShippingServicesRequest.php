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
use Carbon\Carbon;

class ShippingServicesRequest extends AbstractRequest
{

    /**
     * @return ParamCalculation
     */
    public function getData() {

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
        $response = $this->getClient()->calculate($data, $this->getOtherParameters('allowed_services'));
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