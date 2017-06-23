<?php
/**
 * File for class SpeedyServiceValidate
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyServiceValidate originally named Validate
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyServiceValidate extends SpeedyWsdlClass
{
    /**
     * Method to call the operation originally named validateAddress
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructValidateAddress $_speedyStructValidateAddress
     * @return SpeedyStructValidateAddressResponse
     */
    public function validateAddress(SpeedyStructValidateAddress $_speedyStructValidateAddress)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->validateAddress($_speedyStructValidateAddress));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named validatePostCode
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructValidatePostCode $_speedyStructValidatePostCode
     * @return SpeedyStructValidatePostCodeResponse
     */
    public function validatePostCode(SpeedyStructValidatePostCode $_speedyStructValidatePostCode)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->validatePostCode($_speedyStructValidatePostCode));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SpeedyWsdlClass::getResult()
     * @return SpeedyStructValidateAddressResponse|SpeedyStructValidatePostCodeResponse
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
