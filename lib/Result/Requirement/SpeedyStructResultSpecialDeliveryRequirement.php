<?php
/**
 * File for class SpeedyStructResultSpecialDeliveryRequirement
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultSpecialDeliveryRequirement originally named resultSpecialDeliveryRequirement
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultSpecialDeliveryRequirement extends SpeedyWsdlClass
{
    /**
     * The specialDeliveryId
     * @var int
     */
    public $specialDeliveryId;
    /**
     * The specialDeliveryPrice
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $specialDeliveryPrice;
    /**
     * The specialDeliveryText
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $specialDeliveryText;
    /**
     * Constructor method for resultSpecialDeliveryRequirement
     * @see parent::__construct()
     * @param int $_specialDeliveryId
     * @param double $_specialDeliveryPrice
     * @param string $_specialDeliveryText
     * @return SpeedyStructResultSpecialDeliveryRequirement
     */
    public function __construct($_specialDeliveryId = NULL,$_specialDeliveryPrice = NULL,$_specialDeliveryText = NULL)
    {
        parent::__construct(array('specialDeliveryId'=>$_specialDeliveryId,'specialDeliveryPrice'=>$_specialDeliveryPrice,'specialDeliveryText'=>$_specialDeliveryText),false);
    }
    /**
     * Get specialDeliveryId value
     * @return int|null
     */
    public function getSpecialDeliveryId()
    {
        return $this->specialDeliveryId;
    }
    /**
     * Set specialDeliveryId value
     * @param int $_specialDeliveryId the specialDeliveryId
     * @return int
     */
    public function setSpecialDeliveryId($_specialDeliveryId)
    {
        return ($this->specialDeliveryId = $_specialDeliveryId);
    }
    /**
     * Get specialDeliveryPrice value
     * @return double|null
     */
    public function getSpecialDeliveryPrice()
    {
        return $this->specialDeliveryPrice;
    }
    /**
     * Set specialDeliveryPrice value
     * @param double $_specialDeliveryPrice the specialDeliveryPrice
     * @return double
     */
    public function setSpecialDeliveryPrice($_specialDeliveryPrice)
    {
        return ($this->specialDeliveryPrice = $_specialDeliveryPrice);
    }
    /**
     * Get specialDeliveryText value
     * @return string|null
     */
    public function getSpecialDeliveryText()
    {
        return $this->specialDeliveryText;
    }
    /**
     * Set specialDeliveryText value
     * @param string $_specialDeliveryText the specialDeliveryText
     * @return string
     */
    public function setSpecialDeliveryText($_specialDeliveryText)
    {
        return ($this->specialDeliveryText = $_specialDeliveryText);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultSpecialDeliveryRequirement
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
