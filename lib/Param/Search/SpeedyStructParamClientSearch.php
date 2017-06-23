<?php
/**
 * File for class SpeedyStructParamClientSearch
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructParamClientSearch originally named paramClientSearch
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructParamClientSearch extends SpeedyWsdlClass
{
    /**
     * The clientId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $clientId;
    /**
     * The clientName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $clientName;
    /**
     * The objectName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $objectName;
    /**
     * The phone
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $phone;
    /**
     * The siteId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $siteId;
    /**
     * The userDefTag
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $userDefTag;
    /**
     * Constructor method for paramClientSearch
     * @see parent::__construct()
     * @param long $_clientId
     * @param string $_clientName
     * @param string $_objectName
     * @param string $_phone
     * @param long $_siteId
     * @param string $_userDefTag
     * @return SpeedyStructParamClientSearch
     */
    public function __construct($_clientId = NULL,$_clientName = NULL,$_objectName = NULL,$_phone = NULL,$_siteId = NULL,$_userDefTag = NULL)
    {
        parent::__construct(array('clientId'=>$_clientId,'clientName'=>$_clientName,'objectName'=>$_objectName,'phone'=>$_phone,'siteId'=>$_siteId,'userDefTag'=>$_userDefTag),false);
    }
    /**
     * Get clientId value
     * @return long|null
     */
    public function getClientId()
    {
        return $this->clientId;
    }
    /**
     * Set clientId value
     * @param long $_clientId the clientId
     * @return long
     */
    public function setClientId($_clientId)
    {
        return ($this->clientId = $_clientId);
    }
    /**
     * Get clientName value
     * @return string|null
     */
    public function getClientName()
    {
        return $this->clientName;
    }
    /**
     * Set clientName value
     * @param string $_clientName the clientName
     * @return string
     */
    public function setClientName($_clientName)
    {
        return ($this->clientName = $_clientName);
    }
    /**
     * Get objectName value
     * @return string|null
     */
    public function getObjectName()
    {
        return $this->objectName;
    }
    /**
     * Set objectName value
     * @param string $_objectName the objectName
     * @return string
     */
    public function setObjectName($_objectName)
    {
        return ($this->objectName = $_objectName);
    }
    /**
     * Get phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $_phone the phone
     * @return string
     */
    public function setPhone($_phone)
    {
        return ($this->phone = $_phone);
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
     * Get userDefTag value
     * @return string|null
     */
    public function getUserDefTag()
    {
        return $this->userDefTag;
    }
    /**
     * Set userDefTag value
     * @param string $_userDefTag the userDefTag
     * @return string
     */
    public function setUserDefTag($_userDefTag)
    {
        return ($this->userDefTag = $_userDefTag);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructParamClientSearch
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
