<?php
/**
 * File for class SpeedyStructParamFilterSite
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructParamFilterSite originally named paramFilterSite
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructParamFilterSite extends SpeedyWsdlClass
{
    /**
     * The countryId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $countryId;
    /**
     * The municipality
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $municipality;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $name;
    /**
     * The postCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $postCode;
    /**
     * The region
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $region;
    /**
     * The searchString
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $searchString;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $type;
    /**
     * Constructor method for paramFilterSite
     * @see parent::__construct()
     * @param long $_countryId
     * @param string $_municipality
     * @param string $_name
     * @param string $_postCode
     * @param string $_region
     * @param string $_searchString
     * @param string $_type
     * @return SpeedyStructParamFilterSite
     */
    public function __construct($_countryId = NULL,$_municipality = NULL,$_name = NULL,$_postCode = NULL,$_region = NULL,$_searchString = NULL,$_type = NULL)
    {
        parent::__construct(array('countryId'=>$_countryId,'municipality'=>$_municipality,'name'=>$_name,'postCode'=>$_postCode,'region'=>$_region,'searchString'=>$_searchString,'type'=>$_type),false);
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
     * Get municipality value
     * @return string|null
     */
    public function getMunicipality()
    {
        return $this->municipality;
    }
    /**
     * Set municipality value
     * @param string $_municipality the municipality
     * @return string
     */
    public function setMunicipality($_municipality)
    {
        return ($this->municipality = $_municipality);
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
     * Get postCode value
     * @return string|null
     */
    public function getPostCode()
    {
        return $this->postCode;
    }
    /**
     * Set postCode value
     * @param string $_postCode the postCode
     * @return string
     */
    public function setPostCode($_postCode)
    {
        return ($this->postCode = $_postCode);
    }
    /**
     * Get region value
     * @return string|null
     */
    public function getRegion()
    {
        return $this->region;
    }
    /**
     * Set region value
     * @param string $_region the region
     * @return string
     */
    public function setRegion($_region)
    {
        return ($this->region = $_region);
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $_type the type
     * @return string
     */
    public function setType($_type)
    {
        return ($this->type = $_type);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructParamFilterSite
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
