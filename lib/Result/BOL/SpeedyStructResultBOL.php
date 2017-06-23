<?php
/**
 * File for class SpeedyStructResultBOL
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultBOL originally named resultBOL
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultBOL extends SpeedyWsdlClass
{
    /**
     * The amounts
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructResultAmounts
     */
    public $amounts;
    /**
     * The deadlineDelivery
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $deadlineDelivery;
    /**
     * The generatedParcels
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var SpeedyStructResultParcelInfo
     */
    public $generatedParcels;
    /**
     * Constructor method for resultBOL
     * @see parent::__construct()
     * @param SpeedyStructResultAmounts $_amounts
     * @param dateTime $_deadlineDelivery
     * @param SpeedyStructResultParcelInfo $_generatedParcels
     * @return SpeedyStructResultBOL
     */
    public function __construct($_amounts = NULL,$_deadlineDelivery = NULL,$_generatedParcels = NULL)
    {
        parent::__construct(array('amounts'=>$_amounts,'deadlineDelivery'=>$_deadlineDelivery,'generatedParcels'=>$_generatedParcels),false);
    }
    /**
     * Get amounts value
     * @return SpeedyStructResultAmounts|null
     */
    public function getAmounts()
    {
        return $this->amounts;
    }
    /**
     * Set amounts value
     * @param SpeedyStructResultAmounts $_amounts the amounts
     * @return SpeedyStructResultAmounts
     */
    public function setAmounts($_amounts)
    {
        return ($this->amounts = $_amounts);
    }
    /**
     * Get deadlineDelivery value
     * @return dateTime|null
     */
    public function getDeadlineDelivery()
    {
        return $this->deadlineDelivery;
    }
    /**
     * Set deadlineDelivery value
     * @param dateTime $_deadlineDelivery the deadlineDelivery
     * @return dateTime
     */
    public function setDeadlineDelivery($_deadlineDelivery)
    {
        return ($this->deadlineDelivery = $_deadlineDelivery);
    }
    /**
     * Get generatedParcels value
     * @return SpeedyStructResultParcelInfo|null
     */
    public function getGeneratedParcels()
    {
        return $this->generatedParcels;
    }
    /**
     * Set generatedParcels value
     * @param SpeedyStructResultParcelInfo $_generatedParcels the generatedParcels
     * @return SpeedyStructResultParcelInfo
     */
    public function setGeneratedParcels($_generatedParcels)
    {
        return ($this->generatedParcels = $_generatedParcels);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultBOL
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
