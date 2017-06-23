<?php
/**
 * File for class SpeedyStructResultPhoneNumber
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultPhoneNumber originally named resultPhoneNumber
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultPhoneNumber extends SpeedyWsdlClass
{
    /**
     * The internal
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $internal;
    /**
     * The number
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $number;
    /**
     * Constructor method for resultPhoneNumber
     * @see parent::__construct()
     * @param string $_internal
     * @param string $_number
     * @return SpeedyStructResultPhoneNumber
     */
    public function __construct($_internal = NULL,$_number = NULL)
    {
        parent::__construct(array('internal'=>$_internal,'number'=>$_number),false);
    }
    /**
     * Get internal value
     * @return string|null
     */
    public function getInternal()
    {
        return $this->internal;
    }
    /**
     * Set internal value
     * @param string $_internal the internal
     * @return string
     */
    public function setInternal($_internal)
    {
        return ($this->internal = $_internal);
    }
    /**
     * Get number value
     * @return string|null
     */
    public function getNumber()
    {
        return $this->number;
    }
    /**
     * Set number value
     * @param string $_number the number
     * @return string
     */
    public function setNumber($_number)
    {
        return ($this->number = $_number);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultPhoneNumber
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
