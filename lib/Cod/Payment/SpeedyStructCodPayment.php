<?php
/**
 * File for class SpeedyStructCodPayment
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructCodPayment originally named codPayment
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructCodPayment extends SpeedyWsdlClass
{
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $date;
    /**
     * The totalPayedOutAmount
     * @var double
     */
    public $totalPayedOutAmount;
    /**
     * Constructor method for codPayment
     * @see parent::__construct()
     * @param dateTime $_date
     * @param double $_totalPayedOutAmount
     * @return SpeedyStructCodPayment
     */
    public function __construct($_date = NULL,$_totalPayedOutAmount = NULL)
    {
        parent::__construct(array('date'=>$_date,'totalPayedOutAmount'=>$_totalPayedOutAmount),false);
    }
    /**
     * Get date value
     * @return dateTime|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param dateTime $_date the date
     * @return dateTime
     */
    public function setDate($_date)
    {
        return ($this->date = $_date);
    }
    /**
     * Get totalPayedOutAmount value
     * @return double|null
     */
    public function getTotalPayedOutAmount()
    {
        return $this->totalPayedOutAmount;
    }
    /**
     * Set totalPayedOutAmount value
     * @param double $_totalPayedOutAmount the totalPayedOutAmount
     * @return double
     */
    public function setTotalPayedOutAmount($_totalPayedOutAmount)
    {
        return ($this->totalPayedOutAmount = $_totalPayedOutAmount);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructCodPayment
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
