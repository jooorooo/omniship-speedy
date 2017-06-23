<?php
/**
 * File for class SpeedyStructResultRoutingLabelInfo
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultRoutingLabelInfo originally named resultRoutingLabelInfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultRoutingLabelInfo extends SpeedyWsdlClass
{
    /**
     * The hubId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $hubId;
    /**
     * The officeId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $officeId;
    /**
     * The deadlineDay
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $deadlineDay;
    /**
     * The deadlineMonth
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $deadlineMonth;
    /**
     * The tourId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $tourId;
    /**
     * The fullBarcode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $fullBarcode;
    /**
     * Constructor method for resultRoutingLabelInfo
     * @see parent::__construct()
     * @param long $_hubId
     * @param long $_officeId
     * @param int $_deadlineDay
     * @param int $_deadlineMonth
     * @param long $_tourId
     * @param string $_fullBarcode
     * @return SpeedyStructResultRoutingLabelInfo
     */
    public function __construct($_hubId = NULL,$_officeId = NULL,$_deadlineDay = NULL,$_deadlineMonth = NULL,$_tourId = NULL,$_fullBarcode = NULL)
    {
        parent::__construct(array('hubId'=>$_hubId,'officeId'=>$_officeId,'deadlineDay'=>$_deadlineDay,'deadlineMonth'=>$_deadlineMonth,'tourId'=>$_tourId,'fullBarcode'=>$_fullBarcode),false);
    }
    /**
     * Get hubId value
     * @return long|null
     */
    public function getHubId()
    {
        return $this->hubId;
    }
    /**
     * Set hubId value
     * @param long $_hubId the hubId
     * @return long
     */
    public function setHubId($_hubId)
    {
        return ($this->hubId = $_hubId);
    }
    /**
     * Get officeId value
     * @return long|null
     */
    public function getOfficeId()
    {
        return $this->officeId;
    }
    /**
     * Set officeId value
     * @param long $_officeId the officeId
     * @return long
     */
    public function setOfficeId($_officeId)
    {
        return ($this->officeId = $_officeId);
    }
    /**
     * Get deadlineDay value
     * @return int|null
     */
    public function getDeadlineDay()
    {
        return $this->deadlineDay;
    }
    /**
     * Set deadlineDay value
     * @param int $_deadlineDay the deadlineDay
     * @return int
     */
    public function setDeadlineDay($_deadlineDay)
    {
        return ($this->deadlineDay = $_deadlineDay);
    }
    /**
     * Get deadlineMonth value
     * @return int|null
     */
    public function getDeadlineMonth()
    {
        return $this->deadlineMonth;
    }
    /**
     * Set deadlineMonth value
     * @param int $_deadlineMonth the deadlineMonth
     * @return int
     */
    public function setDeadlineMonth($_deadlineMonth)
    {
        return ($this->deadlineMonth = $_deadlineMonth);
    }
    /**
     * Get tourId value
     * @return long|null
     */
    public function getTourId()
    {
        return $this->tourId;
    }
    /**
     * Set tourId value
     * @param long $_tourId the tourId
     * @return long
     */
    public function setTourId($_tourId)
    {
        return ($this->tourId = $_tourId);
    }
    /**
     * Get fullBarcode value
     * @return string|null
     */
    public function getFullBarcode()
    {
        return $this->fullBarcode;
    }
    /**
     * Set fullBarcode value
     * @param string $_fullBarcode the fullBarcode
     * @return string
     */
    public function setFullBarcode($_fullBarcode)
    {
        return ($this->fullBarcode = $_fullBarcode);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultRoutingLabelInfo
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
