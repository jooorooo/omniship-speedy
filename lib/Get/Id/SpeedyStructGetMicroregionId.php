<?php
/**
 * File for class SpeedyStructGetMicroregionId
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructGetMicroregionId originally named getMicroregionId
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructGetMicroregionId extends SpeedyWsdlClass
{
    /**
     * The sessionId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sessionId;
    /**
     * The coordX
     * @var double
     */
    public $coordX;
    /**
     * The coordY
     * @var double
     */
    public $coordY;
    /**
     * Constructor method for getMicroregionId
     * @see parent::__construct()
     * @param string $_sessionId
     * @param double $_coordX
     * @param double $_coordY
     * @return SpeedyStructGetMicroregionId
     */
    public function __construct($_sessionId = NULL,$_coordX = NULL,$_coordY = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'coordX'=>$_coordX,'coordY'=>$_coordY),false);
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
     * Get coordX value
     * @return double|null
     */
    public function getCoordX()
    {
        return $this->coordX;
    }
    /**
     * Set coordX value
     * @param double $_coordX the coordX
     * @return double
     */
    public function setCoordX($_coordX)
    {
        return ($this->coordX = $_coordX);
    }
    /**
     * Get coordY value
     * @return double|null
     */
    public function getCoordY()
    {
        return $this->coordY;
    }
    /**
     * Set coordY value
     * @param double $_coordY the coordY
     * @return double
     */
    public function setCoordY($_coordY)
    {
        return ($this->coordY = $_coordY);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructGetMicroregionId
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
