<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Speedy\Http;

use Omniship\Common\Address;
use ParamAddress;

class ValidatePostCodeRequest extends AbstractRequest
{

    /**
     * @return ParamAddress
     */
    public function getData() {
        if(!$login = $this->getClient()->getResultLogin()) {
            return null;
        }

        $address = $this->getAddress();
        if(!$address) {
            return null;
        }

        return $address;
    }

    /**
     * @param null|Address $data
     * @return ValidateAddressResponse
     */
    public function sendData($data) {
        $response = $data ? $this->getClient()->validatePostCode(str_replace(' ', '', $data->getPostCode()), $data->getCountry() ? $data->getCountry()->getId() : null, $data->getCity() ? $data->getCity()->getId() : null) : null;
        return $this->createResponse(!$response && $this->getClient()->getError() ? $this->getClient()->getError() : $response);
    }

    /**
     * @param $data
     * @return ValidatePostCodeResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new ValidatePostCodeResponse($this, $data);
    }

}