<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 12.5.2017 г.
 * Time: 18:03 ч.
 */

namespace Omniship\Speedy\Http;

class TrackingParcelRequest extends AbstractRequest
{
    /**
     * @return integer
     */
    public function getData() {
        return $this->getBolId();
    }

    /**
     * @param mixed $data
     * @return TrackingParcelResponse
     */
    public function sendData($data) {
        $response = $this->getClient()->trackParcel($data, $this->getLanguageCode(), false);
        return $this->createResponse(!$response && $this->getClient()->getError() ? $this->getClient()->getError() : $response);
    }

    /**
     * @param $data
     * @return TrackingParcelResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new TrackingParcelResponse($this, $data);
    }
}