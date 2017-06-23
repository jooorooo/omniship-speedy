<?php
/**
 * File for class SpeedyServiceTrack
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyServiceTrack originally named Track
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyServiceTrack extends SpeedyWsdlClass
{
    /**
     * Method to call the operation originally named trackPicking
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructTrackPicking $_speedyStructTrackPicking
     * @return SpeedyStructTrackPickingResponse
     */
    public function trackPicking(SpeedyStructTrackPicking $_speedyStructTrackPicking)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->trackPicking($_speedyStructTrackPicking));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named trackPickingEx
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructTrackPickingEx $_speedyStructTrackPickingEx
     * @return SpeedyStructTrackPickingExResponse
     */
    public function trackPickingEx(SpeedyStructTrackPickingEx $_speedyStructTrackPickingEx)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->trackPickingEx($_speedyStructTrackPickingEx));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named trackParcel
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructTrackParcel $_speedyStructTrackParcel
     * @return SpeedyStructTrackParcelResponse
     */
    public function trackParcel(SpeedyStructTrackParcel $_speedyStructTrackParcel)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->trackParcel($_speedyStructTrackParcel));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named trackParcelMultiple
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructTrackParcelMultiple $_speedyStructTrackParcelMultiple
     * @return SpeedyStructTrackParcelMultipleResponse
     */
    public function trackParcelMultiple(SpeedyStructTrackParcelMultiple $_speedyStructTrackParcelMultiple)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->trackParcelMultiple($_speedyStructTrackParcelMultiple));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SpeedyWsdlClass::getResult()
     * @return SpeedyStructTrackParcelMultipleResponse|SpeedyStructTrackParcelResponse|SpeedyStructTrackPickingExResponse|SpeedyStructTrackPickingResponse
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
