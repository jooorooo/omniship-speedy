<?php
/**
 * File for class SpeedyStructAddParcel
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructAddParcel originally named addParcel
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructAddParcel extends SpeedyWsdlClass
{
    /**
     * The sessionId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sessionId;
    /**
     * The parcel
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructParamParcel
     */
    public $parcel;
    /**
     * Constructor method for addParcel
     * @see parent::__construct()
     * @param string $_sessionId
     * @param SpeedyStructParamParcel $_parcel
     * @return SpeedyStructAddParcel
     */
    public function __construct($_sessionId = NULL,$_parcel = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'parcel'=>$_parcel),false);
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
     * Get parcel value
     * @return SpeedyStructParamParcel|null
     */
    public function getParcel()
    {
        return $this->parcel;
    }
    /**
     * Set parcel value
     * @param SpeedyStructParamParcel $_parcel the parcel
     * @return SpeedyStructParamParcel
     */
    public function setParcel($_parcel)
    {
        return ($this->parcel = $_parcel);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructAddParcel
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
