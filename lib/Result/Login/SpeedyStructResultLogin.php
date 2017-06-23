<?php
/**
 * File for class SpeedyStructResultLogin
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultLogin originally named resultLogin
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultLogin extends SpeedyWsdlClass
{
    /**
     * The clientId
     * @var long
     */
    public $clientId;
    /**
     * The sessionId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sessionId;
    /**
     * The serverTime
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $serverTime;
    /**
     * Constructor method for resultLogin
     * @see parent::__construct()
     * @param long $_clientId
     * @param string $_sessionId
     * @param dateTime $_serverTime
     * @return SpeedyStructResultLogin
     */
    public function __construct($_clientId = NULL,$_sessionId = NULL,$_serverTime = NULL)
    {
        parent::__construct(array('clientId'=>$_clientId,'sessionId'=>$_sessionId,'serverTime'=>$_serverTime),false);
    }
    /**
     * Get clientId value
     * @return long|null
     */
    public function getClientId()
    {
        return $this->clientId;
    }
    /**
     * Set clientId value
     * @param long $_clientId the clientId
     * @return long
     */
    public function setClientId($_clientId)
    {
        return ($this->clientId = $_clientId);
    }
    /**
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $_sessionId the sessionId
     * @return string
     */
    public function setSessionId($_sessionId)
    {
        return ($this->sessionId = $_sessionId);
    }
    /**
     * Get serverTime value
     * @return dateTime|null
     */
    public function getServerTime()
    {
        return $this->serverTime;
    }
    /**
     * Set serverTime value
     * @param dateTime $_serverTime the serverTime
     * @return dateTime
     */
    public function setServerTime($_serverTime)
    {
        return ($this->serverTime = $_serverTime);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultLogin
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
