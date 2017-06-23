<?php
/**
 * Test with Speedy for 'https://www.speedy.bg/eps/main01.wsdl'
 * @package Speedy
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/SpeedyAutoload.php';
/**
 * Wsdl instanciation infos. By default, nothing has to be set.
 * If you wish to override the SoapClient's options, please refer to the sample below.
 * 
 * This is an associative array as:
 * - the key must be a SpeedyWsdlClass constant beginning with WSDL_
 * - the value must be the corresponding key value
 * Each option matches the {@link http://www.php.net/manual/en/soapclient.soapclient.php} options
 * 
 * Here is below an example of how you can set the array:
 * $wsdl = array();
 * $wsdl[SpeedyWsdlClass::WSDL_URL] = 'https://www.speedy.bg/eps/main01.wsdl';
 * $wsdl[SpeedyWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
 * $wsdl[SpeedyWsdlClass::WSDL_TRACE] = true;
 * $wsdl[SpeedyWsdlClass::WSDL_LOGIN] = 'myLogin';
 * $wsdl[SpeedyWsdlClass::WSDL_PASSWD] = '**********';
 * etc....
 * Then instantiate the Service class as: 
 * - $wsdlObject = new SpeedyWsdlClass($wsdl);
 */
/**
 * Examples
 */


/********************************
 * Example for SpeedyServiceLogin
 */
$speedyServiceLogin = new SpeedyServiceLogin();
// sample call for SpeedyServiceLogin::login()
if($speedyServiceLogin->login(new SpeedyStructLogin(/*** update parameters list ***/)))
    print_r($speedyServiceLogin->getResult());
else
    print_r($speedyServiceLogin->getLastError());

/*****************************
 * Example for SpeedyServiceIs
 */
$speedyServiceIs = new SpeedyServiceIs();
// sample call for SpeedyServiceIs::isSessionActive()
if($speedyServiceIs->isSessionActive(new SpeedyStructIsSessionActive(/*** update parameters list ***/)))
    print_r($speedyServiceIs->getResult());
else
    print_r($speedyServiceIs->getLastError());

/*******************************
 * Example for SpeedyServiceList
 */
$speedyServiceList = new SpeedyServiceList();
// sample call for SpeedyServiceList::listServices()
if($speedyServiceList->listServices(new SpeedyStructListServices(/*** update parameters list ***/)))
    print_r($speedyServiceList->getResult());
else
    print_r($speedyServiceList->getLastError());
// sample call for SpeedyServiceList::listServicesForSites()
if($speedyServiceList->listServicesForSites(new SpeedyStructListServicesForSites(/*** update parameters list ***/)))
    print_r($speedyServiceList->getResult());
else
    print_r($speedyServiceList->getLastError());
// sample call for SpeedyServiceList::listAllSites()
if($speedyServiceList->listAllSites(new SpeedyStructListAllSites(/*** update parameters list ***/)))
    print_r($speedyServiceList->getResult());
else
    print_r($speedyServiceList->getLastError());
// sample call for SpeedyServiceList::listSites()
if($speedyServiceList->listSites(new SpeedyStructListSites(/*** update parameters list ***/)))
    print_r($speedyServiceList->getResult());
else
    print_r($speedyServiceList->getLastError());
// sample call for SpeedyServiceList::listSitesEx()
if($speedyServiceList->listSitesEx(new SpeedyStructListSitesEx(/*** update parameters list ***/)))
    print_r($speedyServiceList->getResult());
else
    print_r($speedyServiceList->getLastError());
// sample call for SpeedyServiceList::listStreetTypes()
if($speedyServiceList->listStreetTypes(new SpeedyStructListStreetTypes(/*** update parameters list ***/)))
    print_r($speedyServiceList->getResult());
else
    print_r($speedyServiceList->getLastError());
// sample call for SpeedyServiceList::listQuarterTypes()
if($speedyServiceList->listQuarterTypes(new SpeedyStructListQuarterTypes(/*** update parameters list ***/)))
    print_r($speedyServiceList->getResult());
else
    print_r($speedyServiceList->getLastError());
