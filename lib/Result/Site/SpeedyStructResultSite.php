<?php
/**
 * File for class SpeedyStructResultSite
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultSite originally named resultSite
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultSite extends SpeedyWsdlClass
{
    /**
     * The addrNomen
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyEnumAddrNomen
     */
    public $addrNomen;
    /**
     * The id
     * @var long
     */
    public $id;
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
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $type;
    /**
     * The countryId
     * @var long
     */
    public $countryId;
    /**
     * The servingOfficeId
     * @var long
     */
    public $servingOfficeId;
    /**
     * The coordX
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $coordX;
    /**
     * The coordY
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $coordY;
    /**
     * The coordType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $coordType;
    /**
     * The servingDays
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $servingDays;
    /**
     * Constructor method for resultSite
     * @see parent::__construct()
     * @param SpeedyEnumAddrNomen $_addrNomen
     * @param long $_id
     * @param string $_municipality
     * @param string $_name
     * @param string $_postCode
     * @param string $_region
     * @param string $_type
     * @param long $_countryId
     * @param long $_servingOfficeId
     * @param double $_coordX
     * @param double $_coordY
     * @param int $_coordType
     * @param string $_servingDays
     * @return SpeedyStructResultSite
     */
    public function __construct($_addrNomen = NULL,$_id = NULL,$_municipality = NULL,$_name = NULL,$_postCode = NULL,$_region = NULL,$_type = NULL,$_countryId = NULL,$_servingOfficeId = NULL,$_coordX = NULL,$_coordY = NULL,$_coordType = NULL,$_servingDays = NULL)
    {
        parent::__construct(array('addrNomen'=>$_addrNomen,'id'=>$_id,'municipality'=>$_municipality,'name'=>$_name,'postCode'=>$_postCode,'region'=>$_region,'type'=>$_type,'countryId'=>$_countryId,'servingOfficeId'=>$_servingOfficeId,'coordX'=>$_coordX,'coordY'=>$_coordY,'coordType'=>$_coordType,'servingDays'=>$_servingDays),false);
    }
    /**
     * Get addrNomen value
     * @return SpeedyEnumAddrNomen|null
     */
    public function getAddrNomen()
    {
        return $this->addrNomen;
    }
    /**
     * Set addrNomen value
     * @uses SpeedyEnumAddrNomen::valueIsValid()
     * @param SpeedyEnumAddrNomen $_addrNomen the addrNomen
     * @return SpeedyEnumAddrNomen
     */
    public function setAddrNomen($_addrNomen)
    {
        if(!SpeedyEnumAddrNomen::valueIsValid($_addrNomen))
        {
            return false;
        }
        return ($this->addrNomen = $_addrNomen);
    }
    /**
     * Get id value
     * @return long|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param long $_id the id
     * @return long
     */
    public function setId($_id)
    {
        return ($this->id = $_id);
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
     * Get servingOfficeId value
     * @return long|null
     */
    public function getServingOfficeId()
    {
        return $this->servingOfficeId;
    }
    /**
     * Set servingOfficeId value
     * @param long $_servingOfficeId the servingOfficeId
     * @return long
     */
    public function setServingOfficeId($_servingOfficeId)
    {
        return ($this->servingOfficeId = $_servingOfficeId);
    }
    /**
     * Get coordX value
     * @return double|null
     */
    public function getCoordX()
    {
        return $this->coordX;
    }
    /**
     * Set coordX value
     * @param double $_coordX the coordX
     * @return double
     */
    public function setCoordX($_coordX)
    {
        return ($this->coordX = $_coordX);
    }
    /**
     * Get coordY value
     * @return double|null
     */
    public function getCoordY()
    {
        return $this->coordY;
    }
    /**
     * Set coordY value
     * @param double $_coordY the coordY
     * @return double
     */
    public function setCoordY($_coordY)
    {
        return ($this->coordY = $_coordY);
    }
    /**
     * Get coordType value
     * @return int|null
     */
    public function getCoordType()
    {
        return $this->coordType;
    }
    /**
     * Set coordType value
     * @param int $_coordType the coordType
     * @return int
     */
    public function setCoordType($_coordType)
    {
        return ($this->coordType = $_coordType);
    }
    /**
     * Get servingDays value
     * @return string|null
     */
    public function getServingDays()
    {
        return $this->servingDays;
    }
    /**
     * Set servingDays value
     * @param string $_servingDays the servingDays
     * @return string
     */
    public function setServingDays($_servingDays)
    {
        return ($this->servingDays = $_servingDays);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultSite
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
