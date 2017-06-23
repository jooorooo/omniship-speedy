<?php
/**
 * File for class SpeedyStructResultWorkingTime
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultWorkingTime originally named resultWorkingTime
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultWorkingTime extends SpeedyWsdlClass
{
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var date
     */
    public $date;
    /**
     * The workingTimeFrom
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var short
     */
    public $workingTimeFrom;
    /**
     * The workingTimeTo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var short
     */
    public $workingTimeTo;
    /**
     * The workingTimeException
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $workingTimeException;
    /**
     * Constructor method for resultWorkingTime
     * @see parent::__construct()
     * @param date $_date
     * @param short $_workingTimeFrom
     * @param short $_workingTimeTo
     * @param boolean $_workingTimeException
     * @return SpeedyStructResultWorkingTime
     */
    public function __construct($_date = NULL,$_workingTimeFrom = NULL,$_workingTimeTo = NULL,$_workingTimeException = NULL)
    {
        parent::__construct(array('date'=>$_date,'workingTimeFrom'=>$_workingTimeFrom,'workingTimeTo'=>$_workingTimeTo,'workingTimeException'=>$_workingTimeException),false);
    }
    /**
     * Get date value
     * @return date|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param date $_date the date
     * @return date
     */
    public function setDate($_date)
    {
        return ($this->date = $_date);
    }
    /**
     * Get workingTimeFrom value
     * @return short|null
     */
    public function getWorkingTimeFrom()
    {
        return $this->workingTimeFrom;
    }
    /**
     * Set workingTimeFrom value
     * @param short $_workingTimeFrom the workingTimeFrom
     * @return short
     */
    public function setWorkingTimeFrom($_workingTimeFrom)
    {
        return ($this->workingTimeFrom = $_workingTimeFrom);
    }
    /**
     * Get workingTimeTo value
     * @return short|null
     */
    public function getWorkingTimeTo()
    {
        return $this->workingTimeTo;
    }
    /**
     * Set workingTimeTo value
     * @param short $_workingTimeTo the workingTimeTo
     * @return short
     */
    public function setWorkingTimeTo($_workingTimeTo)
    {
        return ($this->workingTimeTo = $_workingTimeTo);
    }
    /**
     * Get workingTimeException value
     * @return boolean|null
     */
    public function getWorkingTimeException()
    {
        return $this->workingTimeException;
    }
    /**
     * Set workingTimeException value
     * @param boolean $_workingTimeException the workingTimeException
     * @return boolean
     */
    public function setWorkingTimeException($_workingTimeException)
    {
        return ($this->workingTimeException = $_workingTimeException);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultWorkingTime
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
