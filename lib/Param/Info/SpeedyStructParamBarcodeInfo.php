<?php
/**
 * File for class SpeedyStructParamBarcodeInfo
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructParamBarcodeInfo originally named paramBarcodeInfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructParamBarcodeInfo extends SpeedyWsdlClass
{
    /**
     * The barcodeLabel
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $barcodeLabel;
    /**
     * The barcodeValue
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $barcodeValue;
    /**
     * Constructor method for paramBarcodeInfo
     * @see parent::__construct()
     * @param string $_barcodeLabel
     * @param string $_barcodeValue
     * @return SpeedyStructParamBarcodeInfo
     */
    public function __construct($_barcodeLabel = NULL,$_barcodeValue = NULL)
    {
        parent::__construct(array('barcodeLabel'=>$_barcodeLabel,'barcodeValue'=>$_barcodeValue),false);
    }
    /**
     * Get barcodeLabel value
     * @return string|null
     */
    public function getBarcodeLabel()
    {
        return $this->barcodeLabel;
    }
    /**
     * Set barcodeLabel value
     * @param string $_barcodeLabel the barcodeLabel
     * @return string
     */
    public function setBarcodeLabel($_barcodeLabel)
    {
        return ($this->barcodeLabel = $_barcodeLabel);
    }
    /**
     * Get barcodeValue value
     * @return string|null
     */
    public function getBarcodeValue()
    {
        return $this->barcodeValue;
    }
    /**
     * Set barcodeValue value
     * @param string $_barcodeValue the barcodeValue
     * @return string
     */
    public function setBarcodeValue($_barcodeValue)
    {
        return ($this->barcodeValue = $_barcodeValue);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructParamBarcodeInfo
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
