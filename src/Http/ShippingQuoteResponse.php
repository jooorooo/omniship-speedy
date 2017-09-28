<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Speedy\Http;

use Carbon\Carbon;
use Omniship\Common\ShippingQuoteBag;
use Omniship\Consts;
use ResultCalculationMS;

class ShippingQuoteResponse extends AbstractResponse
{

    /**
     * @return ShippingQuoteBag
     */
    public function getData()
    {
        $result = new ShippingQuoteBag();
        if(!is_null($this->getCode())) {
            return $result;
        }

        if(is_array($this->data)) {
            $services = $this->getRequest()->getClient()->getServicesList($this->getRequest()->getLanguageCode());
            foreach($this->data AS $service) {
                $service = $this->_getService($service);
                $result_info = $service->getResultInfo();
                $amounts = $result_info->getAmounts();
                $result->push([
                    'id' => $service->getServiceTypeId(),
                    'name' => $services[$service->getServiceTypeId()],
                    'description' => null,
                    'price' => $amounts->getTotal(),
                    'pickup_date' => Carbon::createFromFormat('Y-m-d\TH:i:sP', $result_info->getTakingDate()),
                    'pickup_time' => Carbon::createFromFormat('Y-m-d\TH:i:sP', $result_info->getTakingDate()),
                    'delivery_date' => Carbon::createFromFormat('Y-m-d\TH:i:sP', $result_info->getDeadlineDelivery()),
                    'delivery_time' => Carbon::createFromFormat('Y-m-d\TH:i:sP', $result_info->getDeadlineDelivery()),
                    'currency' => 'BGN',//@todo return price in BGN
                    'tax' => $amounts->getVat(),
                    'insurance' => $amounts->getInsurancePremium(),
                    'exchange_rate' => null,
                    'payer' => $this->getRequest()->getPayer() ? : Consts::PAYER_SENDER
                ]);
            }
        }
        return $result;
    }

    /**
     * @param ResultCalculationMS $service
     * @return ResultCalculationMS
     */
    protected function _getService(ResultCalculationMS $service) {
        return $service;
    }

}