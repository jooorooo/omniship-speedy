<?php
/**
 * File for class SpeedyStructSearchSecondaryPickings
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructSearchSecondaryPickings originally named searchSecondaryPickings
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructSearchSecondaryPickings extends SpeedyWsdlClass
{
    /**
     * The sessionId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sessionId;
    /**
     * The paramSearchSecondaryPickings
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructParamSearchSecondaryPickings
     */
    public $paramSearchSecondaryPickings;
    /**
     * Constructor method for searchSecondaryPickings
     * @see parent::__construct()
     * @param string $_sessionId
     * @param SpeedyStructParamSearchSecondaryPickings $_paramSearchSecondaryPickings
     * @return SpeedyStructSearchSecondaryPickings
     */
    public function __construct($_sessionId = NULL,$_paramSearchSecondaryPickings = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'paramSearchSecondaryPickings'=>$_paramSearchSecondaryPickings),false);
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
     * Get paramSearchSecondaryPickings value
     * @return SpeedyStructParamSearchSecondaryPickings|null
     */
    public function getParamSearchSecondaryPickings()
    {
        return $this->paramSearchSecondaryPickings;
    }
    /**
     * Set paramSearchSecondaryPickings value
     * @param SpeedyStructParamSearchSecondaryPickings $_paramSearchSecondaryPickings the paramSearchSecondaryPickings
     * @return SpeedyStructParamSearchSecondaryPickings
     */
    public function setParamSearchSecondaryPickings($_paramSearchSecondaryPickings)
    {
        return ($this->paramSearchSecondaryPickings = $_paramSearchSecondaryPickings);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructSearchSecondaryPickings
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