// sample call for SpeedyServiceList::listStreets()
if($speedyServiceList->listStreets(new SpeedyStructListStreets(/*** update parameters list ***/)))
    print_r($speedyServiceList->getResult());
else
    print_r($speedyServiceList->getLastError());
// sample call for SpeedyServiceList::listQuarters()
if($speedyServiceList->listQuarters(new SpeedyStructListQuarters(/*** update parameters list ***/)))
    print_r($speedyServiceList->getResult());
else
    print_r($speedyServiceList->getLastError());
// sample call for SpeedyServiceList::listCommonObjects()
if($speedyServiceList->listCommonObjects(new SpeedyStructListCommonObjects(/*** update parameters list ***/)))
    print_r($speedyServiceList->getResult());
else
    print_r($speedyServiceList->getLastError());
// sample call for SpeedyServiceList::listBlocks()
if($speedyServiceList->listBlocks(new SpeedyStructListBlocks(/*** update parameters list ***/)))
    print_r($speedyServiceList->getResult());
else
    print_r($speedyServiceList->getLastError());
// sample call for SpeedyServiceList::listOffices()
if($speedyServiceList->listOffices(new SpeedyStructListOffices(/*** update parameters list ***/)))
    print_r($speedyServiceList->getResult());
else
    print_r($speedyServiceList->getLastError());
// sample call for SpeedyServiceList::listOfficesEx()
if($speedyServiceList->listOfficesEx(new SpeedyStructListOfficesEx(/*** update parameters list ***/)))
    print_r($speedyServiceList->getResult());
else
    print_r($speedyServiceList->getLastError());
// sample call for SpeedyServiceList::listContractClients()
if($speedyServiceList->listContractClients(new SpeedyStructListContractClients(/*** update parameters list ***/)))
    print_r($speedyServiceList->getResult());
else
    print_r($speedyServiceList->getLastError());
// sample call for SpeedyServiceList::listSpecialDeliveryRequirements()
if($speedyServiceList->listSpecialDeliveryRequirements(new SpeedyStructListSpecialDeliveryRequirements(/*** update parameters list ***/)))
    print_r($speedyServiceList->getResult());
else
    print_r($speedyServiceList->getLastError());
// sample call for SpeedyServiceList::listCountries()
if($speedyServiceList->listCountries(new SpeedyStructListCountries(/*** update parameters list ***/)))
    print_r($speedyServiceList->getResult());
else
    print_r($speedyServiceList->getLastError());
// sample call for SpeedyServiceList::listCountriesEx()
if($speedyServiceList->listCountriesEx(new SpeedyStructListCountriesEx(/*** update parameters list ***/)))
    print_r($speedyServiceList->getResult());
else
    print_r($speedyServiceList->getLastError());
// sample call for SpeedyServiceList::listStates()
if($speedyServiceList->listStates(new SpeedyStructListStates(/*** update parameters list ***/)))
    print_r($speedyServiceList->getResult());
else
    print_r($speedyServiceList->getLastError());

/******************************
 * Example for SpeedyServiceGet
 */
$speedyServiceGet = new SpeedyServiceGet();
// sample call for SpeedyServiceGet::getWeightInterval()
if($speedyServiceGet->getWeightInterval(new SpeedyStructGetWeightInterval(/*** update parameters list ***/)))
    print_r($speedyServiceGet->getResult());
else
    print_r($speedyServiceGet->getLastError());
// sample call for SpeedyServiceGet::getAddressNomenclature()
if($speedyServiceGet->getAddressNomenclature(new SpeedyStructGetAddressNomenclature(/*** update parameters list ***/)))
    print_r($speedyServiceGet->getResult());
else
    print_r($speedyServiceGet->getLastError());
// sample call for SpeedyServiceGet::getPickingDeliveryInfo()
if($speedyServiceGet->getPickingDeliveryInfo(new SpeedyStructGetPickingDeliveryInfo(/*** update parameters list ***/)))
    print_r($speedyServiceGet->getResult());
else
    print_r($speedyServiceGet->getLastError());
// sample call for SpeedyServiceGet::getSiteById()
if($speedyServiceGet->getSiteById(new SpeedyStructGetSiteById(/*** update parameters list ***/)))
    print_r($speedyServiceGet->getResult());
