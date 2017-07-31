<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 17:22 ч.
 */

namespace Omniship\Speedy\Http;

use Omniship\Common\RequestCourier;
use ResultOrderPickingInfo;

class RequestCourierResponse extends AbstractResponse
{
    /**
     * The data contained in the response.
     *
     * @var ResultOrderPickingInfo[]
     */
    protected $data;

    /**
     * @return RequestCourier[]
     */
    public function getData()
    {
        if(!is_null($this->getCode()) || !is_array($this->data)) {
            return [];
        }

        $results = [];
        foreach($this->data AS $result) {
            $results[] = new RequestCourier([
                'bol_id' => $result->getBillOfLading(),
                'pickup_date' => $this->getRequest()->getEndDate(),
                'error' => $result->getErrorDescriptions() ? : null,
                'error_code' => $result->getErrorDescriptions() ? md5($result->getErrorDescriptions()) : null,
            ]);
        }

        return $results;
    }

}