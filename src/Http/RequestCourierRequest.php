<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Speedy\Http;

use Omniship\Speedy\Client AS SpeedyClient;

class RequestCourierRequest extends AbstractRequest
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

        return $this->getBolId();
    }

    /**
     * @param mixed $data
     * @return RequestCourierResponse
     */
    public function sendData($data) {
        $response = $data ? $this->getClient()->requestCourier($data) : null;
        return $this->createResponse(!$response && $this->getClient()->getError() ? $this->getClient()->getError() : $response);
    }

    /**
     * @param $data
     * @return RequestCourierResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new RequestCourierResponse($this, $data);
    }

}