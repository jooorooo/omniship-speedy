<?php
/**
 * File for class SpeedyStructTrackParcel
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructTrackParcel originally named trackParcel
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructTrackParcel extends SpeedyWsdlClass
{
    /**
     * The sessionId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sessionId;
    /**
     * The parcelId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $parcelId;
    /**
     * The language
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyEnumParamLanguage
     */
    public $language;
    /**
     * The returnOnlyLastOperation
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $returnOnlyLastOperation;
    /**
     * Constructor method for trackParcel
     * @see parent::__construct()
     * @param string $_sessionId
     * @param string $_parcelId
     * @param SpeedyEnumParamLanguage $_language
     * @param boolean $_returnOnlyLastOperation
     * @return SpeedyStructTrackParcel
     */
    public function __construct($_sessionId = NULL,$_parcelId = NULL,$_language = NULL,$_returnOnlyLastOperation = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'parcelId'=>$_parcelId,'language'=>$_language,'returnOnlyLastOperation'=>$_returnOnlyLastOperation),false);
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
     * Get parcelId value
     * @return string|null
     */
    public function getParcelId()
    {
        return $this->parcelId;
    }
    /**
     * Set parcelId value
     * @param string $_parcelId the parcelId
     * @return string
     */
    public function setParcelId($_parcelId)
    {
        return ($this->parcelId = $_parcelId);
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
     * Get returnOnlyLastOperation value
     * @return boolean|null
     */
    public function getReturnOnlyLastOperation()
    {
        return $this->returnOnlyLastOperation;
    }
    /**
     * Set returnOnlyLastOperation value
     * @param boolean $_returnOnlyLastOperation the returnOnlyLastOperation
     * @return boolean
     */
    public function setReturnOnlyLastOperation($_returnOnlyLastOperation)
    {
        return ($this->returnOnlyLastOperation = $_returnOnlyLastOperation);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructTrackParcel
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
