<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 12.5.2017 г.
 * Time: 18:03 ч.
 */

namespace Omniship\Speedy\Http;

class ServicesRequest extends AbstractRequest
{
    /**
     * @return array
     */
    public function getData() {
        return [];
    }

    /**
     * @param mixed $data
     * @return ServicesResponse
     */
    public function sendData($data) {
        $response = $this->getClient()->getServices($this->getLanguageCode());
        return $this->createResponse(!$response && $this->getClient()->getError() ? $this->getClient()->getError() : $response);
    }

    /**
     * @param $data
     * @return ServicesResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new ServicesResponse($this, $data);
    }
}