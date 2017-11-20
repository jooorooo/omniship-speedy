<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Speedy\Http;

class CodPaymentsRequest extends AbstractRequest
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
        $results = [];
        if(is_array($bol_id)) {
            foreach($bol_id AS $id) {
                if($result = $this->getClient()->codPayment($id)) {
                    $results[$id] = $result;
                } else {
                    $results[$id] = $this->getClient()->getError();
                }
            }
        }
        return $this->createResponse($results);
    }

    /**
     * @param $data
     * @return CodPaymentsResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new CodPaymentsResponse($this, $data);
    }

}