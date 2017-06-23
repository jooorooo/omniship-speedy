<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 16.5.2017 г.
 * Time: 15:12 ч.
 */

namespace Omniship\Speedy;

use SpeedyServiceLogin;
use SpeedyStructLogin;
use SpeedyServiceGet;
use SpeedyServiceList;
use SpeedyStructListServices;
use SpeedyStructResultLogin;
use SpeedyStructLoginResponse;
use SpeedyStructGetClientById;
use SpeedyStructResultClientData;
use SpeedyStructInvalidSessionException;
use SpeedyStructNoUserPermissionsException;
use SpeedyStructInvalidUsernameOrPasswordException;

class Client
{

    protected $ePSFacade;

    /**
     * @var SpeedyStructLoginResponse
     */
    protected $resultLogin;

    protected $username;

    protected $password;

    protected $error;
    /**
     * @var array
     */
    protected $services = [];

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->initialize();
    }

    /**
     * @return bool
     */
    public function initialize()
    {
        $speedyServiceLogin = new SpeedyServiceLogin();
        if($speedyServiceLogin->login(new SpeedyStructLogin($this->username, $this->password))) {
            $this->resultLogin = $speedyServiceLogin->getResult()->getReturn();
            return true;
        } else {
            $error = $this->_getError($speedyServiceLogin, 'SpeedyServiceLogin::login');
            if($error) {
                if(strpos($error->getMessage(), 'InvalidUsernameOrPasswordException')) {
                    $this->error = new SpeedyStructInvalidUsernameOrPasswordException($error->getMessage());
                } elseif(strpos($error->getMessage(), 'NoUserPermissionsException')) {
                    $this->error = new SpeedyStructNoUserPermissionsException($error->getMessage());
                } else {
                    $this->error = $error;
                }
            }
            return false;
        }
    }

    /**
     * @param null $client_id
     * @return bool|SpeedyStructResultClientData
     */
    public function getClientInfo($client_id = null) {
        $client = false;
        if (!is_null($login = $this->getResultLogin())) {
            $client = $this->getServiceGet()->getClientById(new SpeedyStructGetClientById($login->sessionId, $client_id ? : $login->clientId));
            if(!$client) {
                $error = $this->_getError($this->getServiceGet(), 'SpeedyServiceGet::getClientById');
                if(strpos($error->getMessage(), 'InvalidSessionException')) {
                    $this->error = new SpeedyStructInvalidSessionException($error->getMessage());
                } else {
                    $this->error = $error;
                }
            } else {
                $client = $client->getReturn();
            }
        }
        return $client;
    }

    public function getServices($language = 'bg') {
        $services = [];

        if (!is_null($login = $this->getResultLogin())) {
            $listServices = $this->getServiceList()->listServices(new SpeedyStructListServices($login->sessionId, time(), $this->_languageValidate($language)));
            var_dump($listServices, $this->getServiceList()->getLastError()); exit;
            try {
                $listServices = $this->ePSFacade->listServices(time(), strtoupper($lang));

                if ($listServices) {
                    foreach ($listServices as $service) {
                        if ($service->getTypeId() == 26 || $service->getTypeId() == 36) {
                            continue;
                        }

                        // Remove pallet services
                        if ($service->getCargoType() == 2) {
                            continue;
                        }

                        $services[$service->getTypeId()] = $service->getName();
                    }
                }
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }

        return $services;
    }

    /**
     * @return SpeedyServiceGet
     */
    public function getServiceGet()
    {
        if(empty($this->services['get'])) {
            $this->services['get'] = new SpeedyServiceGet();
        }
        return $this->services['get'];
    }

    /**
     * @return SpeedyServiceList
     */
    public function getServiceList()
    {
        if(empty($this->services['list'])) {
            $this->services['list'] = new SpeedyServiceList();
        }
        return $this->services['list'];
    }

    /**
     * @return SpeedyStructResultLogin
     */
    public function getResultLogin()
    {
        return $this->resultLogin;
    }

    /**
     * @return null|string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return null|string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return null|string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @param \SpeedyWsdlClass $object
     * @param $key
     * @return \SoapFault
     */
    protected function _getError(\SpeedyWsdlClass $object, $key) {
        $last_error = $object->getLastError();
        /** @var $error \SoapFault */
        return $object->getLastErrorForMethod($key) ? : array_shift($last_error);
    }

    /**
     * @param $language
     * @return string
     */
    protected function _languageValidate($language) {
        if (in_array(strtolower($language), ['bg', 'en'])) {
            $language = 'en';
        }
        return $language;
    }
}