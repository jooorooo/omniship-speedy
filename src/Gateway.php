<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 11.5.2017 г.
 * Time: 17:18 ч.
 */

namespace Omniship\FedEx;

use Omniship\FedEx\Http\ShippingServicesRequest;
use Omniship\FedEx\Http\TrackingParcelRequest;
use Omniship\Common\AbstractGateway;

class Gateway extends AbstractGateway
{

    private $name = 'FedEx';

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getDefaultParameters()
    {
        return array(
            'username' => '',
            'password' => '',
            'meter' => '',
            'key' => '',
        );
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->getParameter('username');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setUsername($value)
    {
        return $this->setParameter('username', $value);
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->getParameter('password');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPassword($value)
    {
        return $this->setParameter('password', $value);
    }

    /**
     * @return mixed
     */
    public function getMeter()
    {
        return $this->getParameter('meter');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setMeter($value)
    {
        return $this->setParameter('meter', $value);
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->getParameter('key');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setKey($value)
    {
        return $this->setParameter('key', $value);
    }

    /**
     * @param array $parameters
     * @return \Omniship\Message\AbstractRequest
     */
    public function getServices(array $parameters = [])
    {
        return $this->createRequest(ShippingServicesRequest::class, $this->getParameters() + $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omniship\Message\AbstractRequest
     */
    public function trackingParcel(array $parameters = [])
    {
        return $this->createRequest(TrackingParcelRequest::class, $this->getParameters() + $parameters);
    }
}