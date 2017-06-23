<?php
/**
 * File for class SpeedyServiceMake
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyServiceMake originally named Make
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyServiceMake extends SpeedyWsdlClass
{
    /**
     * Method to call the operation originally named makeAddressString
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructMakeAddressString $_speedyStructMakeAddressString
     * @return SpeedyStructMakeAddressStringResponse
     */
    public function makeAddressString(SpeedyStructMakeAddressString $_speedyStructMakeAddressString)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->makeAddressString($_speedyStructMakeAddressString));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SpeedyWsdlClass::getResult()
     * @return SpeedyStructMakeAddressStringResponse
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