else
    print_r($speedyServiceGet->getLastError());
// sample call for SpeedyServiceGet::getSitesByAddrNomenType()
if($speedyServiceGet->getSitesByAddrNomenType(new SpeedyStructGetSitesByAddrNomenType(/*** update parameters list ***/)))
    print_r($speedyServiceGet->getResult());
else
    print_r($speedyServiceGet->getLastError());
// sample call for SpeedyServiceGet::getAdditionalUserParams()
if($speedyServiceGet->getAdditionalUserParams(new SpeedyStructGetAdditionalUserParams(/*** update parameters list ***/)))
    print_r($speedyServiceGet->getResult());
else
    print_r($speedyServiceGet->getLastError());
// sample call for SpeedyServiceGet::getClientById()
if($speedyServiceGet->getClientById(new SpeedyStructGetClientById(/*** update parameters list ***/)))
    print_r($speedyServiceGet->getResult());
else
    print_r($speedyServiceGet->getLastError());
// sample call for SpeedyServiceGet::getRoutingLabelInfo()
if($speedyServiceGet->getRoutingLabelInfo(new SpeedyStructGetRoutingLabelInfo(/*** update parameters list ***/)))
    print_r($speedyServiceGet->getResult());
else
    print_r($speedyServiceGet->getLastError());
// sample call for SpeedyServiceGet::getAllowedDaysForTaking()
if($speedyServiceGet->getAllowedDaysForTaking(new SpeedyStructGetAllowedDaysForTaking(/*** update parameters list ***/)))
    print_r($speedyServiceGet->getResult());
else
    print_r($speedyServiceGet->getLastError());
// sample call for SpeedyServiceGet::getPickingParcels()
if($speedyServiceGet->getPickingParcels(new SpeedyStructGetPickingParcels(/*** update parameters list ***/)))
    print_r($speedyServiceGet->getResult());
else
    print_r($speedyServiceGet->getLastError());
// sample call for SpeedyServiceGet::getMicroregionId()
if($speedyServiceGet->getMicroregionId(new SpeedyStructGetMicroregionId(/*** update parameters list ***/)))
    print_r($speedyServiceGet->getResult());
else
    print_r($speedyServiceGet->getLastError());
// sample call for SpeedyServiceGet::getStateById()
if($speedyServiceGet->getStateById(new SpeedyStructGetStateById(/*** update parameters list ***/)))
    print_r($speedyServiceGet->getResult());
else
    print_r($speedyServiceGet->getLastError());
// sample call for SpeedyServiceGet::getPickingExtendedInfo()
if($speedyServiceGet->getPickingExtendedInfo(new SpeedyStructGetPickingExtendedInfo(/*** update parameters list ***/)))
    print_r($speedyServiceGet->getResult());
else
    print_r($speedyServiceGet->getLastError());

/*********************************
 * Example for SpeedyServiceSearch
 */
$speedyServiceSearch = new SpeedyServiceSearch();
// sample call for SpeedyServiceSearch::searchSecondaryPickings()
if($speedyServiceSearch->searchSecondaryPickings(new SpeedyStructSearchSecondaryPickings(/*** update parameters list ***/)))
    print_r($speedyServiceSearch->getResult());
else
    print_r($speedyServiceSearch->getLastError());
// sample call for SpeedyServiceSearch::searchClients()
if($speedyServiceSearch->searchClients(new SpeedyStructSearchClients(/*** update parameters list ***/)))
    print_r($speedyServiceSearch->getResult());
else
    print_r($speedyServiceSearch->getLastError());
// sample call for SpeedyServiceSearch::searchPickingsByRefNumber()
if($speedyServiceSearch->searchPickingsByRefNumber(new SpeedyStructSearchPickingsByRefNumber(/*** update parameters list ***/)))
    print_r($speedyServiceSearch->getResult());
else
    print_r($speedyServiceSearch->getLastError());

/*********************************
 * Example for SpeedyServiceCreate
 */
$speedyServiceCreate = new SpeedyServiceCreate();
// sample call for SpeedyServiceCreate::createBillOfLading()
if($speedyServiceCreate->createBillOfLading(new SpeedyStructCreateBillOfLading(/*** update parameters list ***/)))
    print_r($speedyServiceCreate->getResult());
