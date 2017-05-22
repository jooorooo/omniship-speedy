<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 16:55 ч.
 */

namespace Omniship\Speedy\Http;

use Omniship\Speedy\Client AS SpeedyClient;

class ValidateCredentialsRequest extends AbstractRequest
{

    /**
     * @var SpeedyClient
     */
    protected $client;

    /**
     * @return bool
     */
    public function getData() {
        return true;
    }

    /**
     * @param mixed $data
     * @return ValidateCredentialsResponse
     */
    public function sendData($data) {
        $client = $this->getClient();
        $login = $client->validateCredentials($client->getUsername(), $client->getPassword());
        return $this->createResponse(!$login && $this->getClient()->getError() ? $this->getClient()->getError() : $login);
    }

    /**
     * @param $data
     * @return ValidateCredentialsResponse
     */
    protected function createResponse($data)
    {
        return $this->response = new ValidateCredentialsResponse($this, $data);
    }

}