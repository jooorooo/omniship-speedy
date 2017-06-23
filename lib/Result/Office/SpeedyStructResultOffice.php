<?php
/**
 * File for class SpeedyStructResultOffice
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultOffice originally named resultOffice
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultOffice extends SpeedyWsdlClass
{
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructValueAddress
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
     * Constructor method for resultOffice
     * @see parent::__construct()
     * @param SpeedyStructValueAddress $_address
     * @param long $_id
     * @param string $_name
     * @param long $_siteId
     * @param short $_workingTimeFrom
     * @param short $_workingTimeHalfFrom
     * @param short $_workingTimeHalfTo
     * @param short $_workingTimeTo
     * @return SpeedyStructResultOffice
     */
    public function __construct($_address = NULL,$_id = NULL,$_name = NULL,$_siteId = NULL,$_workingTimeFrom = NULL,$_workingTimeHalfFrom = NULL,$_workingTimeHalfTo = NULL,$_workingTimeTo = NULL)
    {
        parent::__construct(array('address'=>$_address,'id'=>$_id,'name'=>$_name,'siteId'=>$_siteId,'workingTimeFrom'=>$_workingTimeFrom,'workingTimeHalfFrom'=>$_workingTimeHalfFrom,'workingTimeHalfTo'=>$_workingTimeHalfTo,'workingTimeTo'=>$_workingTimeTo),false);
    }
    /**
     * Get address value
     * @return SpeedyStructValueAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param SpeedyStructValueAddress $_address the address
     * @return SpeedyStructValueAddress
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultOffice
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
