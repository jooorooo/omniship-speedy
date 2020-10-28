<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Speedy\Http;

use Carbon\Carbon;
use Omniship\Common\Bill\Create;
use Omniship\Speedy\Client;
use ResultBOL;
use ResultAmounts;
use ResultParcelInfo;

class CreateBillOfLadingResponse extends AbstractResponse
{

    /**
     * @return Create
     */
    public function getData()
    {
        $result = new Create();
        if(!is_null($this->getCode()) || !($this->data instanceof ResultBOL)) {
            return $result;
        }

        /** @var $amounts ResultAmounts */
        $amounts = $this->data->getAmounts();
        /** @var $parcels ResultParcelInfo[] */
        $parcels = $this->data->getGeneratedParcels();

//        if(count($parcels) == 1) {
//            $result->setBolId($parcels[0]->getParcelId());
//        } else {
//            $result->setBolId(array_map(function(ResultParcelInfo $parcel) {
//                return $parcel->getParcelId();
//            }, $parcels));
//        }
        $result->setServiceId(strtolower($this->getRequest()->getServiceId()));
        $result->setBolId((string)$parcels[0]->getParcelId());
        $result->setBillOfLadingSource(base64_encode($this->getRequest()->getClient()->createPDF($parcels[0]->getParcelId())));
        $result->setBillOfLadingType($result::PDF);
        $result->setEstimatedDeliveryDate(Carbon::createFromFormat('Y-m-d\TH:i:sP', $this->data->getDeadlineDelivery(), $this->getRequest()->getReceiverTimeZone()));
        $result->setPickupDate($this->getRequest()->getShipmentDate());
        $result->setInsurance($amounts->getInsurancePremium() * (1 + (Client::VAT_PERCENTAGE/100)));
        $result->setCashOnDelivery($amounts->getCodPremium() * (1 + (Client::VAT_PERCENTAGE/100)));
        $result->setTotal($amounts->getTotal());
        $result->setCurrency('BGN'); //@todo return price in BGN

        return $result;
    }
    /**
     * {@inheritdoc}
     */
    public function getResponseFormatted()
    {
        if($this->data instanceof ResultBOL) {
            $response = $this->data->toArray();
            if (isset($response['bill_of_lading_source'])) {
                $response['bill_of_lading_source'] = '{BLOB}';
            }

            return var_export($response, 1);
        }

        return var_export(null, 1);
    }

}