<?php
/**
 * File for class SpeedyStructListServicesForSites
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructListServicesForSites originally named listServicesForSites
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructListServicesForSites extends SpeedyWsdlClass
{
    /**
     * The sessionId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sessionId;
    /**
     * The date
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $date;
    /**
     * The senderSiteId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $senderSiteId;
    /**
     * The receiverSiteId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $receiverSiteId;
    /**
     * The senderCountryId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $senderCountryId;
    /**
     * The senderPostCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $senderPostCode;
    /**
     * The receiverCountryId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $receiverCountryId;
    /**
     * The receiverPostCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $receiverPostCode;
    /**
     * The language
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyEnumParamLanguage
     */
    public $language;
    /**
     * The senderId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $senderId;
    /**
     * The receiverId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $receiverId;
    /**
     * The senderOfficeId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $senderOfficeId;
    /**
     * The receiverOfficeId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $receiverOfficeId;
    /**
     * Constructor method for listServicesForSites
     * @see parent::__construct()
     * @param string $_sessionId
     * @param dateTime $_date
     * @param long $_senderSiteId
     * @param long $_receiverSiteId
     * @param long $_senderCountryId
     * @param string $_senderPostCode
     * @param long $_receiverCountryId
     * @param string $_receiverPostCode
     * @param SpeedyEnumParamLanguage $_language
     * @param long $_senderId
     * @param long $_receiverId
     * @param long $_senderOfficeId
     * @param long $_receiverOfficeId
     * @return SpeedyStructListServicesForSites
     */
    public function __construct($_sessionId = NULL,$_date = NULL,$_senderSiteId = NULL,$_receiverSiteId = NULL,$_senderCountryId = NULL,$_senderPostCode = NULL,$_receiverCountryId = NULL,$_receiverPostCode = NULL,$_language = NULL,$_senderId = NULL,$_receiverId = NULL,$_senderOfficeId = NULL,$_receiverOfficeId = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'date'=>$_date,'senderSiteId'=>$_senderSiteId,'receiverSiteId'=>$_receiverSiteId,'senderCountryId'=>$_senderCountryId,'senderPostCode'=>$_senderPostCode,'receiverCountryId'=>$_receiverCountryId,'receiverPostCode'=>$_receiverPostCode,'language'=>$_language,'senderId'=>$_senderId,'receiverId'=>$_receiverId,'senderOfficeId'=>$_senderOfficeId,'receiverOfficeId'=>$_receiverOfficeId),false);
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
     * Get date value
     * @return dateTime|null
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * Set date value
     * @param dateTime $_date the date
     * @return dateTime
     */
    public function setDate($_date)
    {
        return ($this->date = $_date);
    }
    /**
     * Get senderSiteId value
     * @return long|null
     */
    public function getSenderSiteId()
    {
        return $this->senderSiteId;
    }
    /**
     * Set senderSiteId value
     * @param long $_senderSiteId the senderSiteId
     * @return long
     */
    public function setSenderSiteId($_senderSiteId)
    {
        return ($this->senderSiteId = $_senderSiteId);
    }
    /**
     * Get receiverSiteId value
     * @return long|null
     */
    public function getReceiverSiteId()
    {
        return $this->receiverSiteId;
    }
    /**
     * Set receiverSiteId value
     * @param long $_receiverSiteId the receiverSiteId
     * @return long
     */
    public function setReceiverSiteId($_receiverSiteId)
    {
        return ($this->receiverSiteId = $_receiverSiteId);
    }
    /**
     * Get senderCountryId value
     * @return long|null
     */
    public function getSenderCountryId()
    {
        return $this->senderCountryId;
    }
    /**
     * Set senderCountryId value
     * @param long $_senderCountryId the senderCountryId
     * @return long
     */
    public function setSenderCountryId($_senderCountryId)
    {
        return ($this->senderCountryId = $_senderCountryId);
    }
    /**
     * Get senderPostCode value
     * @return string|null
     */
    public function getSenderPostCode()
    {
        return $this->senderPostCode;
    }
    /**
     * Set senderPostCode value
     * @param string $_senderPostCode the senderPostCode
     * @return string
     */
    public function setSenderPostCode($_senderPostCode)
    {
        return ($this->senderPostCode = $_senderPostCode);
    }
    /**
     * Get receiverCountryId value
     * @return long|null
     */
    public function getReceiverCountryId()
    {
        return $this->receiverCountryId;
    }
    /**
     * Set receiverCountryId value
     * @param long $_receiverCountryId the receiverCountryId
     * @return long
     */
    public function setReceiverCountryId($_receiverCountryId)
    {
        return ($this->receiverCountryId = $_receiverCountryId);
    }
    /**
     * Get receiverPostCode value
     * @return string|null
     */
    public function getReceiverPostCode()
    {
        return $this->receiverPostCode;
    }
    /**
     * Set receiverPostCode value
     * @param string $_receiverPostCode the receiverPostCode
     * @return string
     */
    public function setReceiverPostCode($_receiverPostCode)
    {
        return ($this->receiverPostCode = $_receiverPostCode);
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
     * Get senderId value
     * @return long|null
     */
    public function getSenderId()
    {
        return $this->senderId;
    }
    /**
     * Set senderId value
     * @param long $_senderId the senderId
     * @return long
     */
    public function setSenderId($_senderId)
    {
        return ($this->senderId = $_senderId);
    }
    /**
     * Get receiverId value
     * @return long|null
     */
    public function getReceiverId()
    {
        return $this->receiverId;
    }
    /**
     * Set receiverId value
     * @param long $_receiverId the receiverId
     * @return long
     */
    public function setReceiverId($_receiverId)
    {
        return ($this->receiverId = $_receiverId);
    }
    /**
     * Get senderOfficeId value
     * @return long|null
     */
    public function getSenderOfficeId()
    {
        return $this->senderOfficeId;
    }
    /**
     * Set senderOfficeId value
     * @param long $_senderOfficeId the senderOfficeId
     * @return long
     */
    public function setSenderOfficeId($_senderOfficeId)
    {
        return ($this->senderOfficeId = $_senderOfficeId);
    }
    /**
     * Get receiverOfficeId value
     * @return long|null
     */
    public function getReceiverOfficeId()
    {
        return $this->receiverOfficeId;
    }
    /**
     * Set receiverOfficeId value
     * @param long $_receiverOfficeId the receiverOfficeId
     * @return long
     */
    public function setReceiverOfficeId($_receiverOfficeId)
    {
        return ($this->receiverOfficeId = $_receiverOfficeId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructListServicesForSites
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
