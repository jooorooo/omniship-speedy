<?php
/**
 * File for class SpeedyStructResultMinMaxReal
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultMinMaxReal originally named resultMinMaxReal
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultMinMaxReal extends SpeedyWsdlClass
{
    /**
     * The maxValue
     * @var double
     */
    public $maxValue;
    /**
     * The minValue
     * @var double
     */
    public $minValue;
    /**
     * Constructor method for resultMinMaxReal
     * @see parent::__construct()
     * @param double $_maxValue
     * @param double $_minValue
     * @return SpeedyStructResultMinMaxReal
     */
    public function __construct($_maxValue = NULL,$_minValue = NULL)
    {
        parent::__construct(array('maxValue'=>$_maxValue,'minValue'=>$_minValue),false);
    }
    /**
     * Get maxValue value
     * @return double|null
     */
    public function getMaxValue()
    {
        return $this->maxValue;
    }
    /**
     * Set maxValue value
     * @param double $_maxValue the maxValue
     * @return double
     */
    public function setMaxValue($_maxValue)
    {
        return ($this->maxValue = $_maxValue);
    }
    /**
     * Get minValue value
     * @return double|null
     */
    public function getMinValue()
    {
        return $this->minValue;
    }
    /**
     * Set minValue value
     * @param double $_minValue the minValue
     * @return double
     */
    public function setMinValue($_minValue)
    {
        return ($this->minValue = $_minValue);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultMinMaxReal
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
