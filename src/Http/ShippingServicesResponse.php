<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Speedy\Http;

use Carbon\Carbon;
use Omniship\Common\ShippingServiceBag;
use Omniship\Message\AbstractResponse;
use ResultCalculationMS;

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

        if(is_array($this->data)) {
            $services = $this->getRequest()->getClient()->getServicesList($this->getRequest()->getLanguageCode());
            foreach($this->data AS $service) {
                $service = $this->_getService($service);
                $result_info = $service->getResultInfo();
                $amounts = $result_info->getAmounts();
                $result->add([
                    'id' => $service->getServiceTypeId(),
                    'name' => $services[$service->getServiceTypeId()],
                    'description' => null,
                    'price' => $amounts->getTotal(),
                    'pickup_date' => Carbon::createFromFormat('Y-m-d\TH:i:sP', $result_info->getTakingDate()),
                    'pickup_time' => Carbon::createFromFormat('Y-m-d\TH:i:sP', $result_info->getTakingDate()),
                    'delivery_date' => Carbon::createFromFormat('Y-m-d\TH:i:sP', $result_info->getDeadlineDelivery()),
                    'delivery_time' => Carbon::createFromFormat('Y-m-d\TH:i:sP', $result_info->getDeadlineDelivery()),
                    'currency' => $this->getRequest()->getCurrency(),
                    'tax' => $amounts->getVat(),
                    'insurance' => $amounts->getInsurancePremium()
                ]);
            }
        }
        return $result;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if(is_string($this->data)) {
            return $this->data;
        }
        return null;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if(is_string($this->data)) {
            if(preg_match('~\(([a-z0-9]{2,})\)~i', $this->data, $match)) {
                return $match[1];
            }
            return md5($this->data);
        }
        return null;
    }

    /**
     * @param ResultCalculationMS $service
     * @return ResultCalculationMS
     */
    protected function _getService(ResultCalculationMS $service) {
        return $service;
    }

}