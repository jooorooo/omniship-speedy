<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Speedy\Http;

class CodPaymentRequest extends AbstractRequest
{

    /**
     * @return integer
     */
    public function getData() {
        if(!$login = $this->getClient()->getResultLogin()) {
            return null;
        }

        return $this->getBolId();
    }

    /**
     * @param mixed $bol_id
     * @return CodPaymentResponse
     */
    public function sendData($bol_id) {
        $response = $bol_id ? $this->getClient()->codPayment($bol_id) : null;
        return $this->createResponse(!$response && $this->getClient()->getError() ? $this->getClient()->getError() : $response);
    }

    /**
     * @param $data
     * @return CodPaymentResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new CodPaymentResponse($this, $data);
    }

}