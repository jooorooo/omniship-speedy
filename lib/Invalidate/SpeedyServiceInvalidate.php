<?php
/**
 * File for class SpeedyServiceInvalidate
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyServiceInvalidate originally named Invalidate
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyServiceInvalidate extends SpeedyWsdlClass
{
    /**
     * Method to call the operation originally named invalidatePicking
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructInvalidatePicking $_speedyStructInvalidatePicking
     * @return SpeedyStructInvalidatePickingResponse
     */
    public function invalidatePicking(SpeedyStructInvalidatePicking $_speedyStructInvalidatePicking)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->invalidatePicking($_speedyStructInvalidatePicking));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SpeedyWsdlClass::getResult()
     * @return SpeedyStructInvalidatePickingResponse
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
