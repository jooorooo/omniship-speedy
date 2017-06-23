<?php
/**
 * File for class SpeedyServiceCalculate
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyServiceCalculate originally named Calculate
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyServiceCalculate extends SpeedyWsdlClass
{
    /**
     * Method to call the operation originally named calculate
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructCalculate $_speedyStructCalculate
     * @return SpeedyStructCalculateResponse
     */
    public function calculate(SpeedyStructCalculate $_speedyStructCalculate)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->calculate($_speedyStructCalculate));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named calculateMultipleServices
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructCalculateMultipleServices $_speedyStructCalculateMultipleServices
     * @return SpeedyStructCalculateMultipleServicesResponse
     */
    public function calculateMultipleServices(SpeedyStructCalculateMultipleServices $_speedyStructCalculateMultipleServices)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->calculateMultipleServices($_speedyStructCalculateMultipleServices));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named calculatePicking
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructCalculatePicking $_speedyStructCalculatePicking
     * @return SpeedyStructCalculatePickingResponse
     */
    public function calculatePicking(SpeedyStructCalculatePicking $_speedyStructCalculatePicking)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->calculatePicking($_speedyStructCalculatePicking));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SpeedyWsdlClass::getResult()
     * @return SpeedyStructCalculateMultipleServicesResponse|SpeedyStructCalculatePickingResponse|SpeedyStructCalculateResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
