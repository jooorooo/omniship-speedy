<?php
/**
 * File for class SpeedyStructParamFilterCountry
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructParamFilterCountry originally named paramFilterCountry
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructParamFilterCountry extends SpeedyWsdlClass
{
    /**
     * The countryId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
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
     * The searchString
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $searchString;
    /**
     * Constructor method for paramFilterCountry
     * @see parent::__construct()
     * @param long $_countryId
     * @param string $_isoAlpha2
     * @param string $_isoAlpha3
     * @param string $_name
     * @param string $_searchString
     * @return SpeedyStructParamFilterCountry
     */
    public function __construct($_countryId = NULL,$_isoAlpha2 = NULL,$_isoAlpha3 = NULL,$_name = NULL,$_searchString = NULL)
    {
        parent::__construct(array('countryId'=>$_countryId,'isoAlpha2'=>$_isoAlpha2,'isoAlpha3'=>$_isoAlpha3,'name'=>$_name,'searchString'=>$_searchString),false);
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
     * Get searchString value
     * @return string|null
     */
    public function getSearchString()
    {
        return $this->searchString;
    }
    /**
     * Set searchString value
     * @param string $_searchString the searchString
     * @return string
     */
    public function setSearchString($_searchString)
    {
        return ($this->searchString = $_searchString);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructParamFilterCountry
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
