<?php
/**
 * File for class SpeedyStructListSites
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructListSites originally named listSites
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructListSites extends SpeedyWsdlClass
{
    /**
     * The sessionId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sessionId;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $type;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $name;
    /**
     * The language
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyEnumParamLanguage
     */
    public $language;
    /**
     * Constructor method for listSites
     * @see parent::__construct()
     * @param string $_sessionId
     * @param string $_type
     * @param string $_name
     * @param SpeedyEnumParamLanguage $_language
     * @return SpeedyStructListSites
     */
    public function __construct($_sessionId = NULL,$_type = NULL,$_name = NULL,$_language = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'type'=>$_type,'name'=>$_name,'language'=>$_language),false);
    }
    /**
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $_sessionId the sessionId
     * @return string
     */
    public function setSessionId($_sessionId)
    {
        return ($this->sessionId = $_sessionId);
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
     * Get language value
     * @return SpeedyEnumParamLanguage|null
     */
    public function getLanguage()
    {
        return $this->language;
    }
    /**
     * Set language value
     * @uses SpeedyEnumParamLanguage::valueIsValid()
     * @param SpeedyEnumParamLanguage $_language the language
     * @return SpeedyEnumParamLanguage
     */
    public function setLanguage($_language)
    {
        if(!SpeedyEnumParamLanguage::valueIsValid($_language))
        {
            return false;
        }
        return ($this->language = $_language);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructListSites
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
