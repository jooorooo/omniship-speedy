<?php
/**
 * File for class SpeedyStructGetAllowedDaysForTaking
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructGetAllowedDaysForTaking originally named getAllowedDaysForTaking
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructGetAllowedDaysForTaking extends SpeedyWsdlClass
{
    /**
     * The sessionId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sessionId;
    /**
     * The serviceTypeId
     * @var long
     */
    public $serviceTypeId;
    /**
     * The senderSiteId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $senderSiteId;
    /**
     * The senderOfficeId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $senderOfficeId;
    /**
     * The minDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $minDate;
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
     * The senderId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $senderId;
    /**
     * Constructor method for getAllowedDaysForTaking
     * @see parent::__construct()
     * @param string $_sessionId
     * @param long $_serviceTypeId
     * @param long $_senderSiteId
     * @param long $_senderOfficeId
     * @param dateTime $_minDate
     * @param long $_senderCountryId
     * @param string $_senderPostCode
     * @param long $_senderId
     * @return SpeedyStructGetAllowedDaysForTaking
     */
    public function __construct($_sessionId = NULL,$_serviceTypeId = NULL,$_senderSiteId = NULL,$_senderOfficeId = NULL,$_minDate = NULL,$_senderCountryId = NULL,$_senderPostCode = NULL,$_senderId = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'serviceTypeId'=>$_serviceTypeId,'senderSiteId'=>$_senderSiteId,'senderOfficeId'=>$_senderOfficeId,'minDate'=>$_minDate,'senderCountryId'=>$_senderCountryId,'senderPostCode'=>$_senderPostCode,'senderId'=>$_senderId),false);
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
     * Get serviceTypeId value
     * @return long|null
     */
    public function getServiceTypeId()
    {
        return $this->serviceTypeId;
    }
    /**
     * Set serviceTypeId value
     * @param long $_serviceTypeId the serviceTypeId
     * @return long
     */
    public function setServiceTypeId($_serviceTypeId)
    {
        return ($this->serviceTypeId = $_serviceTypeId);
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
     * Get minDate value
     * @return dateTime|null
     */
    public function getMinDate()
    {
        return $this->minDate;
    }
    /**
     * Set minDate value
     * @param dateTime $_minDate the minDate
     * @return dateTime
     */
    public function setMinDate($_minDate)
    {
        return ($this->minDate = $_minDate);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructGetAllowedDaysForTaking
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
