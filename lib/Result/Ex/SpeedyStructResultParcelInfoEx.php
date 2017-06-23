<?php
/**
 * File for class SpeedyStructResultParcelInfoEx
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultParcelInfoEx originally named resultParcelInfoEx
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultParcelInfoEx extends SpeedyStructResultParcelInfo
{
    /**
     * The foreignParcelNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $foreignParcelNumber;
    /**
     * The packId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $packId;
    /**
     * The sizeDeclared
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructSize
     */
    public $sizeDeclared;
    /**
     * The sizeMeasured
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructSize
     */
    public $sizeMeasured;
    /**
     * The weightDeclared
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $weightDeclared;
    /**
     * The weightMeasured
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $weightMeasured;
    /**
     * The foreignParcelNumbersList
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $foreignParcelNumbersList;
    /**
     * Constructor method for resultParcelInfoEx
     * @see parent::__construct()
     * @param string $_foreignParcelNumber
     * @param long $_packId
     * @param SpeedyStructSize $_sizeDeclared
     * @param SpeedyStructSize $_sizeMeasured
     * @param double $_weightDeclared
     * @param double $_weightMeasured
     * @param string $_foreignParcelNumbersList
     * @return SpeedyStructResultParcelInfoEx
     */
    public function __construct($_foreignParcelNumber = NULL,$_packId = NULL,$_sizeDeclared = NULL,$_sizeMeasured = NULL,$_weightDeclared = NULL,$_weightMeasured = NULL,$_foreignParcelNumbersList = NULL)
    {
        SpeedyWsdlClass::__construct(array('foreignParcelNumber'=>$_foreignParcelNumber,'packId'=>$_packId,'sizeDeclared'=>$_sizeDeclared,'sizeMeasured'=>$_sizeMeasured,'weightDeclared'=>$_weightDeclared,'weightMeasured'=>$_weightMeasured,'foreignParcelNumbersList'=>$_foreignParcelNumbersList),false);
    }
    /**
     * Get foreignParcelNumber value
     * @return string|null
     */
    public function getForeignParcelNumber()
    {
        return $this->foreignParcelNumber;
    }
    /**
     * Set foreignParcelNumber value
     * @param string $_foreignParcelNumber the foreignParcelNumber
     * @return string
     */
    public function setForeignParcelNumber($_foreignParcelNumber)
    {
        return ($this->foreignParcelNumber = $_foreignParcelNumber);
    }
    /**
     * Get packId value
     * @return long|null
     */
    public function getPackId()
    {
        return $this->packId;
    }
    /**
     * Set packId value
     * @param long $_packId the packId
     * @return long
     */
    public function setPackId($_packId)
    {
        return ($this->packId = $_packId);
    }
    /**
     * Get sizeDeclared value
     * @return SpeedyStructSize|null
     */
    public function getSizeDeclared()
    {
        return $this->sizeDeclared;
    }
    /**
     * Set sizeDeclared value
     * @param SpeedyStructSize $_sizeDeclared the sizeDeclared
     * @return SpeedyStructSize
     */
    public function setSizeDeclared($_sizeDeclared)
    {
        return ($this->sizeDeclared = $_sizeDeclared);
    }
    /**
     * Get sizeMeasured value
     * @return SpeedyStructSize|null
     */
    public function getSizeMeasured()
    {
        return $this->sizeMeasured;
    }
    /**
     * Set sizeMeasured value
     * @param SpeedyStructSize $_sizeMeasured the sizeMeasured
     * @return SpeedyStructSize
     */
    public function setSizeMeasured($_sizeMeasured)
    {
        return ($this->sizeMeasured = $_sizeMeasured);
    }
    /**
     * Get weightDeclared value
     * @return double|null
     */
    public function getWeightDeclared()
    {
        return $this->weightDeclared;
    }
    /**
     * Set weightDeclared value
     * @param double $_weightDeclared the weightDeclared
     * @return double
     */
    public function setWeightDeclared($_weightDeclared)
    {
        return ($this->weightDeclared = $_weightDeclared);
    }
    /**
     * Get weightMeasured value
     * @return double|null
     */
    public function getWeightMeasured()
    {
        return $this->weightMeasured;
    }
    /**
     * Set weightMeasured value
     * @param double $_weightMeasured the weightMeasured
     * @return double
     */
    public function setWeightMeasured($_weightMeasured)
    {
        return ($this->weightMeasured = $_weightMeasured);
    }
    /**
     * Get foreignParcelNumbersList value
     * @return string|null
     */
    public function getForeignParcelNumbersList()
    {
        return $this->foreignParcelNumbersList;
    }
    /**
     * Set foreignParcelNumbersList value
     * @param string $_foreignParcelNumbersList the foreignParcelNumbersList
     * @return string
     */
    public function setForeignParcelNumbersList($_foreignParcelNumbersList)
    {
        return ($this->foreignParcelNumbersList = $_foreignParcelNumbersList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultParcelInfoEx
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