else
    print_r($speedyServiceCreate->getLastError());
// sample call for SpeedyServiceCreate::createBillOfLadingPDF()
if($speedyServiceCreate->createBillOfLadingPDF(new SpeedyStructCreateBillOfLadingPDF(/*** update parameters list ***/)))
    print_r($speedyServiceCreate->getResult());
else
    print_r($speedyServiceCreate->getLastError());
// sample call for SpeedyServiceCreate::createOrder()
if($speedyServiceCreate->createOrder(new SpeedyStructCreateOrder(/*** update parameters list ***/)))
    print_r($speedyServiceCreate->getResult());
else
    print_r($speedyServiceCreate->getLastError());
// sample call for SpeedyServiceCreate::createCustomTravelLabelPDFType1()
if($speedyServiceCreate->createCustomTravelLabelPDFType1(new SpeedyStructCreateCustomTravelLabelPDFType1(/*** update parameters list ***/)))
    print_r($speedyServiceCreate->getResult());
else
    print_r($speedyServiceCreate->getLastError());
// sample call for SpeedyServiceCreate::createPDF()
if($speedyServiceCreate->createPDF(new SpeedyStructCreatePDF(/*** update parameters list ***/)))
    print_r($speedyServiceCreate->getResult());
else
    print_r($speedyServiceCreate->getLastError());
// sample call for SpeedyServiceCreate::createPDFEx()
if($speedyServiceCreate->createPDFEx(new SpeedyStructCreatePDFEx(/*** update parameters list ***/)))
    print_r($speedyServiceCreate->getResult());
else
    print_r($speedyServiceCreate->getLastError());

/*********************************
 * Example for SpeedyServiceUpdate
 */
$speedyServiceUpdate = new SpeedyServiceUpdate();
// sample call for SpeedyServiceUpdate::updateBillOfLading()
if($speedyServiceUpdate->updateBillOfLading(new SpeedyStructUpdateBillOfLading(/*** update parameters list ***/)))
    print_r($speedyServiceUpdate->getResult());
else
    print_r($speedyServiceUpdate->getLastError());

/************************************
 * Example for SpeedyServiceCalculate
 */
$speedyServiceCalculate = new SpeedyServiceCalculate();
// sample call for SpeedyServiceCalculate::calculate()
if($speedyServiceCalculate->calculate(new SpeedyStructCalculate(/*** update parameters list ***/)))
    print_r($speedyServiceCalculate->getResult());
else
    print_r($speedyServiceCalculate->getLastError());
// sample call for SpeedyServiceCalculate::calculateMultipleServices()
if($speedyServiceCalculate->calculateMultipleServices(new SpeedyStructCalculateMultipleServices(/*** update parameters list ***/)))
    print_r($speedyServiceCalculate->getResult());
else
    print_r($speedyServiceCalculate->getLastError());
// sample call for SpeedyServiceCalculate::calculatePicking()
if($speedyServiceCalculate->calculatePicking(new SpeedyStructCalculatePicking(/*** update parameters list ***/)))
    print_r($speedyServiceCalculate->getResult());
else
    print_r($speedyServiceCalculate->getLastError());

/*************************************
 * Example for SpeedyServiceInvalidate
 */
$speedyServiceInvalidate = new SpeedyServiceInvalidate();
// sample call for SpeedyServiceInvalidate::invalidatePicking()
if($speedyServiceInvalidate->invalidatePicking(new SpeedyStructInvalidatePicking(/*** update parameters list ***/)))
    print_r($speedyServiceInvalidate->getResult());
else
    print_r($speedyServiceInvalidate->getLastError());

/******************************
 * Example for SpeedyServiceAdd
 */
$speedyServiceAdd = new SpeedyServiceAdd();
// sample call for SpeedyServiceAdd::addParcel()
if($speedyServiceAdd->addParcel(new SpeedyStructAddParcel(/*** update parameters list ***/)))
    print_r($speedyServiceAdd->getResult());
else
    print_r($speedyServiceAdd->getLastError());

/***********************************
 * Example for SpeedyServiceFinalize
 */
