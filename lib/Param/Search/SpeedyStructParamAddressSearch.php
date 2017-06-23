<?php
/**
 * File for class SpeedyStructParamAddressSearch
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructParamAddressSearch originally named paramAddressSearch
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructParamAddressSearch extends SpeedyWsdlClass
{
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
     * The entranceNo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $entranceNo;
    /**
     * The quarterId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $quarterId;
    /**
     * The siteId
     * @var long
     */
    public $siteId;
    /**
     * The streetId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $streetId;
    /**
     * The streetNo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $streetNo;
    /**
     * The returnCityCenterIfNoAddress
     * @var boolean
     */
    public $returnCityCenterIfNoAddress;
    /**
     * Constructor method for paramAddressSearch
     * @see parent::__construct()
     * @param string $_blockNo
     * @param long $_commonObjectId
     * @param string $_entranceNo
     * @param long $_quarterId
     * @param long $_siteId
     * @param long $_streetId
     * @param string $_streetNo
     * @param boolean $_returnCityCenterIfNoAddress
     * @return SpeedyStructParamAddressSearch
     */
    public function __construct($_blockNo = NULL,$_commonObjectId = NULL,$_entranceNo = NULL,$_quarterId = NULL,$_siteId = NULL,$_streetId = NULL,$_streetNo = NULL,$_returnCityCenterIfNoAddress = NULL)
    {
        parent::__construct(array('blockNo'=>$_blockNo,'commonObjectId'=>$_commonObjectId,'entranceNo'=>$_entranceNo,'quarterId'=>$_quarterId,'siteId'=>$_siteId,'streetId'=>$_streetId,'streetNo'=>$_streetNo,'returnCityCenterIfNoAddress'=>$_returnCityCenterIfNoAddress),false);
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
     * Get returnCityCenterIfNoAddress value
     * @return boolean|null
     */
    public function getReturnCityCenterIfNoAddress()
    {
        return $this->returnCityCenterIfNoAddress;
    }
    /**
     * Set returnCityCenterIfNoAddress value
     * @param boolean $_returnCityCenterIfNoAddress the returnCityCenterIfNoAddress
     * @return boolean
     */
    public function setReturnCityCenterIfNoAddress($_returnCityCenterIfNoAddress)
    {
        return ($this->returnCityCenterIfNoAddress = $_returnCityCenterIfNoAddress);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructParamAddressSearch
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
