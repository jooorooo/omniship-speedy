<?php
/**
 * File for class SpeedyServiceUpdate
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyServiceUpdate originally named Update
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyServiceUpdate extends SpeedyWsdlClass
{
    /**
     * Method to call the operation originally named updateBillOfLading
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructUpdateBillOfLading $_speedyStructUpdateBillOfLading
     * @return SpeedyStructUpdateBillOfLadingResponse
     */
    public function updateBillOfLading(SpeedyStructUpdateBillOfLading $_speedyStructUpdateBillOfLading)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->updateBillOfLading($_speedyStructUpdateBillOfLading));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SpeedyWsdlClass::getResult()
     * @return SpeedyStructUpdateBillOfLadingResponse
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
