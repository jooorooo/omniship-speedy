<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 16.5.2017 г.
 * Time: 15:12 ч.
 */

namespace Omniship\Speedy;

use Exception;
use EPSFacade;
use EPSSOAPInterfaceImpl;
use ResultLogin;
use ResultClientData;
use ResultCourierService;
use ResultCalculationMS;
use ParamCalculation;

class Client
{

    /**
     * @var EPSFacade
     */
    protected $ePSFacade;

    /**
     * @var ResultLogin
     */
    protected $resultLogin;

    protected $username;

    protected $password;

    protected $error;

    const SERVER_ADDRESS = 'https://www.speedy.bg/eps/main01.wsdl';

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
        try {
            $this->ePSFacade = new EPSFacade(new EPSSOAPInterfaceImpl(static::SERVER_ADDRESS), $this->username, $this->password);
            $this->resultLogin = $this->ePSFacade->getResultLogin();
            return true;
        } catch (Exception $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    /**
     * @param null $client_id
     * @return bool|ResultClientData
     */
    public function getClientInfo($client_id = null) {
        $client = false;
        if (!is_null($login = $this->getResultLogin())) {
            try {
                $client = $this->getEPSFacade()->getClientById($client_id ? $client_id : $login->getClientId());
            } catch (Exception $e) {
                if(!strpos($e->getMessage(), 'No client with such ID')) {
                    $this->error = $e->getMessage();
                }
                return false;
            }
        }
        return $client;
    }

    /**
     * @param string $language
     * @return bool|ResultCourierService[]
     */
    public function getServices($language = 'bg') {
        $services = [];
        if (!is_null($login = $this->getResultLogin())) {
            try {
                /* @var $listServices ResultCourierService[] */
                $listServices = $this->getEPSFacade()->listServices(time(), $this->_languageValidate($language));
                if ($listServices) {
                    foreach ($listServices as $service) {
                        $services[$service->getTypeId()] = $service;
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
     * @param string $language
     * @return bool|array
     */
    public function getServicesList($language = 'bg') {
        $services = $this->getServices($language);
        if($services) {
            $services = array_map(function(ResultCourierService $service) {
                return $service->getName();
            }, $services);
        }
        return $services;
    }

    /**
     * @param ParamCalculation $paramCalculation
     * @param array $allowed_services
     * @return bool|ResultCalculationMS[]
     */
    public function calculate(ParamCalculation $paramCalculation, array $allowed_services = null) {
        $resultCalculation = array();
        if (!is_null($login = $this->getResultLogin())) {
            try {
                if(is_null($allowed_services)) {
                    $allowed_services = array_keys($this->getServicesList());
                }
                /** @var $resultCalculation ResultCalculationMS[] */
                $resultCalculation = $this->getEPSFacade()->calculateMultipleServices($paramCalculation, $allowed_services);
                $error = null;
                foreach ($resultCalculation as $key => $service) {
                    if ($error = $service->getErrorDescription()) {
                        unset($resultCalculation[$key]);
                    }
                }
                if(!$resultCalculation && $error) {
                    $this->error = $error;
                }
                $resultCalculation = array_values($resultCalculation);
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }
        return $resultCalculation;
    }

    /**
     * @return null|ResultLogin
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
     * @return EPSFacade
     */
    public function getEPSFacade()
    {
        return $this->ePSFacade;
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