$speedyServiceFinalize = new SpeedyServiceFinalize();
// sample call for SpeedyServiceFinalize::finalizeBillOfLadingCreation()
if($speedyServiceFinalize->finalizeBillOfLadingCreation(new SpeedyStructFinalizeBillOfLadingCreation(/*** update parameters list ***/)))
    print_r($speedyServiceFinalize->getResult());
else
    print_r($speedyServiceFinalize->getLastError());

/********************************
 * Example for SpeedyServiceTrack
 */
$speedyServiceTrack = new SpeedyServiceTrack();
// sample call for SpeedyServiceTrack::trackPicking()
if($speedyServiceTrack->trackPicking(new SpeedyStructTrackPicking(/*** update parameters list ***/)))
    print_r($speedyServiceTrack->getResult());
else
    print_r($speedyServiceTrack->getLastError());
// sample call for SpeedyServiceTrack::trackPickingEx()
if($speedyServiceTrack->trackPickingEx(new SpeedyStructTrackPickingEx(/*** update parameters list ***/)))
    print_r($speedyServiceTrack->getResult());
else
    print_r($speedyServiceTrack->getLastError());
// sample call for SpeedyServiceTrack::trackParcel()
if($speedyServiceTrack->trackParcel(new SpeedyStructTrackParcel(/*** update parameters list ***/)))
    print_r($speedyServiceTrack->getResult());
else
    print_r($speedyServiceTrack->getLastError());
// sample call for SpeedyServiceTrack::trackParcelMultiple()
if($speedyServiceTrack->trackParcelMultiple(new SpeedyStructTrackParcelMultiple(/*** update parameters list ***/)))
    print_r($speedyServiceTrack->getResult());
else
    print_r($speedyServiceTrack->getLastError());

/**********************************
 * Example for SpeedyServiceAddress
 */
$speedyServiceAddress = new SpeedyServiceAddress();
// sample call for SpeedyServiceAddress::addressSearch()
if($speedyServiceAddress->addressSearch(new SpeedyStructAddressSearch(/*** update parameters list ***/)))
    print_r($speedyServiceAddress->getResult());
else
    print_r($speedyServiceAddress->getLastError());

/***********************************
 * Example for SpeedyServiceValidate
 */
$speedyServiceValidate = new SpeedyServiceValidate();
// sample call for SpeedyServiceValidate::validateAddress()
if($speedyServiceValidate->validateAddress(new SpeedyStructValidateAddress(/*** update parameters list ***/)))
    print_r($speedyServiceValidate->getResult());
else
    print_r($speedyServiceValidate->getLastError());
// sample call for SpeedyServiceValidate::validatePostCode()
if($speedyServiceValidate->validatePostCode(new SpeedyStructValidatePostCode(/*** update parameters list ***/)))
    print_r($speedyServiceValidate->getResult());
else
    print_r($speedyServiceValidate->getLastError());

/************************************
 * Example for SpeedyServiceSerialize
 */
$speedyServiceSerialize = new SpeedyServiceSerialize();
// sample call for SpeedyServiceSerialize::serializeAddress()
if($speedyServiceSerialize->serializeAddress(new SpeedyStructSerializeAddress(/*** update parameters list ***/)))
    print_r($speedyServiceSerialize->getResult());
else
    print_r($speedyServiceSerialize->getLastError());

/**************************************
 * Example for SpeedyServiceDeserialize
 */
$speedyServiceDeserialize = new SpeedyServiceDeserialize();
// sample call for SpeedyServiceDeserialize::deserializeAddress()
if($speedyServiceDeserialize->deserializeAddress(new SpeedyStructDeserializeAddress(/*** update parameters list ***/)))
    print_r($speedyServiceDeserialize->getResult());
else
    print_r($speedyServiceDeserialize->getLastError());

/*******************************
 * Example for SpeedyServiceMake
 */
$speedyServiceMake = new SpeedyServiceMake();
// sample call for SpeedyServiceMake::makeAddressString()
if($speedyServiceMake->makeAddressString(new SpeedyStructMakeAddressString(/*** update parameters list ***/)))
    print_r($speedyServiceMake->getResult());
else
    print_r($speedyServiceMake->getLastError());
