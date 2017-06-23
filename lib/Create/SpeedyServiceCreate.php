<?php
/**
 * File for class SpeedyServiceCreate
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyServiceCreate originally named Create
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyServiceCreate extends SpeedyWsdlClass
{
    /**
     * Method to call the operation originally named createBillOfLading
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructCreateBillOfLading $_speedyStructCreateBillOfLading
     * @return SpeedyStructCreateBillOfLadingResponse
     */
    public function createBillOfLading(SpeedyStructCreateBillOfLading $_speedyStructCreateBillOfLading)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->createBillOfLading($_speedyStructCreateBillOfLading));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named createBillOfLadingPDF
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructCreateBillOfLadingPDF $_speedyStructCreateBillOfLadingPDF
     * @return SpeedyStructCreateBillOfLadingPDFResponse
     */
    public function createBillOfLadingPDF(SpeedyStructCreateBillOfLadingPDF $_speedyStructCreateBillOfLadingPDF)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->createBillOfLadingPDF($_speedyStructCreateBillOfLadingPDF));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named createOrder
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructCreateOrder $_speedyStructCreateOrder
     * @return SpeedyStructCreateOrderResponse
     */
    public function createOrder(SpeedyStructCreateOrder $_speedyStructCreateOrder)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->createOrder($_speedyStructCreateOrder));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named createCustomTravelLabelPDFType1
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructCreateCustomTravelLabelPDFType1 $_speedyStructCreateCustomTravelLabelPDFType1
     * @return SpeedyStructCreateCustomTravelLabelPDFType1Response
     */
    public function createCustomTravelLabelPDFType1(SpeedyStructCreateCustomTravelLabelPDFType1 $_speedyStructCreateCustomTravelLabelPDFType1)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->createCustomTravelLabelPDFType1($_speedyStructCreateCustomTravelLabelPDFType1));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named createPDF
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructCreatePDF $_speedyStructCreatePDF
     * @return SpeedyStructCreatePDFResponse
     */
    public function createPDF(SpeedyStructCreatePDF $_speedyStructCreatePDF)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->createPDF($_speedyStructCreatePDF));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named createPDFEx
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructCreatePDFEx $_speedyStructCreatePDFEx
     * @return SpeedyStructCreatePDFExResponse
     */
    public function createPDFEx(SpeedyStructCreatePDFEx $_speedyStructCreatePDFEx)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->createPDFEx($_speedyStructCreatePDFEx));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SpeedyWsdlClass::getResult()
     * @return SpeedyStructCreateBillOfLadingPDFResponse|SpeedyStructCreateBillOfLadingResponse|SpeedyStructCreateCustomTravelLabelPDFType1Response|SpeedyStructCreateOrderResponse|SpeedyStructCreatePDFExResponse|SpeedyStructCreatePDFResponse
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
