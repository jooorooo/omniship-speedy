<?php
/**
 * File for class SpeedyServiceFinalize
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyServiceFinalize originally named Finalize
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyServiceFinalize extends SpeedyWsdlClass
{
    /**
     * Method to call the operation originally named finalizeBillOfLadingCreation
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructFinalizeBillOfLadingCreation $_speedyStructFinalizeBillOfLadingCreation
     * @return SpeedyStructFinalizeBillOfLadingCreationResponse
     */
    public function finalizeBillOfLadingCreation(SpeedyStructFinalizeBillOfLadingCreation $_speedyStructFinalizeBillOfLadingCreation)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->finalizeBillOfLadingCreation($_speedyStructFinalizeBillOfLadingCreation));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SpeedyWsdlClass::getResult()
     * @return SpeedyStructFinalizeBillOfLadingCreationResponse
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
