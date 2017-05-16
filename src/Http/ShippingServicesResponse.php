<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\FedEx\Http;

use Carbon\Carbon;
use Omniship\Common\ShippingServiceBag;
use Omniship\Message\AbstractResponse;

class ShippingServicesResponse extends AbstractResponse
{
    /**
     * @var \SimpleXMLElement
     */
    protected $xml;

    /**
     * @return ShippingServiceBag
     */
    public function getData()
    {
        $result = new ShippingServiceBag();
        if(!is_null($this->getCode())) {
            return $result;
        }

        if(!empty($this->data->RateReplyDetails)) {
            foreach($this->data->RateReplyDetails AS $quote) {
                if(!empty($quote->RatedShipmentDetails)) {
                    foreach($quote->RatedShipmentDetails AS $shipment_details) {
                        $result->add([
                            'id' => $quote->ServiceType,
                            'name' => $quote->ServiceType,
                            'description' => !empty($quote->CommitDetails->DeliveryMessages) ? $quote->CommitDetails->DeliveryMessages : '',
                            'price' => $shipment_details->ShipmentRateDetail->TotalNetChargeWithDutiesAndTaxes->Amount,
                            'pickup_date' => Carbon::now($this->request->getSenderTimeZone()),
                            'pickup_time' => Carbon::now($this->request->getSenderTimeZone()),
                            'delivery_date' => !empty($quote->DeliveryTimestamp) ? Carbon::createFromFormat('Y-m-d\TH:i:s', $quote->DeliveryTimestamp, $this->request->getReceiverTimeZone()) : null,
                            'delivery_time' => !empty($quote->DeliveryTimestamp) ? Carbon::createFromFormat('Y-m-d\TH:i:s', $quote->DeliveryTimestamp, $this->request->getReceiverTimeZone()) : null,
                            'currency' => $shipment_details->ShipmentRateDetail->TotalNetChargeWithDutiesAndTaxes->Currency,
                            'tax' => $shipment_details->ShipmentRateDetail->TotalTaxes->Amount,
                            'insurance' => 0
                        ]);
                    }
                }
            }
        }
        return $result;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if(!empty($this->data->Notifications)) {
            if(is_array($this->data->Notifications)) {
                foreach ($this->data->Notifications AS $notification) {
                    if ($notification->Severity == 'ERROR' || empty($this->data->RateReplyDetails)) {
                        return $notification->LocalizedMessage;
                    }
                }
            } elseif(empty($this->data->RateReplyDetails)) {
                return $this->data->Notifications->LocalizedMessage;
            }
        }
        return null;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if(!empty($this->data->Notifications)) {
            if(is_array($this->data->Notifications)) {
                foreach ($this->data->Notifications AS $notification) {
                    if ($notification->Severity == 'ERROR') {
                        return $notification->Code;
                    }
                }
            } elseif(empty($this->data->RateReplyDetails)) {
                return $this->data->Notifications->Code;
            }
        }
        return null;
    }

}