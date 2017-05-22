<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Speedy\Http;

use Omniship\Common\ItemBag;
use Omniship\Common\ShippingService;
use ParamCalculation;
use ParamClientData;
use ParamPhoneNumber;
use ParamOptionsBeforePayment;
use ParamAddress;
use Carbon\Carbon;
use ParamPicking;
use Omniship\Speedy\Client AS SpeedyClient;

class CancelBillOfLadingRequest extends AbstractRequest
{

    /**
     * @var SpeedyClient
     */
    protected $client;

    /**
     * @return array
     */
    public function getData() {
        if(!$login = $this->getClient()->getResultLogin()) {
            return null;
        }

        return [
            'bill_id' => $this->getBillId(),
            'comment' => $this->getCancelComment()
        ];
    }

    /**
     * @param mixed $data
     * @return CancelBillOfLadingResponse
     */
    public function sendData($data) {
        $response = $data ? $this->getClient()->cancelBol($data['bill_id'], $data['comment']) : null;
        return $this->createResponse(!$response && $this->getClient()->getError() ? $this->getClient()->getError() : $response);
    }

    /**
     * @param $data
     * @return CancelBillOfLadingResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new CancelBillOfLadingResponse($this, $data);
    }

}