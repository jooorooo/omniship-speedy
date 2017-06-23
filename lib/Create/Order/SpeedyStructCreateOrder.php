<?php
/**
 * File for class SpeedyStructCreateOrder
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructCreateOrder originally named createOrder
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructCreateOrder extends SpeedyWsdlClass
{
    /**
     * The sessionId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sessionId;
    /**
     * The order
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructParamOrder
     */
    public $order;
    /**
     * Constructor method for createOrder
     * @see parent::__construct()
     * @param string $_sessionId
     * @param SpeedyStructParamOrder $_order
     * @return SpeedyStructCreateOrder
     */
    public function __construct($_sessionId = NULL,$_order = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'order'=>$_order),false);
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
     * Get order value
     * @return SpeedyStructParamOrder|null
     */
    public function getOrder()
    {
        return $this->order;
    }
    /**
     * Set order value
     * @param SpeedyStructParamOrder $_order the order
     * @return SpeedyStructParamOrder
     */
    public function setOrder($_order)
    {
        return ($this->order = $_order);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructCreateOrder
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
