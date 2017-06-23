<?php
/**
 * File for class SpeedyStructCalculateMultipleServices
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructCalculateMultipleServices originally named calculateMultipleServices
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructCalculateMultipleServices extends SpeedyWsdlClass
{
    /**
     * The sessionId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sessionId;
    /**
     * The calculation
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructParamCalculation
     */
    public $calculation;
    /**
     * The serviceTypeIds
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * @var long
     */
    public $serviceTypeIds;
    /**
     * Constructor method for calculateMultipleServices
     * @see parent::__construct()
     * @param string $_sessionId
     * @param SpeedyStructParamCalculation $_calculation
     * @param long $_serviceTypeIds
     * @return SpeedyStructCalculateMultipleServices
     */
    public function __construct($_sessionId = NULL,$_calculation = NULL,$_serviceTypeIds = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'calculation'=>$_calculation,'serviceTypeIds'=>$_serviceTypeIds),false);
    }
    /**
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $_sessionId the sessionId
     * @return string
     */
    public function setSessionId($_sessionId)
    {
        return ($this->sessionId = $_sessionId);
    }
    /**
     * Get calculation value
     * @return SpeedyStructParamCalculation|null
     */
    public function getCalculation()
    {
        return $this->calculation;
    }
    /**
     * Set calculation value
     * @param SpeedyStructParamCalculation $_calculation the calculation
     * @return SpeedyStructParamCalculation
     */
    public function setCalculation($_calculation)
    {
        return ($this->calculation = $_calculation);
    }
    /**
     * Get serviceTypeIds value
     * @return long|null
     */
    public function getServiceTypeIds()
    {
        return $this->serviceTypeIds;
    }
    /**
     * Set serviceTypeIds value
     * @param long $_serviceTypeIds the serviceTypeIds
     * @return long
     */
    public function setServiceTypeIds($_serviceTypeIds)
    {
        return ($this->serviceTypeIds = $_serviceTypeIds);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructCalculateMultipleServices
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
