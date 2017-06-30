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

        $result->setBolId($parcels[0]->getParcelId());
        $result->setBillOfLadingType($result::PDF);
        $result->setBillOfLadingSource(base64_encode($this->getRequest()->getClient()->createPDF($result->getBolId())));
        $result->setEstimatedDeliveryDate(Carbon::createFromFormat('Y-m-d\TH:i:sP', $this->data->getDeadlineDelivery(), $this->getRequest()->getReceiverTimeZone()));
        $result->setPickupDate($this->getRequest()->getShipmentDate());
        $result->setInsurance($amounts->getInsurancePremium());
        $result->setTotal($amounts->getTotal());
        $result->setCurrency('BGN'); //@todo return price in BGN

        return $result;
    }

}