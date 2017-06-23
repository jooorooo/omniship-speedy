<?php
/**
 * File for class SpeedyStructResultPickingInfo
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultPickingInfo originally named resultPickingInfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultPickingInfo extends SpeedyWsdlClass
{
    /**
     * The billOfLading
     * @var long
     */
    public $billOfLading;
    /**
     * The hasScans
     * @var boolean
     */
    public $hasScans;
    /**
     * The secondaryPickingType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $secondaryPickingType;
    /**
     * The serviceTypeId
     * @var long
     */
    public $serviceTypeId;
    /**
     * The takingDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $takingDate;
    /**
     * Constructor method for resultPickingInfo
     * @see parent::__construct()
     * @param long $_billOfLading
     * @param boolean $_hasScans
     * @param int $_secondaryPickingType
     * @param long $_serviceTypeId
     * @param dateTime $_takingDate
     * @return SpeedyStructResultPickingInfo
     */
    public function __construct($_billOfLading = NULL,$_hasScans = NULL,$_secondaryPickingType = NULL,$_serviceTypeId = NULL,$_takingDate = NULL)
    {
        parent::__construct(array('billOfLading'=>$_billOfLading,'hasScans'=>$_hasScans,'secondaryPickingType'=>$_secondaryPickingType,'serviceTypeId'=>$_serviceTypeId,'takingDate'=>$_takingDate),false);
    }
    /**
     * Get billOfLading value
     * @return long|null
     */
    public function getBillOfLading()
    {
        return $this->billOfLading;
    }
    /**
     * Set billOfLading value
     * @param long $_billOfLading the billOfLading
     * @return long
     */
    public function setBillOfLading($_billOfLading)
    {
        return ($this->billOfLading = $_billOfLading);
    }
    /**
     * Get hasScans value
     * @return boolean|null
     */
    public function getHasScans()
    {
        return $this->hasScans;
    }
    /**
     * Set hasScans value
     * @param boolean $_hasScans the hasScans
     * @return boolean
     */
    public function setHasScans($_hasScans)
    {
        return ($this->hasScans = $_hasScans);
    }
    /**
     * Get secondaryPickingType value
     * @return int|null
     */
    public function getSecondaryPickingType()
    {
        return $this->secondaryPickingType;
    }
    /**
     * Set secondaryPickingType value
     * @param int $_secondaryPickingType the secondaryPickingType
     * @return int
     */
    public function setSecondaryPickingType($_secondaryPickingType)
    {
        return ($this->secondaryPickingType = $_secondaryPickingType);
    }
    /**
     * Get serviceTypeId value
     * @return long|null
     */
    public function getServiceTypeId()
    {
        return $this->serviceTypeId;
    }
    /**
     * Set serviceTypeId value
     * @param long $_serviceTypeId the serviceTypeId
     * @return long
     */
    public function setServiceTypeId($_serviceTypeId)
    {
        return ($this->serviceTypeId = $_serviceTypeId);
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
     * @return SpeedyStructResultPickingInfo
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
