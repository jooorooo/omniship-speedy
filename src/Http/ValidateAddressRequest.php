<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Speedy\Http;

use ParamAddress;

class ValidateAddressRequest extends AbstractRequest
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
            return false;
        }

        //sender
        $paramAddress = new ParamAddress();
        $paramAddress->setSiteId($address->getCity() ? $address->getCity()->getId() : null);
		$paramAddress->setSiteName($address->getCity() ? $address->getCity()->getName() : null);
        $paramAddress->setPostCode($address->getPostCode());
        if($l = $address->getAddress1()) {
            $paramAddress->setAddressNote($l);
        }
        if($l = $address->getAddress2()) {
            $paramAddress->setFrnAddressLine1($l);
        }
        if($l = $address->getAddress3()) {
            $paramAddress->setFrnAddressLine2($l);
        }
        $paramAddress->setCountryId($address->getCountry() ? $address->getCountry()->getId() : null);
        $paramAddress->setStateId($address->getState() ? $address->getState()->getId() : null);
        $paramAddress->setStreetId($address->getStreet() ? $address->getStreet()->getId() : null);
        $paramAddress->setStreetNo($address->getStreetNumber());
        $paramAddress->setQuarterId($address->getQuarter() ? $address->getQuarter()->getId() : null);
        $paramAddress->setBlockNo($address->getBuilding());
        $paramAddress->setEntranceNo($address->getEntrance());
        $paramAddress->setFloorNo($address->getFloor());
        $paramAddress->setApartmentNo($address->getApartment());

        return $paramAddress;
    }

    /**
     * @param mixed $data
     * @return ValidateAddressResponse
     */
    public function sendData($data) {
        $response = $data ? $this->getClient()->validateAddress($data) : null;
        return $this->createResponse(!$response && $this->getClient()->getError() ? $this->getClient()->getError() : $response);
    }

    /**
     * @param $data
     * @return ValidateAddressResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new ValidateAddressResponse($this, $data);
    }

}