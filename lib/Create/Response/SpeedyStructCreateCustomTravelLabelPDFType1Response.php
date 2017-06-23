<?php
/**
 * File for class SpeedyStructCreateCustomTravelLabelPDFType1Response
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructCreateCustomTravelLabelPDFType1Response originally named createCustomTravelLabelPDFType1Response
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructCreateCustomTravelLabelPDFType1Response extends SpeedyWsdlClass
{
    /**
     * The return
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * - nillable : true
     * @var base64Binary
     */
    public $return;
    /**
     * Constructor method for createCustomTravelLabelPDFType1Response
     * @see parent::__construct()
     * @param base64Binary $_return
     * @return SpeedyStructCreateCustomTravelLabelPDFType1Response
     */
    public function __construct($_return = NULL)
    {
        parent::__construct(array('return'=>$_return),false);
    }
    /**
     * Get return value
     * @return base64Binary|null
     */
    public function getReturn()
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param base64Binary $_return the return
     * @return base64Binary
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
     * @return SpeedyStructCreateCustomTravelLabelPDFType1Response
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
