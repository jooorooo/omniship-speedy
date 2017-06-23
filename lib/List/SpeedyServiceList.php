<?php
/**
 * File for class SpeedyServiceList
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyServiceList originally named List
 * @package Speedy
 * @subpackage Services
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyServiceList extends SpeedyWsdlClass
{
    /**
     * Method to call the operation originally named listServices
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructListServices $_speedyStructListServices
     * @return SpeedyStructListServicesResponse
     */
    public function listServices(SpeedyStructListServices $_speedyStructListServices)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->listServices($_speedyStructListServices));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named listServicesForSites
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructListServicesForSites $_speedyStructListServicesForSites
     * @return SpeedyStructListServicesForSitesResponse
     */
    public function listServicesForSites(SpeedyStructListServicesForSites $_speedyStructListServicesForSites)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->listServicesForSites($_speedyStructListServicesForSites));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named listAllSites
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructListAllSites $_speedyStructListAllSites
     * @return SpeedyStructListAllSitesResponse
     */
    public function listAllSites(SpeedyStructListAllSites $_speedyStructListAllSites)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->listAllSites($_speedyStructListAllSites));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named listSites
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructListSites $_speedyStructListSites
     * @return SpeedyStructListSitesResponse
     */
    public function listSites(SpeedyStructListSites $_speedyStructListSites)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->listSites($_speedyStructListSites));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named listSitesEx
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructListSitesEx $_speedyStructListSitesEx
     * @return SpeedyStructListSitesExResponse
     */
    public function listSitesEx(SpeedyStructListSitesEx $_speedyStructListSitesEx)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->listSitesEx($_speedyStructListSitesEx));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named listStreetTypes
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructListStreetTypes $_speedyStructListStreetTypes
     * @return SpeedyStructListStreetTypesResponse
     */
    public function listStreetTypes(SpeedyStructListStreetTypes $_speedyStructListStreetTypes)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->listStreetTypes($_speedyStructListStreetTypes));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named listQuarterTypes
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructListQuarterTypes $_speedyStructListQuarterTypes
     * @return SpeedyStructListQuarterTypesResponse
     */
    public function listQuarterTypes(SpeedyStructListQuarterTypes $_speedyStructListQuarterTypes)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->listQuarterTypes($_speedyStructListQuarterTypes));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named listStreets
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructListStreets $_speedyStructListStreets
     * @return SpeedyStructListStreetsResponse
     */
    public function listStreets(SpeedyStructListStreets $_speedyStructListStreets)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->listStreets($_speedyStructListStreets));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named listQuarters
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructListQuarters $_speedyStructListQuarters
     * @return SpeedyStructListQuartersResponse
     */
    public function listQuarters(SpeedyStructListQuarters $_speedyStructListQuarters)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->listQuarters($_speedyStructListQuarters));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named listCommonObjects
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructListCommonObjects $_speedyStructListCommonObjects
     * @return SpeedyStructListCommonObjectsResponse
     */
    public function listCommonObjects(SpeedyStructListCommonObjects $_speedyStructListCommonObjects)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->listCommonObjects($_speedyStructListCommonObjects));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named listBlocks
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructListBlocks $_speedyStructListBlocks
     * @return SpeedyStructListBlocksResponse
     */
    public function listBlocks(SpeedyStructListBlocks $_speedyStructListBlocks)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->listBlocks($_speedyStructListBlocks));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named listOffices
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructListOffices $_speedyStructListOffices
     * @return SpeedyStructListOfficesResponse
     */
    public function listOffices(SpeedyStructListOffices $_speedyStructListOffices)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->listOffices($_speedyStructListOffices));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named listOfficesEx
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructListOfficesEx $_speedyStructListOfficesEx
     * @return SpeedyStructListOfficesExResponse
     */
    public function listOfficesEx(SpeedyStructListOfficesEx $_speedyStructListOfficesEx)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->listOfficesEx($_speedyStructListOfficesEx));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named listContractClients
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructListContractClients $_speedyStructListContractClients
     * @return SpeedyStructListContractClientsResponse
     */
    public function listContractClients(SpeedyStructListContractClients $_speedyStructListContractClients)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->listContractClients($_speedyStructListContractClients));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named listSpecialDeliveryRequirements
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructListSpecialDeliveryRequirements $_speedyStructListSpecialDeliveryRequirements
     * @return SpeedyStructListSpecialDeliveryRequirementsResponse
     */
    public function listSpecialDeliveryRequirements(SpeedyStructListSpecialDeliveryRequirements $_speedyStructListSpecialDeliveryRequirements)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->listSpecialDeliveryRequirements($_speedyStructListSpecialDeliveryRequirements));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named listCountries
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructListCountries $_speedyStructListCountries
     * @return SpeedyStructListCountriesResponse
     */
    public function listCountries(SpeedyStructListCountries $_speedyStructListCountries)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->listCountries($_speedyStructListCountries));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named listCountriesEx
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructListCountriesEx $_speedyStructListCountriesEx
     * @return SpeedyStructListCountriesExResponse
     */
    public function listCountriesEx(SpeedyStructListCountriesEx $_speedyStructListCountriesEx)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->listCountriesEx($_speedyStructListCountriesEx));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named listStates
     * @uses SpeedyWsdlClass::getSoapClient()
     * @uses SpeedyWsdlClass::setResult()
     * @uses SpeedyWsdlClass::saveLastError()
     * @param SpeedyStructListStates $_speedyStructListStates
     * @return SpeedyStructListStatesResponse
     */
    public function listStates(SpeedyStructListStates $_speedyStructListStates)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->listStates($_speedyStructListStates));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see SpeedyWsdlClass::getResult()
     * @return SpeedyStructListAllSitesResponse|SpeedyStructListBlocksResponse|SpeedyStructListCommonObjectsResponse|SpeedyStructListContractClientsResponse|SpeedyStructListCountriesExResponse|SpeedyStructListCountriesResponse|SpeedyStructListOfficesExResponse|SpeedyStructListOfficesResponse|SpeedyStructListQuartersResponse|SpeedyStructListQuarterTypesResponse|SpeedyStructListServicesForSitesResponse|SpeedyStructListServicesResponse|SpeedyStructListSitesExResponse|SpeedyStructListSitesResponse|SpeedyStructListSpecialDeliveryRequirementsResponse|SpeedyStructListStatesResponse|SpeedyStructListStreetsResponse|SpeedyStructListStreetTypesResponse
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
