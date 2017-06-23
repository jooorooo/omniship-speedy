<?php
/**
 * File for class SpeedyStructPickingValidationException
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructPickingValidationException originally named PickingValidationException
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructPickingValidationException extends SpeedyWsdlClass
{
    /**
     * The errorDescription
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $errorDescription;
    /**
     * The errorId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $errorId;
    /**
     * The errorType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyEnumPickingValidationErrorType
     */
    public $errorType;
    /**
     * The message
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $message;
    /**
     * Constructor method for PickingValidationException
     * @see parent::__construct()
     * @param string $_errorDescription
     * @param string $_errorId
     * @param SpeedyEnumPickingValidationErrorType $_errorType
     * @param string $_message
     * @return SpeedyStructPickingValidationException
     */
    public function __construct($_errorDescription = NULL,$_errorId = NULL,$_errorType = NULL,$_message = NULL)
    {
        parent::__construct(array('errorDescription'=>$_errorDescription,'errorId'=>$_errorId,'errorType'=>$_errorType,'message'=>$_message),false);
    }
    /**
     * Get errorDescription value
     * @return string|null
     */
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }
    /**
     * Set errorDescription value
     * @param string $_errorDescription the errorDescription
     * @return string
     */
    public function setErrorDescription($_errorDescription)
    {
        return ($this->errorDescription = $_errorDescription);
    }
    /**
     * Get errorId value
     * @return string|null
     */
    public function getErrorId()
    {
        return $this->errorId;
    }
    /**
     * Set errorId value
     * @param string $_errorId the errorId
     * @return string
     */
    public function setErrorId($_errorId)
    {
        return ($this->errorId = $_errorId);
    }
    /**
     * Get errorType value
     * @return SpeedyEnumPickingValidationErrorType|null
     */
    public function getErrorType()
    {
        return $this->errorType;
    }
    /**
     * Set errorType value
     * @uses SpeedyEnumPickingValidationErrorType::valueIsValid()
     * @param SpeedyEnumPickingValidationErrorType $_errorType the errorType
     * @return SpeedyEnumPickingValidationErrorType
     */
    public function setErrorType($_errorType)
    {
        if(!SpeedyEnumPickingValidationErrorType::valueIsValid($_errorType))
        {
            return false;
        }
        return ($this->errorType = $_errorType);
    }
    /**
     * Get message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * Set message value
     * @param string $_message the message
     * @return string
     */
    public function setMessage($_message)
    {
        return ($this->message = $_message);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructPickingValidationException
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
