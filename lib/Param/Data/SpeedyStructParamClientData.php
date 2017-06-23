<?php
/**
 * File for class SpeedyStructParamClientData
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructParamClientData originally named paramClientData
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructParamClientData extends SpeedyWsdlClass
{
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructParamAddress
     */
    public $address;
    /**
     * The clientId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $clientId;
    /**
     * The contactName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $contactName;
    /**
     * The email
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $email;
    /**
     * The objectName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $objectName;
    /**
     * The partnerName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $partnerName;
    /**
     * The phones
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var SpeedyStructParamPhoneNumber
     */
    public $phones;
    /**
     * The privatePersonType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var short
     */
    public $privatePersonType;
    /**
     * Constructor method for paramClientData
     * @see parent::__construct()
     * @param SpeedyStructParamAddress $_address
     * @param long $_clientId
     * @param string $_contactName
     * @param string $_email
     * @param string $_objectName
     * @param string $_partnerName
     * @param SpeedyStructParamPhoneNumber $_phones
     * @param short $_privatePersonType
     * @return SpeedyStructParamClientData
     */
    public function __construct($_address = NULL,$_clientId = NULL,$_contactName = NULL,$_email = NULL,$_objectName = NULL,$_partnerName = NULL,$_phones = NULL,$_privatePersonType = NULL)
    {
        parent::__construct(array('address'=>$_address,'clientId'=>$_clientId,'contactName'=>$_contactName,'email'=>$_email,'objectName'=>$_objectName,'partnerName'=>$_partnerName,'phones'=>$_phones,'privatePersonType'=>$_privatePersonType),false);
    }
    /**
     * Get address value
     * @return SpeedyStructParamAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param SpeedyStructParamAddress $_address the address
     * @return SpeedyStructParamAddress
     */
    public function setAddress($_address)
    {
        return ($this->address = $_address);
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
     * Get contactName value
     * @return string|null
     */
    public function getContactName()
    {
        return $this->contactName;
    }
    /**
     * Set contactName value
     * @param string $_contactName the contactName
     * @return string
     */
    public function setContactName($_contactName)
    {
        return ($this->contactName = $_contactName);
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $_email the email
     * @return string
     */
    public function setEmail($_email)
    {
        return ($this->email = $_email);
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
     * Get partnerName value
     * @return string|null
     */
    public function getPartnerName()
    {
        return $this->partnerName;
    }
    /**
     * Set partnerName value
     * @param string $_partnerName the partnerName
     * @return string
     */
    public function setPartnerName($_partnerName)
    {
        return ($this->partnerName = $_partnerName);
    }
    /**
     * Get phones value
     * @return SpeedyStructParamPhoneNumber|null
     */
    public function getPhones()
    {
        return $this->phones;
    }
    /**
     * Set phones value
     * @param SpeedyStructParamPhoneNumber $_phones the phones
     * @return SpeedyStructParamPhoneNumber
     */
    public function setPhones($_phones)
    {
        return ($this->phones = $_phones);
    }
    /**
     * Get privatePersonType value
     * @return short|null
     */
    public function getPrivatePersonType()
    {
        return $this->privatePersonType;
    }
    /**
     * Set privatePersonType value
     * @param short $_privatePersonType the privatePersonType
     * @return short
     */
    public function setPrivatePersonType($_privatePersonType)
    {
        return ($this->privatePersonType = $_privatePersonType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructParamClientData
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
