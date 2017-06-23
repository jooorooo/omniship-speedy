<?php
/**
 * File for class SpeedyStructCreateCustomTravelLabelPDFType1
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructCreateCustomTravelLabelPDFType1 originally named createCustomTravelLabelPDFType1
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructCreateCustomTravelLabelPDFType1 extends SpeedyWsdlClass
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
     * Constructor method for createCustomTravelLabelPDFType1
     * @see parent::__construct()
     * @param string $_sessionId
     * @param long $_parcelId
     * @return SpeedyStructCreateCustomTravelLabelPDFType1
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
     * @return SpeedyStructCreateCustomTravelLabelPDFType1
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
