<?php
/**
 * File for class SpeedyStructValidateAddress
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructValidateAddress originally named validateAddress
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructValidateAddress extends SpeedyWsdlClass
{
    /**
     * The sessionId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sessionId;
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructParamAddress
     */
    public $address;
    /**
     * The validationMode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $validationMode;
    /**
     * Constructor method for validateAddress
     * @see parent::__construct()
     * @param string $_sessionId
     * @param SpeedyStructParamAddress $_address
     * @param int $_validationMode
     * @return SpeedyStructValidateAddress
     */
    public function __construct($_sessionId = NULL,$_address = NULL,$_validationMode = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'address'=>$_address,'validationMode'=>$_validationMode),false);
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
     * Get validationMode value
     * @return int|null
     */
    public function getValidationMode()
    {
        return $this->validationMode;
    }
    /**
     * Set validationMode value
     * @param int $_validationMode the validationMode
     * @return int
     */
    public function setValidationMode($_validationMode)
    {
        return ($this->validationMode = $_validationMode);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructValidateAddress
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
