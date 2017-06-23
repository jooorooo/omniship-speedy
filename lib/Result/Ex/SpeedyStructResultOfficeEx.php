<?php
/**
 * File for class SpeedyStructResultOfficeEx
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultOfficeEx originally named resultOfficeEx
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultOfficeEx extends SpeedyWsdlClass
{
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructResultAddressEx
     */
    public $address;
    /**
     * The id
     * @var long
     */
    public $id;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $name;
    /**
     * The siteId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $siteId;
    /**
     * The workingTimeFrom
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var short
     */
    public $workingTimeFrom;
    /**
     * The workingTimeHalfFrom
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var short
     */
    public $workingTimeHalfFrom;
    /**
     * The workingTimeHalfTo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var short
     */
    public $workingTimeHalfTo;
    /**
     * The workingTimeTo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var short
     */
    public $workingTimeTo;
    /**
     * The maxParcelDimensions
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructSize
     */
    public $maxParcelDimensions;
    /**
     * The maxParcelWeight
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $maxParcelWeight;
    /**
     * The workingTimeSchedule
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var SpeedyStructResultWorkingTime
     */
    public $workingTimeSchedule;
    /**
     * The officeType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var short
     */
    public $officeType;
    /**
     * The workingTimeDayOffFrom
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var short
     */
    public $workingTimeDayOffFrom;
    /**
     * The workingTimeDayOffTo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var short
     */
    public $workingTimeDayOffTo;
    /**
     * Constructor method for resultOfficeEx
     * @see parent::__construct()
     * @param SpeedyStructResultAddressEx $_address
     * @param long $_id
     * @param string $_name
     * @param long $_siteId
     * @param short $_workingTimeFrom
     * @param short $_workingTimeHalfFrom
     * @param short $_workingTimeHalfTo
     * @param short $_workingTimeTo
     * @param SpeedyStructSize $_maxParcelDimensions
     * @param double $_maxParcelWeight
     * @param SpeedyStructResultWorkingTime $_workingTimeSchedule
     * @param short $_officeType
     * @param short $_workingTimeDayOffFrom
     * @param short $_workingTimeDayOffTo
     * @return SpeedyStructResultOfficeEx
     */
    public function __construct($_address = NULL,$_id = NULL,$_name = NULL,$_siteId = NULL,$_workingTimeFrom = NULL,$_workingTimeHalfFrom = NULL,$_workingTimeHalfTo = NULL,$_workingTimeTo = NULL,$_maxParcelDimensions = NULL,$_maxParcelWeight = NULL,$_workingTimeSchedule = NULL,$_officeType = NULL,$_workingTimeDayOffFrom = NULL,$_workingTimeDayOffTo = NULL)
    {
        parent::__construct(array('address'=>$_address,'id'=>$_id,'name'=>$_name,'siteId'=>$_siteId,'workingTimeFrom'=>$_workingTimeFrom,'workingTimeHalfFrom'=>$_workingTimeHalfFrom,'workingTimeHalfTo'=>$_workingTimeHalfTo,'workingTimeTo'=>$_workingTimeTo,'maxParcelDimensions'=>$_maxParcelDimensions,'maxParcelWeight'=>$_maxParcelWeight,'workingTimeSchedule'=>$_workingTimeSchedule,'officeType'=>$_officeType,'workingTimeDayOffFrom'=>$_workingTimeDayOffFrom,'workingTimeDayOffTo'=>$_workingTimeDayOffTo),false);
    }
    /**
     * Get address value
     * @return SpeedyStructResultAddressEx|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param SpeedyStructResultAddressEx $_address the address
     * @return SpeedyStructResultAddressEx
     */
    public function setAddress($_address)
    {
        return ($this->address = $_address);
    }
    /**
     * Get id value
     * @return long|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param long $_id the id
     * @return long
     */
    public function setId($_id)
    {
        return ($this->id = $_id);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $_name the name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->name = $_name);
    }
    /**
     * Get siteId value
     * @return long|null
     */
    public function getSiteId()
    {
        return $this->siteId;
    }
    /**
     * Set siteId value
     * @param long $_siteId the siteId
     * @return long
     */
    public function setSiteId($_siteId)
    {
        return ($this->siteId = $_siteId);
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
     * Get workingTimeHalfFrom value
     * @return short|null
     */
    public function getWorkingTimeHalfFrom()
    {
        return $this->workingTimeHalfFrom;
    }
    /**
     * Set workingTimeHalfFrom value
     * @param short $_workingTimeHalfFrom the workingTimeHalfFrom
     * @return short
     */
    public function setWorkingTimeHalfFrom($_workingTimeHalfFrom)
    {
        return ($this->workingTimeHalfFrom = $_workingTimeHalfFrom);
    }
    /**
     * Get workingTimeHalfTo value
     * @return short|null
     */
    public function getWorkingTimeHalfTo()
    {
        return $this->workingTimeHalfTo;
    }
    /**
     * Set workingTimeHalfTo value
     * @param short $_workingTimeHalfTo the workingTimeHalfTo
     * @return short
     */
    public function setWorkingTimeHalfTo($_workingTimeHalfTo)
    {
        return ($this->workingTimeHalfTo = $_workingTimeHalfTo);
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
     * Get maxParcelDimensions value
     * @return SpeedyStructSize|null
     */
    public function getMaxParcelDimensions()
    {
        return $this->maxParcelDimensions;
    }
    /**
     * Set maxParcelDimensions value
     * @param SpeedyStructSize $_maxParcelDimensions the maxParcelDimensions
     * @return SpeedyStructSize
     */
    public function setMaxParcelDimensions($_maxParcelDimensions)
    {
        return ($this->maxParcelDimensions = $_maxParcelDimensions);
    }
    /**
     * Get maxParcelWeight value
     * @return double|null
     */
    public function getMaxParcelWeight()
    {
        return $this->maxParcelWeight;
    }
    /**
     * Set maxParcelWeight value
     * @param double $_maxParcelWeight the maxParcelWeight
     * @return double
     */
    public function setMaxParcelWeight($_maxParcelWeight)
    {
        return ($this->maxParcelWeight = $_maxParcelWeight);
    }
    /**
     * Get workingTimeSchedule value
     * @return SpeedyStructResultWorkingTime|null
     */
    public function getWorkingTimeSchedule()
    {
        return $this->workingTimeSchedule;
    }
    /**
     * Set workingTimeSchedule value
     * @param SpeedyStructResultWorkingTime $_workingTimeSchedule the workingTimeSchedule
     * @return SpeedyStructResultWorkingTime
     */
    public function setWorkingTimeSchedule($_workingTimeSchedule)
    {
        return ($this->workingTimeSchedule = $_workingTimeSchedule);
    }
    /**
     * Get officeType value
     * @return short|null
     */
    public function getOfficeType()
    {
        return $this->officeType;
    }
    /**
     * Set officeType value
     * @param short $_officeType the officeType
     * @return short
     */
    public function setOfficeType($_officeType)
    {
        return ($this->officeType = $_officeType);
    }
    /**
     * Get workingTimeDayOffFrom value
     * @return short|null
     */
    public function getWorkingTimeDayOffFrom()
    {
        return $this->workingTimeDayOffFrom;
    }
    /**
     * Set workingTimeDayOffFrom value
     * @param short $_workingTimeDayOffFrom the workingTimeDayOffFrom
     * @return short
     */
    public function setWorkingTimeDayOffFrom($_workingTimeDayOffFrom)
    {
        return ($this->workingTimeDayOffFrom = $_workingTimeDayOffFrom);
    }
    /**
     * Get workingTimeDayOffTo value
     * @return short|null
     */
    public function getWorkingTimeDayOffTo()
    {
        return $this->workingTimeDayOffTo;
    }
    /**
     * Set workingTimeDayOffTo value
     * @param short $_workingTimeDayOffTo the workingTimeDayOffTo
     * @return short
     */
    public function setWorkingTimeDayOffTo($_workingTimeDayOffTo)
    {
        return ($this->workingTimeDayOffTo = $_workingTimeDayOffTo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultOfficeEx
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
