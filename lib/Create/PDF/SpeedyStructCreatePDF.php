<?php
/**
 * File for class SpeedyStructCreatePDF
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructCreatePDF originally named createPDF
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructCreatePDF extends SpeedyWsdlClass
{
    /**
     * The sessionId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sessionId;
    /**
     * The params
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructParamPDF
     */
    public $params;
    /**
     * Constructor method for createPDF
     * @see parent::__construct()
     * @param string $_sessionId
     * @param SpeedyStructParamPDF $_params
     * @return SpeedyStructCreatePDF
     */
    public function __construct($_sessionId = NULL,$_params = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'params'=>$_params),false);
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
     * Get params value
     * @return SpeedyStructParamPDF|null
     */
    public function getParams()
    {
        return $this->params;
    }
    /**
     * Set params value
     * @param SpeedyStructParamPDF $_params the params
     * @return SpeedyStructParamPDF
     */
    public function setParams($_params)
    {
        return ($this->params = $_params);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructCreatePDF
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
