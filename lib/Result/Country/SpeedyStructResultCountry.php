<?php
/**
 * File for class SpeedyStructResultCountry
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultCountry originally named resultCountry
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultCountry extends SpeedyWsdlClass
{
    /**
     * The activeCurrencyCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $activeCurrencyCode;
    /**
     * The countryId
     * @var long
     */
    public $countryId;
    /**
     * The isoAlpha2
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $isoAlpha2;
    /**
     * The isoAlpha3
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $isoAlpha3;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $name;
    /**
     * The postCodeFormat
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $postCodeFormat;
    /**
     * The requirePostCode
     * @var boolean
     */
    public $requirePostCode;
    /**
     * The requireState
     * @var boolean
     */
    public $requireState;
    /**
     * The siteNomen
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $siteNomen;
    /**
     * Constructor method for resultCountry
     * @see parent::__construct()
     * @param string $_activeCurrencyCode
     * @param long $_countryId
     * @param string $_isoAlpha2
     * @param string $_isoAlpha3
     * @param string $_name
     * @param string $_postCodeFormat
     * @param boolean $_requirePostCode
     * @param boolean $_requireState
     * @param int $_siteNomen
     * @return SpeedyStructResultCountry
     */
    public function __construct($_activeCurrencyCode = NULL,$_countryId = NULL,$_isoAlpha2 = NULL,$_isoAlpha3 = NULL,$_name = NULL,$_postCodeFormat = NULL,$_requirePostCode = NULL,$_requireState = NULL,$_siteNomen = NULL)
    {
        parent::__construct(array('activeCurrencyCode'=>$_activeCurrencyCode,'countryId'=>$_countryId,'isoAlpha2'=>$_isoAlpha2,'isoAlpha3'=>$_isoAlpha3,'name'=>$_name,'postCodeFormat'=>$_postCodeFormat,'requirePostCode'=>$_requirePostCode,'requireState'=>$_requireState,'siteNomen'=>$_siteNomen),false);
    }
    /**
     * Get activeCurrencyCode value
     * @return string|null
     */
    public function getActiveCurrencyCode()
    {
        return $this->activeCurrencyCode;
    }
    /**
     * Set activeCurrencyCode value
     * @param string $_activeCurrencyCode the activeCurrencyCode
     * @return string
     */
    public function setActiveCurrencyCode($_activeCurrencyCode)
    {
        return ($this->activeCurrencyCode = $_activeCurrencyCode);
    }
    /**
     * Get countryId value
     * @return long|null
     */
    public function getCountryId()
    {
        return $this->countryId;
    }
    /**
     * Set countryId value
     * @param long $_countryId the countryId
     * @return long
     */
    public function setCountryId($_countryId)
    {
        return ($this->countryId = $_countryId);
    }
    /**
     * Get isoAlpha2 value
     * @return string|null
     */
    public function getIsoAlpha2()
    {
        return $this->isoAlpha2;
    }
    /**
     * Set isoAlpha2 value
     * @param string $_isoAlpha2 the isoAlpha2
     * @return string
     */
    public function setIsoAlpha2($_isoAlpha2)
    {
        return ($this->isoAlpha2 = $_isoAlpha2);
    }
    /**
     * Get isoAlpha3 value
     * @return string|null
     */
    public function getIsoAlpha3()
    {
        return $this->isoAlpha3;
    }
    /**
     * Set isoAlpha3 value
     * @param string $_isoAlpha3 the isoAlpha3
     * @return string
     */
    public function setIsoAlpha3($_isoAlpha3)
    {
        return ($this->isoAlpha3 = $_isoAlpha3);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $_name the name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->name = $_name);
    }
    /**
     * Get postCodeFormat value
     * @return string|null
     */
    public function getPostCodeFormat()
    {
        return $this->postCodeFormat;
    }
    /**
     * Set postCodeFormat value
     * @param string $_postCodeFormat the postCodeFormat
     * @return string
     */
    public function setPostCodeFormat($_postCodeFormat)
    {
        return ($this->postCodeFormat = $_postCodeFormat);
    }
    /**
     * Get requirePostCode value
     * @return boolean|null
     */
    public function getRequirePostCode()
    {
        return $this->requirePostCode;
    }
    /**
     * Set requirePostCode value
     * @param boolean $_requirePostCode the requirePostCode
     * @return boolean
     */
    public function setRequirePostCode($_requirePostCode)
    {
        return ($this->requirePostCode = $_requirePostCode);
    }
    /**
     * Get requireState value
     * @return boolean|null
     */
    public function getRequireState()
    {
        return $this->requireState;
    }
    /**
     * Set requireState value
     * @param boolean $_requireState the requireState
     * @return boolean
     */
    public function setRequireState($_requireState)
    {
        return ($this->requireState = $_requireState);
    }
    /**
     * Get siteNomen value
     * @return int|null
     */
    public function getSiteNomen()
    {
        return $this->siteNomen;
    }
    /**
     * Set siteNomen value
     * @param int $_siteNomen the siteNomen
     * @return int
     */
    public function setSiteNomen($_siteNomen)
    {
        return ($this->siteNomen = $_siteNomen);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultCountry
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
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
