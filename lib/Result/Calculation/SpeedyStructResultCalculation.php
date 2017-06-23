<?php
/**
 * File for class SpeedyStructResultCalculation
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultCalculation originally named resultCalculation
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultCalculation extends SpeedyWsdlClass
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
     * The partialDiscount
     * @var boolean
     */
    public $partialDiscount;
    /**
     * The takingDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $takingDate;
    /**
     * Constructor method for resultCalculation
     * @see parent::__construct()
     * @param SpeedyStructResultAmounts $_amounts
     * @param dateTime $_deadlineDelivery
     * @param boolean $_partialDiscount
     * @param dateTime $_takingDate
     * @return SpeedyStructResultCalculation
     */
    public function __construct($_amounts = NULL,$_deadlineDelivery = NULL,$_partialDiscount = NULL,$_takingDate = NULL)
    {
        parent::__construct(array('amounts'=>$_amounts,'deadlineDelivery'=>$_deadlineDelivery,'partialDiscount'=>$_partialDiscount,'takingDate'=>$_takingDate),false);
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
     * Get partialDiscount value
     * @return boolean|null
     */
    public function getPartialDiscount()
    {
        return $this->partialDiscount;
    }
    /**
     * Set partialDiscount value
     * @param boolean $_partialDiscount the partialDiscount
     * @return boolean
     */
    public function setPartialDiscount($_partialDiscount)
    {
        return ($this->partialDiscount = $_partialDiscount);
    }
    /**
     * Get takingDate value
     * @return dateTime|null
     */
    public function getTakingDate()
    {
        return $this->takingDate;
    }
    /**
     * Set takingDate value
     * @param dateTime $_takingDate the takingDate
     * @return dateTime
     */
    public function setTakingDate($_takingDate)
    {
        return ($this->takingDate = $_takingDate);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultCalculation
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
