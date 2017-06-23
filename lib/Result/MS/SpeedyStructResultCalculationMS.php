<?php
/**
 * File for class SpeedyStructResultCalculationMS
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultCalculationMS originally named resultCalculationMS
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultCalculationMS extends SpeedyWsdlClass
{
    /**
     * The errorDescription
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $errorDescription;
    /**
     * The resultInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructResultCalculation
     */
    public $resultInfo;
    /**
     * The serviceTypeId
     * @var long
     */
    public $serviceTypeId;
    /**
     * Constructor method for resultCalculationMS
     * @see parent::__construct()
     * @param string $_errorDescription
     * @param SpeedyStructResultCalculation $_resultInfo
     * @param long $_serviceTypeId
     * @return SpeedyStructResultCalculationMS
     */
    public function __construct($_errorDescription = NULL,$_resultInfo = NULL,$_serviceTypeId = NULL)
    {
        parent::__construct(array('errorDescription'=>$_errorDescription,'resultInfo'=>$_resultInfo,'serviceTypeId'=>$_serviceTypeId),false);
    }
    /**
     * Get errorDescription value
     * @return string|null
     */
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }
    /**
     * Set errorDescription value
     * @param string $_errorDescription the errorDescription
     * @return string
     */
    public function setErrorDescription($_errorDescription)
    {
        return ($this->errorDescription = $_errorDescription);
    }
    /**
     * Get resultInfo value
     * @return SpeedyStructResultCalculation|null
     */
    public function getResultInfo()
    {
        return $this->resultInfo;
    }
    /**
     * Set resultInfo value
     * @param SpeedyStructResultCalculation $_resultInfo the resultInfo
     * @return SpeedyStructResultCalculation
     */
    public function setResultInfo($_resultInfo)
    {
        return ($this->resultInfo = $_resultInfo);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultCalculationMS
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
