<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Speedy\Http;

use Omniship\Common\ServiceBag;

class ServicesResponse extends AbstractResponse
{
    /**
     * @return ServiceBag
     */
    public function getData()
    {
        $result = new ServiceBag();
        if(!is_null($this->getCode())) {
            return $result;
        }

        if(is_array($this->data)) {
            foreach($this->data AS $service) {
                $result->push([
                    'id' => $service->getTypeId(),
                    'name' => $service->getName(),
                    'support_fixed_time' => $service->getAllowanceFixedTimeDelivery(),
                    'support_cash_on_delivery' => $service->getAllowanceCashOnDelivery(),
                    'support_insurance' => $service->getAllowanceInsurance(),
                    'support_back_documents' => $service->getAllowanceBackDocumentsRequest(),
                    'support_back_receipt' => $service->getAllowanceBackReceiptRequest(),
                    'support_to_be_called' => $service->getAllowanceToBeCalled(),
                ]);
            }
        }
        return $result;
    }
}