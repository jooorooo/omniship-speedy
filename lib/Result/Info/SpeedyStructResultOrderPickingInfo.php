<?php
/**
 * File for class SpeedyStructResultOrderPickingInfo
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultOrderPickingInfo originally named resultOrderPickingInfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultOrderPickingInfo extends SpeedyWsdlClass
{
    /**
     * The billOfLading
     * @var long
     */
    public $billOfLading;
    /**
     * The errorDescriptions
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $errorDescriptions;
    /**
     * Constructor method for resultOrderPickingInfo
     * @see parent::__construct()
     * @param long $_billOfLading
     * @param string $_errorDescriptions
     * @return SpeedyStructResultOrderPickingInfo
     */
    public function __construct($_billOfLading = NULL,$_errorDescriptions = NULL)
    {
        parent::__construct(array('billOfLading'=>$_billOfLading,'errorDescriptions'=>$_errorDescriptions),false);
    }
    /**
     * Get billOfLading value
     * @return long|null
     */
    public function getBillOfLading()
    {
        return $this->billOfLading;
    }
    /**
     * Set billOfLading value
     * @param long $_billOfLading the billOfLading
     * @return long
     */
    public function setBillOfLading($_billOfLading)
    {
        return ($this->billOfLading = $_billOfLading);
    }
    /**
     * Get errorDescriptions value
     * @return string|null
     */
    public function getErrorDescriptions()
    {
        return $this->errorDescriptions;
    }
    /**
     * Set errorDescriptions value
     * @param string $_errorDescriptions the errorDescriptions
     * @return string
     */
    public function setErrorDescriptions($_errorDescriptions)
    {
        return ($this->errorDescriptions = $_errorDescriptions);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultOrderPickingInfo
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
