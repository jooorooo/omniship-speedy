<?php
/**
 * File for class SpeedyStructListOfficesExResponse
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructListOfficesExResponse originally named listOfficesExResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructListOfficesExResponse extends SpeedyWsdlClass
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var SpeedyStructResultOfficeEx
     */
    public $return;
    /**
     * Constructor method for listOfficesExResponse
     * @see parent::__construct()
     * @param SpeedyStructResultOfficeEx $_return
     * @return SpeedyStructListOfficesExResponse
     */
    public function __construct($_return = NULL)
    {
        parent::__construct(array('return'=>$_return),false);
    }
    /**
     * Get return value
     * @return SpeedyStructResultOfficeEx|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param SpeedyStructResultOfficeEx $_return the return
     * @return SpeedyStructResultOfficeEx
     */
    public function setReturn($_return)
    {
        return ($this->return = $_return);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructListOfficesExResponse
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
