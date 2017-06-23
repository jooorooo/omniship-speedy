<?php
/**
 * File for class SpeedyServiceSearch
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyServiceSearch originally named Search
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyServiceSearch extends SpeedyWsdlClass
{
    /**
     * Method to call the operation originally named searchSecondaryPickings
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructSearchSecondaryPickings $_speedyStructSearchSecondaryPickings
     * @return SpeedyStructSearchSecondaryPickingsResponse
     */
    public function searchSecondaryPickings(SpeedyStructSearchSecondaryPickings $_speedyStructSearchSecondaryPickings)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->searchSecondaryPickings($_speedyStructSearchSecondaryPickings));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named searchClients
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructSearchClients $_speedyStructSearchClients
     * @return SpeedyStructSearchClientsResponse
     */
    public function searchClients(SpeedyStructSearchClients $_speedyStructSearchClients)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->searchClients($_speedyStructSearchClients));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named searchPickingsByRefNumber
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructSearchPickingsByRefNumber $_speedyStructSearchPickingsByRefNumber
     * @return SpeedyStructSearchPickingsByRefNumberResponse
     */
    public function searchPickingsByRefNumber(SpeedyStructSearchPickingsByRefNumber $_speedyStructSearchPickingsByRefNumber)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->searchPickingsByRefNumber($_speedyStructSearchPickingsByRefNumber));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SpeedyWsdlClass::getResult()
     * @return SpeedyStructSearchClientsResponse|SpeedyStructSearchPickingsByRefNumberResponse|SpeedyStructSearchSecondaryPickingsResponse
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
