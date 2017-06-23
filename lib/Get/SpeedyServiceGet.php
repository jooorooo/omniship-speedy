<?php
/**
 * File for class SpeedyServiceGet
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyServiceGet originally named Get
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyServiceGet extends SpeedyWsdlClass
{
    /**
     * Method to call the operation originally named getWeightInterval
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructGetWeightInterval $_speedyStructGetWeightInterval
     * @return SpeedyStructGetWeightIntervalResponse
     */
    public function getWeightInterval(SpeedyStructGetWeightInterval $_speedyStructGetWeightInterval)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getWeightInterval($_speedyStructGetWeightInterval));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getAddressNomenclature
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructGetAddressNomenclature $_speedyStructGetAddressNomenclature
     * @return SpeedyStructGetAddressNomenclatureResponse
     */
    public function getAddressNomenclature(SpeedyStructGetAddressNomenclature $_speedyStructGetAddressNomenclature)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getAddressNomenclature($_speedyStructGetAddressNomenclature));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getPickingDeliveryInfo
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructGetPickingDeliveryInfo $_speedyStructGetPickingDeliveryInfo
     * @return SpeedyStructGetPickingDeliveryInfoResponse
     */
    public function getPickingDeliveryInfo(SpeedyStructGetPickingDeliveryInfo $_speedyStructGetPickingDeliveryInfo)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getPickingDeliveryInfo($_speedyStructGetPickingDeliveryInfo));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getSiteById
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructGetSiteById $_speedyStructGetSiteById
     * @return SpeedyStructGetSiteByIdResponse
     */
    public function getSiteById(SpeedyStructGetSiteById $_speedyStructGetSiteById)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getSiteById($_speedyStructGetSiteById));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getSitesByAddrNomenType
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructGetSitesByAddrNomenType $_speedyStructGetSitesByAddrNomenType
     * @return SpeedyStructGetSitesByAddrNomenTypeResponse
     */
    public function getSitesByAddrNomenType(SpeedyStructGetSitesByAddrNomenType $_speedyStructGetSitesByAddrNomenType)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getSitesByAddrNomenType($_speedyStructGetSitesByAddrNomenType));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getAdditionalUserParams
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructGetAdditionalUserParams $_speedyStructGetAdditionalUserParams
     * @return SpeedyStructGetAdditionalUserParamsResponse
     */
    public function getAdditionalUserParams(SpeedyStructGetAdditionalUserParams $_speedyStructGetAdditionalUserParams)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getAdditionalUserParams($_speedyStructGetAdditionalUserParams));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getClientById
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructGetClientById $_speedyStructGetClientById
     * @return SpeedyStructGetClientByIdResponse
     */
    public function getClientById(SpeedyStructGetClientById $_speedyStructGetClientById)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getClientById($_speedyStructGetClientById));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getRoutingLabelInfo
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructGetRoutingLabelInfo $_speedyStructGetRoutingLabelInfo
     * @return SpeedyStructGetRoutingLabelInfoResponse
     */
    public function getRoutingLabelInfo(SpeedyStructGetRoutingLabelInfo $_speedyStructGetRoutingLabelInfo)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getRoutingLabelInfo($_speedyStructGetRoutingLabelInfo));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getAllowedDaysForTaking
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructGetAllowedDaysForTaking $_speedyStructGetAllowedDaysForTaking
     * @return SpeedyStructGetAllowedDaysForTakingResponse
     */
    public function getAllowedDaysForTaking(SpeedyStructGetAllowedDaysForTaking $_speedyStructGetAllowedDaysForTaking)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getAllowedDaysForTaking($_speedyStructGetAllowedDaysForTaking));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getPickingParcels
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructGetPickingParcels $_speedyStructGetPickingParcels
     * @return SpeedyStructGetPickingParcelsResponse
     */
    public function getPickingParcels(SpeedyStructGetPickingParcels $_speedyStructGetPickingParcels)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getPickingParcels($_speedyStructGetPickingParcels));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getMicroregionId
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructGetMicroregionId $_speedyStructGetMicroregionId
     * @return SpeedyStructGetMicroregionIdResponse
     */
    public function getMicroregionId(SpeedyStructGetMicroregionId $_speedyStructGetMicroregionId)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getMicroregionId($_speedyStructGetMicroregionId));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getStateById
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructGetStateById $_speedyStructGetStateById
     * @return SpeedyStructGetStateByIdResponse
     */
    public function getStateById(SpeedyStructGetStateById $_speedyStructGetStateById)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getStateById($_speedyStructGetStateById));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named getPickingExtendedInfo
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructGetPickingExtendedInfo $_speedyStructGetPickingExtendedInfo
     * @return SpeedyStructGetPickingExtendedInfoResponse
     */
    public function getPickingExtendedInfo(SpeedyStructGetPickingExtendedInfo $_speedyStructGetPickingExtendedInfo)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->getPickingExtendedInfo($_speedyStructGetPickingExtendedInfo));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SpeedyWsdlClass::getResult()
     * @return SpeedyStructGetAdditionalUserParamsResponse|SpeedyStructGetAddressNomenclatureResponse|SpeedyStructGetAllowedDaysForTakingResponse|SpeedyStructGetClientByIdResponse|SpeedyStructGetMicroregionIdResponse|SpeedyStructGetPickingDeliveryInfoResponse|SpeedyStructGetPickingExtendedInfoResponse|SpeedyStructGetPickingParcelsResponse|SpeedyStructGetRoutingLabelInfoResponse|SpeedyStructGetSiteByIdResponse|SpeedyStructGetSitesByAddrNomenTypeResponse|SpeedyStructGetStateByIdResponse|SpeedyStructGetWeightIntervalResponse
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
