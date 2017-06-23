<?php
/**
 * File for class SpeedyStructGetRoutingLabelInfo
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructGetRoutingLabelInfo originally named getRoutingLabelInfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructGetRoutingLabelInfo extends SpeedyWsdlClass
{
    /**
     * The sessionId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sessionId;
    /**
     * The parcelId
     * @var long
     */
    public $parcelId;
    /**
     * Constructor method for getRoutingLabelInfo
     * @see parent::__construct()
     * @param string $_sessionId
     * @param long $_parcelId
     * @return SpeedyStructGetRoutingLabelInfo
     */
    public function __construct($_sessionId = NULL,$_parcelId = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'parcelId'=>$_parcelId),false);
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
     * Get parcelId value
     * @return long|null
     */
    public function getParcelId()
    {
        return $this->parcelId;
    }
    /**
     * Set parcelId value
     * @param long $_parcelId the parcelId
     * @return long
     */
    public function setParcelId($_parcelId)
    {
        return ($this->parcelId = $_parcelId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructGetRoutingLabelInfo
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
