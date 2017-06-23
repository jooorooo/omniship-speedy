<?php
/**
 * File for class SpeedyStructParamAddress
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructParamAddress originally named paramAddress
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructParamAddress extends SpeedyWsdlClass
{
    /**
     * The addressNote
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $addressNote;
    /**
     * The apartmentNo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $apartmentNo;
    /**
     * The blockNo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $blockNo;
    /**
     * The commonObjectId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $commonObjectId;
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
     * The countryId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $countryId;
    /**
     * The entranceNo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $entranceNo;
    /**
     * The floorNo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $floorNo;
    /**
     * The frnAddressLine1
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $frnAddressLine1;
    /**
     * The frnAddressLine2
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $frnAddressLine2;
    /**
     * The postCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $postCode;
    /**
     * The quarterId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $quarterId;
    /**
     * The quarterName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $quarterName;
    /**
     * The quarterType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $quarterType;
    /**
     * The serializedAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $serializedAddress;
    /**
     * The siteId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $siteId;
    /**
     * The siteName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $siteName;
    /**
     * The stateId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $stateId;
    /**
     * The streetId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $streetId;
    /**
     * The streetName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $streetName;
    /**
     * The streetNo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $streetNo;
    /**
     * The streetType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $streetType;
    /**
     * Constructor method for paramAddress
     * @see parent::__construct()
     * @param string $_addressNote
     * @param string $_apartmentNo
     * @param string $_blockNo
     * @param long $_commonObjectId
     * @param double $_coordX
     * @param double $_coordY
     * @param long $_countryId
     * @param string $_entranceNo
     * @param string $_floorNo
     * @param string $_frnAddressLine1
     * @param string $_frnAddressLine2
     * @param string $_postCode
     * @param long $_quarterId
     * @param string $_quarterName
     * @param string $_quarterType
     * @param string $_serializedAddress
     * @param long $_siteId
     * @param string $_siteName
     * @param string $_stateId
     * @param long $_streetId
     * @param string $_streetName
     * @param string $_streetNo
     * @param string $_streetType
     * @return SpeedyStructParamAddress
     */
    public function __construct($_addressNote = NULL,$_apartmentNo = NULL,$_blockNo = NULL,$_commonObjectId = NULL,$_coordX = NULL,$_coordY = NULL,$_countryId = NULL,$_entranceNo = NULL,$_floorNo = NULL,$_frnAddressLine1 = NULL,$_frnAddressLine2 = NULL,$_postCode = NULL,$_quarterId = NULL,$_quarterName = NULL,$_quarterType = NULL,$_serializedAddress = NULL,$_siteId = NULL,$_siteName = NULL,$_stateId = NULL,$_streetId = NULL,$_streetName = NULL,$_streetNo = NULL,$_streetType = NULL)
    {
        parent::__construct(array('addressNote'=>$_addressNote,'apartmentNo'=>$_apartmentNo,'blockNo'=>$_blockNo,'commonObjectId'=>$_commonObjectId,'coordX'=>$_coordX,'coordY'=>$_coordY,'countryId'=>$_countryId,'entranceNo'=>$_entranceNo,'floorNo'=>$_floorNo,'frnAddressLine1'=>$_frnAddressLine1,'frnAddressLine2'=>$_frnAddressLine2,'postCode'=>$_postCode,'quarterId'=>$_quarterId,'quarterName'=>$_quarterName,'quarterType'=>$_quarterType,'serializedAddress'=>$_serializedAddress,'siteId'=>$_siteId,'siteName'=>$_siteName,'stateId'=>$_stateId,'streetId'=>$_streetId,'streetName'=>$_streetName,'streetNo'=>$_streetNo,'streetType'=>$_streetType),false);
    }
    /**
     * Get addressNote value
     * @return string|null
     */
    public function getAddressNote()
    {
        return $this->addressNote;
    }
    /**
     * Set addressNote value
     * @param string $_addressNote the addressNote
     * @return string
     */
    public function setAddressNote($_addressNote)
    {
        return ($this->addressNote = $_addressNote);
    }
    /**
     * Get apartmentNo value
     * @return string|null
     */
    public function getApartmentNo()
    {
        return $this->apartmentNo;
    }
    /**
     * Set apartmentNo value
     * @param string $_apartmentNo the apartmentNo
     * @return string
     */
    public function setApartmentNo($_apartmentNo)
    {
        return ($this->apartmentNo = $_apartmentNo);
    }
    /**
     * Get blockNo value
     * @return string|null
     */
    public function getBlockNo()
    {
        return $this->blockNo;
    }
    /**
     * Set blockNo value
     * @param string $_blockNo the blockNo
     * @return string
     */
    public function setBlockNo($_blockNo)
    {
        return ($this->blockNo = $_blockNo);
    }
    /**
     * Get commonObjectId value
     * @return long|null
     */
    public function getCommonObjectId()
    {
        return $this->commonObjectId;
    }
    /**
     * Set commonObjectId value
     * @param long $_commonObjectId the commonObjectId
     * @return long
     */
    public function setCommonObjectId($_commonObjectId)
    {
        return ($this->commonObjectId = $_commonObjectId);
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
     * Get entranceNo value
     * @return string|null
     */
    public function getEntranceNo()
    {
        return $this->entranceNo;
    }
    /**
     * Set entranceNo value
     * @param string $_entranceNo the entranceNo
     * @return string
     */
    public function setEntranceNo($_entranceNo)
    {
        return ($this->entranceNo = $_entranceNo);
    }
    /**
     * Get floorNo value
     * @return string|null
     */
    public function getFloorNo()
    {
        return $this->floorNo;
    }
    /**
     * Set floorNo value
     * @param string $_floorNo the floorNo
     * @return string
     */
    public function setFloorNo($_floorNo)
    {
        return ($this->floorNo = $_floorNo);
    }
    /**
     * Get frnAddressLine1 value
     * @return string|null
     */
    public function getFrnAddressLine1()
    {
        return $this->frnAddressLine1;
    }
    /**
     * Set frnAddressLine1 value
     * @param string $_frnAddressLine1 the frnAddressLine1
     * @return string
     */
    public function setFrnAddressLine1($_frnAddressLine1)
    {
        return ($this->frnAddressLine1 = $_frnAddressLine1);
    }
    /**
     * Get frnAddressLine2 value
     * @return string|null
     */
    public function getFrnAddressLine2()
    {
        return $this->frnAddressLine2;
    }
    /**
     * Set frnAddressLine2 value
     * @param string $_frnAddressLine2 the frnAddressLine2
     * @return string
     */
    public function setFrnAddressLine2($_frnAddressLine2)
    {
        return ($this->frnAddressLine2 = $_frnAddressLine2);
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
     * Get quarterId value
     * @return long|null
     */
    public function getQuarterId()
    {
        return $this->quarterId;
    }
    /**
     * Set quarterId value
     * @param long $_quarterId the quarterId
     * @return long
     */
    public function setQuarterId($_quarterId)
    {
        return ($this->quarterId = $_quarterId);
    }
    /**
     * Get quarterName value
     * @return string|null
     */
    public function getQuarterName()
    {
        return $this->quarterName;
    }
    /**
     * Set quarterName value
     * @param string $_quarterName the quarterName
     * @return string
     */
    public function setQuarterName($_quarterName)
    {
        return ($this->quarterName = $_quarterName);
    }
    /**
     * Get quarterType value
     * @return string|null
     */
    public function getQuarterType()
    {
        return $this->quarterType;
    }
    /**
     * Set quarterType value
     * @param string $_quarterType the quarterType
     * @return string
     */
    public function setQuarterType($_quarterType)
    {
        return ($this->quarterType = $_quarterType);
    }
    /**
     * Get serializedAddress value
     * @return string|null
     */
    public function getSerializedAddress()
    {
        return $this->serializedAddress;
    }
    /**
     * Set serializedAddress value
     * @param string $_serializedAddress the serializedAddress
     * @return string
     */
    public function setSerializedAddress($_serializedAddress)
    {
        return ($this->serializedAddress = $_serializedAddress);
    }
    /**
     * Get siteId value
     * @return long|null
     */
    public function getSiteId()
    {
        return $this->siteId;
    }
    /**
     * Set siteId value
     * @param long $_siteId the siteId
     * @return long
     */
    public function setSiteId($_siteId)
    {
        return ($this->siteId = $_siteId);
    }
    /**
     * Get siteName value
     * @return string|null
     */
    public function getSiteName()
    {
        return $this->siteName;
    }
    /**
     * Set siteName value
     * @param string $_siteName the siteName
     * @return string
     */
    public function setSiteName($_siteName)
    {
        return ($this->siteName = $_siteName);
    }
    /**
     * Get stateId value
     * @return string|null
     */
    public function getStateId()
    {
        return $this->stateId;
    }
    /**
     * Set stateId value
     * @param string $_stateId the stateId
     * @return string
     */
    public function setStateId($_stateId)
    {
        return ($this->stateId = $_stateId);
    }
    /**
     * Get streetId value
     * @return long|null
     */
    public function getStreetId()
    {
        return $this->streetId;
    }
    /**
     * Set streetId value
     * @param long $_streetId the streetId
     * @return long
     */
    public function setStreetId($_streetId)
    {
        return ($this->streetId = $_streetId);
    }
    /**
     * Get streetName value
     * @return string|null
     */
    public function getStreetName()
    {
        return $this->streetName;
    }
    /**
     * Set streetName value
     * @param string $_streetName the streetName
     * @return string
     */
    public function setStreetName($_streetName)
    {
        return ($this->streetName = $_streetName);
    }
    /**
     * Get streetNo value
     * @return string|null
     */
    public function getStreetNo()
    {
        return $this->streetNo;
    }
    /**
     * Set streetNo value
     * @param string $_streetNo the streetNo
     * @return string
     */
    public function setStreetNo($_streetNo)
    {
        return ($this->streetNo = $_streetNo);
    }
    /**
     * Get streetType value
     * @return string|null
     */
    public function getStreetType()
    {
        return $this->streetType;
    }
    /**
     * Set streetType value
     * @param string $_streetType the streetType
     * @return string
     */
    public function setStreetType($_streetType)
    {
        return ($this->streetType = $_streetType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructParamAddress
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
