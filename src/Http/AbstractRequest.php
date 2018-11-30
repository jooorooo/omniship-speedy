<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Speedy\Http;

use Omniship\Message\AbstractRequest AS BaseAbstractRequest;
use Omniship\Speedy\Client AS SpeedyClient;

abstract class AbstractRequest extends BaseAbstractRequest
{

    /**
     * @var SpeedyClient
     */
    protected $client;

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

    abstract protected function createResponse($data);

    /**
     * @return SpeedyClient
     */
    public function getClient()
    {
        if(is_null($this->client)) {
            $this->client = new SpeedyClient($this->getUsername(), $this->getPassword(), $this->getConnectionOptions());
        }
        return $this->client;
    }
    /**
     * Get the formatted Request.
     *
     * @return null|string
     */
    public function getRequestFormatted()
    {
        if(method_exists($this->getData(), 'toStdClass')) {
            return var_export($this->getData()->toStdClass(), 1);
        }
        return json_encode($this->getData());
    }

}