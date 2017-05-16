<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\FedEx\Http;

use Omniship\Exceptions\InvalidResponseException;
use Omniship\Message\AbstractRequest AS BaseAbstractRequest;

abstract class AbstractRequest extends BaseAbstractRequest
{

    /**
     * @return mixed
     */
    public function getUsername() {
        return $this->getParameter('username');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setUsername($value) {
        return $this->setParameter('username', $value);
    }

    /**
     * @return mixed
     */
    public function getPassword() {
        return $this->getParameter('password');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPassword($value) {
        return $this->setParameter('password', $value);
    }

    /**
     * @return mixed
     */
    public function getMeter() {
        return $this->getParameter('meter');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setMeter($value) {
        return $this->setParameter('meter', $value);
    }

    /**
     * @return mixed
     */
    public function getKey() {
        return $this->getParameter('key');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setKey($value) {
        return $this->setParameter('key', $value);
    }

    abstract protected function createResponse($data);

}