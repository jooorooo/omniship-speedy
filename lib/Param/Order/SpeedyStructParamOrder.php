<?php
/**
 * File for class SpeedyStructParamOrder
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructParamOrder originally named paramOrder
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructParamOrder extends SpeedyWsdlClass
{
    /**
     * The billOfLadingsList
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var long
     */
    public $billOfLadingsList;
    /**
     * The billOfLadingsToIncludeType
     * @var int
     */
    public $billOfLadingsToIncludeType;
    /**
     * The contactName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $contactName;
    /**
     * The phoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructParamPhoneNumber
     */
    public $phoneNumber;
    /**
     * The pickupDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $pickupDate;
    /**
     * The readinessTime
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var short
     */
    public $readinessTime;
    /**
     * The workingEndTime
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var short
     */
    public $workingEndTime;
    /**
     * Constructor method for paramOrder
     * @see parent::__construct()
     * @param long $_billOfLadingsList
     * @param int $_billOfLadingsToIncludeType
     * @param string $_contactName
     * @param SpeedyStructParamPhoneNumber $_phoneNumber
     * @param dateTime $_pickupDate
     * @param short $_readinessTime
     * @param short $_workingEndTime
     * @return SpeedyStructParamOrder
     */
    public function __construct($_billOfLadingsList = NULL,$_billOfLadingsToIncludeType = NULL,$_contactName = NULL,$_phoneNumber = NULL,$_pickupDate = NULL,$_readinessTime = NULL,$_workingEndTime = NULL)
    {
        parent::__construct(array('billOfLadingsList'=>$_billOfLadingsList,'billOfLadingsToIncludeType'=>$_billOfLadingsToIncludeType,'contactName'=>$_contactName,'phoneNumber'=>$_phoneNumber,'pickupDate'=>$_pickupDate,'readinessTime'=>$_readinessTime,'workingEndTime'=>$_workingEndTime),false);
    }
    /**
     * Get billOfLadingsList value
     * @return long|null
     */
    public function getBillOfLadingsList()
    {
        return $this->billOfLadingsList;
    }
    /**
     * Set billOfLadingsList value
     * @param long $_billOfLadingsList the billOfLadingsList
     * @return long
     */
    public function setBillOfLadingsList($_billOfLadingsList)
    {
        return ($this->billOfLadingsList = $_billOfLadingsList);
    }
    /**
     * Get billOfLadingsToIncludeType value
     * @return int|null
     */
    public function getBillOfLadingsToIncludeType()
    {
        return $this->billOfLadingsToIncludeType;
    }
    /**
     * Set billOfLadingsToIncludeType value
     * @param int $_billOfLadingsToIncludeType the billOfLadingsToIncludeType
     * @return int
     */
    public function setBillOfLadingsToIncludeType($_billOfLadingsToIncludeType)
    {
        return ($this->billOfLadingsToIncludeType = $_billOfLadingsToIncludeType);
    }
    /**
     * Get contactName value
     * @return string|null
     */
    public function getContactName()
    {
        return $this->contactName;
    }
    /**
     * Set contactName value
     * @param string $_contactName the contactName
     * @return string
     */
    public function setContactName($_contactName)
    {
        return ($this->contactName = $_contactName);
    }
    /**
     * Get phoneNumber value
     * @return SpeedyStructParamPhoneNumber|null
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }
    /**
     * Set phoneNumber value
     * @param SpeedyStructParamPhoneNumber $_phoneNumber the phoneNumber
     * @return SpeedyStructParamPhoneNumber
     */
    public function setPhoneNumber($_phoneNumber)
    {
        return ($this->phoneNumber = $_phoneNumber);
    }
    /**
     * Get pickupDate value
     * @return dateTime|null
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }
    /**
     * Set pickupDate value
     * @param dateTime $_pickupDate the pickupDate
     * @return dateTime
     */
    public function setPickupDate($_pickupDate)
    {
        return ($this->pickupDate = $_pickupDate);
    }
    /**
     * Get readinessTime value
     * @return short|null
     */
    public function getReadinessTime()
    {
        return $this->readinessTime;
    }
    /**
     * Set readinessTime value
     * @param short $_readinessTime the readinessTime
     * @return short
     */
    public function setReadinessTime($_readinessTime)
    {
        return ($this->readinessTime = $_readinessTime);
    }
    /**
     * Get workingEndTime value
     * @return short|null
     */
    public function getWorkingEndTime()
    {
        return $this->workingEndTime;
    }
    /**
     * Set workingEndTime value
     * @param short $_workingEndTime the workingEndTime
     * @return short
     */
    public function setWorkingEndTime($_workingEndTime)
    {
        return ($this->workingEndTime = $_workingEndTime);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructParamOrder
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
