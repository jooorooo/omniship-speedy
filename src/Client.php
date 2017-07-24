<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 16.5.2017 г.
 * Time: 15:12 ч.
 */

namespace Omniship\Speedy;

use Carbon\Carbon;
use Exception;
use EPSFacade;
use EPSSOAPInterfaceImpl;
use ResultLogin;
use ResultClientData;
use ResultCourierService;
use ResultCalculationMS;
use ResultCountry;
use ResultPickingExtendedInfo;
use ResultSpecialDeliveryRequirement;
use ResultTrackPickingEx;
use ResultOfficeEx;
use ResultSite;
use ResultSiteEx;
use ResultQuarter;
use ResultStreet;
use ResultState;
use ResultCommonObject;
use ParamCalculation;
use ParamFilterCountry;
use ParamFilterSite;
use ParamPDF;
use ParamAddress;
use ClientException;
use ServerException;
use ParamOrder;
use ParamPhoneNumber;

class Client
{

    /**
     * @var EPSFacade
     */
    protected $ePSFacade;

    /**
     * @var ResultLogin
     */
    protected $resultLogin;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $password;

    protected $error;

    const SERVER_ADDRESS = 'https://www.speedy.bg/eps/main01.wsdl';

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->initialize();
    }

    /**
     * @return bool
     */
    public function initialize()
    {
        try {
            @ini_set("soap.wsdl_cache_enabled", 0);
            $this->ePSFacade = new EPSFacade(new EPSSOAPInterfaceImpl(static::SERVER_ADDRESS, array('cache_wsdl' => WSDL_CACHE_NONE, 'trace' => 1)), $this->username, $this->password);
            $this->resultLogin = $this->ePSFacade->getResultLogin();
            return true;
        } catch (Exception $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    /**
     * @param null $username
     * @param null $password
     * @return bool
     */
    public function reconnect($username = null, $password = null)
    {
        if ($username) {
            $this->username = $username;
        }
        if ($password) {
            $this->password = $password;
        }
        $this->ePSFacade = $this->resultLogin = $this->error = null;
        return $this->initialize();
    }

    /**
     * @param null $client_id
     * @return bool|ResultClientData
     */
    public function getClientInfo($client_id = null)
    {
        $client = false;
        if (!is_null($login = $this->getResultLogin())) {
            try {
                $client = $this->getEPSFacade()->getClientById($client_id ? $client_id : $login->getClientId());
            } catch (Exception $e) {
                if (!strpos($e->getMessage(), 'No client with such ID')) {
                    $this->error = $e->getMessage();
                }
                return false;
            }
        }
        return $client;
    }

    /**
     * @param string $language
     * @return bool|ResultCourierService[]
     */
    public function getServices($language = 'bg')
    {
        $services = [];
        if (!is_null($login = $this->getResultLogin())) {
            try {
                /* @var $listServices ResultCourierService[] */
                $listServices = $this->getEPSFacade()->listServices(time(), $this->_languageValidate($language));
                if ($listServices) {
                    foreach ($listServices as $service) {
                        // Remove pallet services
                        if ($service->getCargoType() == 2) {
                            continue;
                        }
                        $services[] = $service;
                    }
                }
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }
        return $services;
    }

    /**
     * @param string $language
     * @return array
     */
    public function getServicesList($language = 'bg')
    {
        $services = $this->getServices($language);
        $result = [];
        if ($services) {
            foreach ($services as $service) {
                $result[$service->getTypeId()] = $service->getName();
            }
        }
        return $result;
    }

    /**
     * @param integer $id
     * @param string $language
     * @return bool|ResultCountry
     */
    public function getCountryById($id, $language = 'bg')
    {
        return $this->getCountryByFilter(['id' => $id], $language);
    }

    /**
     * @param string $name
     * @param string $language
     * @return bool|ResultCountry
     */
    public function getCountryByName($name, $language = 'bg')
    {
        return $this->getCountryByFilter(['name' => $name], $language);
    }

    /**
     * @param string $iso2
     * @param string $language
     * @return bool|ResultCountry
     */
    public function getCountryByIso2($iso2, $language = 'bg')
    {
        return $this->getCountryByFilter(['iso2' => $iso2], $language);
    }

    /**
     * @param string $iso3
     * @param string $language
     * @return bool|ResultCountry
     */
    public function getCountryByIso3($iso3, $language = 'bg')
    {
        return $this->getCountryByFilter(['iso3' => $iso3], $language);
    }

    /**
     * @param array $filter
     * @param string $language
     * @return bool|ResultCountry
     */
    public function getCountryByFilter(array $filter, $language = 'bg')
    {
        $country = false;
        if (!empty($filter) && !is_null($login = $this->getResultLogin())) {
            $paramFilterCountry = new ParamFilterCountry();
            if (!empty($filter['id'])) {
                $paramFilterCountry->setCountryId($filter['id']);
            }
            if (!empty($filter['name'])) {
                $paramFilterCountry->setName($filter['name']);
            }
            if (!empty($filter['iso2'])) {
                $paramFilterCountry->setIsoAlpha2($filter['iso2']);
            }
            if (!empty($filter['iso3'])) {
                $paramFilterCountry->setIsoAlpha3($filter['iso3']);
            }
            try {
                $listCountries = $this->getEPSFacade()->listCountriesEx($paramFilterCountry, $this->_languageValidate($language));
                if (count($listCountries) == 1) {
                    $country = array_shift($listCountries);
                } else if (count($listCountries) > 1) {
                    $this->error = 'Response return more that one result';
                    return false;
                } else {
                    return false;
                }
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }

        return $country;
    }

    /**
     * @param string $filter
     * @param string $language
     * @return ResultCountry[]
     */
    public function searchCountry($filter, $language = 'bg')
    {
        $countries = [];
        if (!is_null($login = $this->getResultLogin())) {
            $paramFilterCountry = new ParamFilterCountry();
            $paramFilterCountry->setSearchString($filter);
            try {
                $listCountries = $this->getEPSFacade()->listCountriesEx($paramFilterCountry, $this->_languageValidate($language));
                if ($listCountries) {
                    $countries = $listCountries;
                }
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }

        return $countries;
    }

    /**
     * @param int $country_id
     * @param string $language
     * @return bool|ResultSite[]
     */
    public function getCitiesByCountry($country_id, $language = 'bg')
    {
        return $this->getCitiesByFilter(['country_id' => $country_id], $language);
    }

    /**
     * @param $name
     * @param null $postcode
     * @param null $country_id
     * @param string $language
     * @return null|ResultSite
     */
    public function getCityByName($name, $postcode = null, $country_id = null, $language = 'bg')
    {
        $cities = $this->getCities($name, $postcode, $country_id, $language);
        if ($cities && count($cities) == 1) {
            return array_shift($cities);
        }
        return null;
    }

    /**
     * @param $name
     * @param null $postcode
     * @param null $country_id
     * @param string $language
     * @return bool|ResultSite[]
     */
    public function searchCities($name, $postcode = null, $country_id = null, $language = 'bg')
    {
        return $this->getCities($name, $postcode, $country_id, $language);
    }

    /**
     * @param $id
     * @return boolean|ResultSite
     */
    public function getCityById($id)
    {
        $city = false;
        if (!is_null($login = $this->getResultLogin())) {
            try {
                $city = $this->getEPSFacade()->getSiteById($id);
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }

        return $city;
    }

    /**
     * @param $name
     * @param null $postcode
     * @param null $country_id
     * @param string $language
     * @return bool|ResultSite[]
     */
    public function getCities($name, $postcode = null, $country_id = null, $language = 'bg')
    {
        $filter = [];
        if ($postcode) {
            $filter['name'] = $name;
            $filter['post_code'] = $postcode;
        } else {
            $filter['search'] = $name;
        }

        if ($country_id) {
            $filter['country_id'] = $country_id;
        }
        return $this->getCitiesByFilter($filter, $language);
    }

    /**
     * @param array $filter
     * @param string $language
     * @return bool|ResultSite[]
     */
    public function getCitiesByFilter(array $filter, $language = 'bg')
    {
        $cities = [];
        if (!empty($filter) && !is_null($login = $this->getResultLogin())) {
            $paramFilterSite = new ParamFilterSite();
            if (!empty($filter['country_id'])) {
                $paramFilterSite->setCountryId($filter['country_id']);
            }
            if (!empty($filter['name'])) {
                $paramFilterSite->setName($filter['name']);
            }
            if (!empty($filter['type'])) {
                $paramFilterSite->setType($filter['type']);
            }
            if (!empty($filter['municipality'])) {
                $paramFilterSite->setMunicipality($filter['municipality']);
            }
            if (!empty($filter['post_code'])) {
                $paramFilterSite->setPostCode($filter['post_code']);
            }
            if (!empty($filter['region'])) {
                $paramFilterSite->setRegion($filter['region']);
            }
            if (!empty($filter['search'])) {
                $paramFilterSite->setSearchString($filter['search']);
            }
            try {
                if (!empty($filter['country_id']) && count($filter) == 1) {
                    $listCities = $this->getEPSFacade()->listAllSites($this->_languageValidate($language), $filter['country_id']);
                    if ($listCities) {
                        $cities = $listCities;
                    }
                } else {
                    /** @var $listCities ResultSiteEx[] */
                    $listCities = $this->getEPSFacade()->listSitesEx($paramFilterSite, $this->_languageValidate($language));
                    if ($listCities) {
                        foreach ($listCities AS $site) {
                            if ($site->isExactMatch()) {
                                $cities[] = $site->getSite();
                            }
                        }
                    }
                }
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }

        return $cities;
    }

    /**
     * @param null $name
     * @param null $city_id
     * @param string $language
     * @return bool|ResultOfficeEx[]
     */
    public function getOffices($name = null, $city_id = null, $language = 'bg')
    {
        $offices = array();
        if (!is_null($login = $this->getResultLogin())) {
            try {
                /** @var $listOffices ResultOfficeEx[] */
                $listOffices = $this->getEPSFacade()->listOfficesEx($name, $city_id, $this->_languageValidate($language));
                if ($listOffices) {
                    $offices = $listOffices;
                }
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }

        return $offices;
    }

    /**
     * @param $id
     * @return boolean|ResultSite
     */
    public function getOfficeById($id)
    {
        $office = false;
        if (!is_null($login = $this->getResultLogin())) {
            try {
                $office = $this->getEPSFacade()->listOfficesEx($id, 68134);
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }

        return $office;
    }

    /**
     * @param null $name
     * @param null $city_id
     * @param string $language
     * @return ResultCommonObject[]
     */
    public function getCommonObjects($name = null, $city_id = null, $language = 'bg')
    {
        $offices = array();
        if (!is_null($login = $this->getResultLogin())) {
            try {
                /** @var $listOffices ResultCommonObject[] */
                $listOffices = $this->getEPSFacade()->listCommonObjects($name, $city_id, $this->_languageValidate($language));
                if ($listOffices) {
                    $offices = $listOffices;
                }
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return [];
            }
        }

        return $offices;
    }

    /**
     * @param string $language
     * @return array
     */
    public function getQuarterTypes($language = 'bg')
    {
        $quarter_types = [];
        if (!is_null($login = $this->getResultLogin())) {
            try {
                $list = $this->getEPSFacade()->listQuarterTypes($this->_languageValidate($language));
                if ($list) {
                    $quarter_types = $list;
                }
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return [];
            }
        }
        return $quarter_types;
    }

    /**
     * @param $city_id
     * @param null $name
     * @param string $language
     * @return bool|ResultQuarter[]
     */
    public function getQuarters($city_id, $name = null, $language = 'bg')
    {
        $quarters = array();
        if (!is_null($login = $this->getResultLogin())) {
            try {
                $listQuarters = $this->getEPSFacade()->listQuarters($name, $city_id, $this->_languageValidate($language));
                if ($listQuarters) {
                    $quarters = $listQuarters;
                }
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }
        return $quarters;
    }

    /**
     * @param $city_id
     * @param null $name
     * @param string $language
     * @return bool|ResultStreet[]
     */
    public function getStreets($city_id, $name = null, $language = 'bg')
    {
        $streets = array();
        if (!is_null($login = $this->getResultLogin())) {
            try {
                $listStreets = $this->getEPSFacade()->listStreets($name, $city_id, $this->_languageValidate($language));
                if ($listStreets) {
                    $streets = $listStreets;
                }
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }

        return $streets;
    }

    /**
     * @param $city_id
     * @param null $name
     * @param string $language
     * @return array
     */
    public function getBlocks($city_id, $name = null, $language = 'bg')
    {
        $blocks = array();
        if (!is_null($login = $this->getResultLogin())) {
            try {
                $listBlocks = $this->getEPSFacade()->listBlocks($name, $city_id, $this->_languageValidate($language));
                if ($listBlocks) {
                    $blocks = $listBlocks;
                }
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return [];
            }
        }
        return $blocks;
    }

    /**
     * @param $country_id
     * @param null $name
     * @return bool|ResultState[]
     */
    public function getStates($country_id, $name = null)
    {
        $states = array();
        if (!is_null($login = $this->getResultLogin())) {
            try {
                $listStates = $this->getEPSFacade()->listStates($country_id, $name);
                if ($listStates) {
                    $states = $listStates;
                }
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }
        return $states;
    }

    /**
     * @param $country_id
     * @param $name
     * @return null|ResultState
     */
    public function getStateByName($country_id, $name)
    {
        $states = $this->getStates($country_id, $name);
        if($this->getError() || count($states) != 1) {
            return null;
        }
        return array_shift($states);
    }

    /**
     * @param $service_id
     * @param null $taking_date
     * @param null $sender_site_id
     * @param null $sender_office_id
     * @return Carbon[]
     */
    public function getAllowedDaysForTaking($service_id, $taking_date = null, $sender_site_id = null, $sender_office_id = null)
    {
        $availableDates = [];
        if (!is_null($login = $this->getResultLogin())) {
            try {
                $takingTime = $this->getEPSFacade()->getAllowedDaysForTaking($service_id, $sender_site_id, $sender_office_id, $taking_date);
                if ($takingTime) {
                    foreach ($takingTime AS $time) {
                        $availableDates[] = Carbon::createFromFormat('Y-m-d\TH:i:sP', $time);
                    }
                }
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return [];
            }
        }

        return $availableDates;
    }

    /**
     * @param $service_id
     * @param null $taking_date
     * @param null $sender_site_id
     * @param null $sender_office_id
     * @return null|Carbon
     */
    public function getFirstAllowedDaysForTaking($service_id, $taking_date = null, $sender_site_id = null, $sender_office_id = null)
    {
        $allowed_days_for_taking = $this->getAllowedDaysForTaking($service_id, $taking_date, $sender_site_id, $sender_office_id);
        return array_shift($allowed_days_for_taking);
    }

    /**
     * @param $billOfLading
     * @return bool|ResultPickingExtendedInfo
     */
    public function getPickingExtendedInfo($billOfLading)
    {
        $picking_info = false;
        if (!is_null($login = $this->getResultLogin())) {
            try {
                $info = $this->getEPSFacade()->getPickingExtendedInfo((float)$billOfLading);
                if ($info) {
                    $picking_info = $info;
                }
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }
        return $picking_info;
    }

    /**
     * @return ResultSpecialDeliveryRequirement[]
     */
    public function getListSpecialDeliveryRequirements()
    {
        $client = [];
        if (!is_null($login = $this->getResultLogin())) {
            try {
                $results = $this->getEPSFacade()->listSpecialDeliveryRequirements();
                if ($results) {
                    $client = $results;
                }

            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }
        return $client;
    }

    /**
     * @return null|ResultLogin
     */
    public function getResultLogin()
    {
        return $this->resultLogin;
    }

    /**
     * @param bool $refreshSession
     * @return bool
     */
    public function isSessionActive($refreshSession = true)
    {
        if (!is_null($login = $this->getResultLogin())) {
            return $this->getEPSFacade()->isSessionActive($refreshSession);
        } else {
            return false;
        }
    }

    /**
     * @param ParamCalculation $paramCalculation
     * @param array $allowed_services
     * @return bool|ResultCalculationMS[]
     */
    public function calculate(ParamCalculation $paramCalculation, array $allowed_services = null)
    {
        $resultCalculation = [];
        if (!is_null($login = $this->getResultLogin())) {
            try {
                if (empty($allowed_services) || !is_array($allowed_services)) {
                    $services = $this->getServicesList();
                    $allowed_services = array_keys(is_array($services) ? $services : []);
                }
                /** @var $resultCalculation ResultCalculationMS[] */
                $resultCalculation = $this->getEPSFacade()->calculateMultipleServices($paramCalculation, $allowed_services);
                $error = null;
                foreach ($resultCalculation as $key => $service) {
                    if ($error = $service->getErrorDescription()) {
                        unset($resultCalculation[$key]);
                    }
                }
                if (!$resultCalculation && $error) {
                    $this->error = $error;
                }
                $resultCalculation = array_values($resultCalculation);
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }
        return $resultCalculation;
    }

    /**
     * @param $picking
     * @return bool|\ResultBOL
     */
    public function createBillOfLading($picking)
    {
        if (!is_null($login = $this->getResultLogin())) {
            try {
                return $this->getEPSFacade()->createBillOfLading($picking);
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }

        return false;
    }

    /**
     * @param $bol_id
     * @param string $type printer or label
     * @return array|bool
     */
    public function createPDF($bol_id, $type = 'printer')
    {
        if (!is_null($login = $this->getResultLogin())) {
            try {
                $paramPDF = new ParamPDF();
                if ($type == 'label') {
                    $pickingParcels = $this->getEPSFacade()->getPickingParcels((float)$bol_id);
                    $ids = array_map(function (\ResultParcelInfo $parcel) {
                        return $parcel->getParcelId();
                    }, $pickingParcels);

                    $paramPDF->setIds($ids);
                    $paramPDF->setType(ParamPDF::PARAM_PDF_TYPE_LBL);
                } else {
                    $paramPDF->setIds((float)$bol_id);
                    $paramPDF->setType(ParamPDF::PARAM_PDF_TYPE_BOL);
                }

                $paramPDF->setIncludeAutoPrintJS(true);
                return $this->getEPSFacade()->createPDF($paramPDF);
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }
        return false;
    }

    /**
     * @param $bol_id
     * @param null $cancelComment
     * @return bool
     */
    public function cancelBol($bol_id, $cancelComment = null)
    {
        if (!is_null($login = $this->getResultLogin())) {
            try {
                return $this->getEPSFacade()->invalidatePicking((float)$bol_id, $cancelComment);
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }
        return false;
    }

    /**
     * Get status for bill of landing
     * @param $parcelId
     * @return null|\CODPayment
     */
    public function codPayment($parcelId)
    {
        $info = $this->getPickingExtendedInfo($parcelId);
        if($info) {
            return $info->getCodPayment();
        }
        return null;
    }

    /**
     * @param array $bol_ids
     * @param null|Carbon $date_start
     * @param null|Carbon $date_end
     * @return array|bool
     */
    public function requestCourier(array $bol_ids, Carbon $date_start = null, Carbon $date_end = null) {
        if (!is_null($login = $this->getResultLogin())) {
            try {
                $paramOrder = new ParamOrder();
                $paramOrder->setBillOfLadingsList(array_map('floatval', $bol_ids));
                $paramOrder->setBillOfLadingsToIncludeType(ParamOrder::ORDER_BOL_INCLUDE_TYPE_EXPLICIT);

                if($date_end) {
                    if($date_start) {
                        $paramOrder->setPickupDate($date_start->format('Y-m-d'));
                    }
                    $paramOrder->setWorkingEndTime($date_end->format('Hi'));
                }

                $client_info = $this->getClientInfo();
                if($client_info) {
                    $paramOrder->setContactName($client_info->getContactName() ? : $client_info->getPartnerName());
                    /** @var $phones \ResultPhoneNumber[]*/
                    $phones = $client_info->getPhones();
                    if($phones && !empty($phones[0])) {
                        $paramPhoneNumber = new ParamPhoneNumber();
                        $paramPhoneNumber->setNumber($phones[0]->getNumber());
                        $paramOrder->setPhoneNumber($paramPhoneNumber);
                    }
                }

                return $this->getEPSFacade()->createOrder($paramOrder);
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }

        return false;
    }

    /**
     * @param $parcelId
     * @param string $language
     * @param bool $returnOnlyLastOperation
     * @return bool|ResultTrackPickingEx[]
     */
    public function trackParcel($parcelId, $language = 'bg', $returnOnlyLastOperation = false)
    {
        $tracking = $this->trackParcelMultiple([$parcelId], $language, $returnOnlyLastOperation);
        if(!empty($tracking[$parcelId])) {
            return $tracking[$parcelId];
        }
        return false;
    }

    /**
     * @param array $parcelIds
     * @param string $language
     * @param bool $returnOnlyLastOperation
     * @return bool|ResultTrackPickingEx[][]
     */
    public function trackParcelMultiple(array $parcelIds, $language = 'bg', $returnOnlyLastOperation = false)
    {
        $tracking = array();
        if (!is_null($login = $this->getResultLogin())) {
            try {
                $parcelIds = array_map('floatval', $parcelIds);
                /** @var $listTrackParcel ResultTrackPickingEx[] */
                $listTrackParcel = $this->getEPSFacade()->trackParcelMultiple($parcelIds, $this->_languageValidate($language), $returnOnlyLastOperation);
                if ($listTrackParcel) {
                    foreach ($listTrackParcel AS $track) {
                        $tracking[(string)$track->getBarcode()][] = $track;
                    }
                }
            } catch (Exception $e) {
                $this->error = $e->getMessage();
                return false;
            }
        }

        return $tracking;
    }

    /**
     * @param $postCode
     * @param $country_id
     * @param null $site_id
     * @return bool
     */
    public function validatePostCode($postCode, $country_id, $site_id = null)
    {
        try {
            return $this->getResultLogin() && $this->getEPSFacade()->validatePostCode($country_id, $postCode, $site_id);
        } catch (ClientException $ce) {
            $this->error = $ce->getMessage();
            return false;
        } catch (ServerException $se) {
            $this->error = $se->getMessage();
            return false;
        } catch (Exception $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    /**
     * @param ParamAddress $address
     * @param int $validationMode (validationMode = 0 (default) - Extended validation w/o GIS info (address uniqueness is not verified); validationMode = 2 - basic validation (the same as address validation in createBillOfLading)
     * @return bool
     */
    public function validateAddress(ParamAddress $address, $validationMode = 0)
    {
        try {
            return $this->getEPSFacade()->validateAddress($address, $validationMode);
        } catch (Exception $e) {
            $this->error = $e->getMessage();
            return false;
        }
    }

    /**
     * @param $username
     * @param $password
     * @return bool
     */
    public function validateCredentials($username, $password) {
        $instance = new static($username, $password);
        $result = $instance->getResultLogin();
        if(!$result) {
            $this->error = $instance->getError();
        }
        return (bool)$result;
    }

    /**
     * @return bool
     */
    public function isAvailableMoneyTransfer() {
        return in_array('101', $this->getAdditionalUserParams());
    }

    /**
     * @return array
     */
    public function getAdditionalUserParams() {
        try {
            return $this->ePSFacade->getAdditionalUserParams(Carbon::now()->timestamp);
        } catch (ClientException $ce) {
            return [];
        } catch (ServerException $se) {
            return [];
        }
    }

    /**
     * @param string $username
     * @return Client
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $password
     * @return Client
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $error
     * @return $this
     */
    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @return EPSFacade
     */
    public function getEPSFacade()
    {
        return $this->ePSFacade;
    }

    /**
     * @param $language
     * @return string
     */
    protected function _languageValidate($language)
    {
        if (!in_array(strtolower($language), ['bg', 'en'])) {
            $language = 'en';
        }
        return strtoupper($language);
    }
}