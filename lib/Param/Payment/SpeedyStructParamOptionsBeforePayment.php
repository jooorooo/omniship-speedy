<?php
/**
 * File for class SpeedyStructParamOptionsBeforePayment
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructParamOptionsBeforePayment originally named paramOptionsBeforePayment
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructParamOptionsBeforePayment extends SpeedyWsdlClass
{
    /**
     * The open
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $open;
    /**
     * The returnPayerType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $returnPayerType;
    /**
     * The returnServiceTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $returnServiceTypeId;
    /**
     * The test
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $test;
    /**
     * Constructor method for paramOptionsBeforePayment
     * @see parent::__construct()
     * @param boolean $_open
     * @param int $_returnPayerType
     * @param long $_returnServiceTypeId
     * @param boolean $_test
     * @return SpeedyStructParamOptionsBeforePayment
     */
    public function __construct($_open = NULL,$_returnPayerType = NULL,$_returnServiceTypeId = NULL,$_test = NULL)
    {
        parent::__construct(array('open'=>$_open,'returnPayerType'=>$_returnPayerType,'returnServiceTypeId'=>$_returnServiceTypeId,'test'=>$_test),false);
    }
    /**
     * Get open value
     * @return boolean|null
     */
    public function getOpen()
    {
        return $this->open;
    }
    /**
     * Set open value
     * @param boolean $_open the open
     * @return boolean
     */
    public function setOpen($_open)
    {
        return ($this->open = $_open);
    }
    /**
     * Get returnPayerType value
     * @return int|null
     */
    public function getReturnPayerType()
    {
        return $this->returnPayerType;
    }
    /**
     * Set returnPayerType value
     * @param int $_returnPayerType the returnPayerType
     * @return int
     */
    public function setReturnPayerType($_returnPayerType)
    {
        return ($this->returnPayerType = $_returnPayerType);
    }
    /**
     * Get returnServiceTypeId value
     * @return long|null
     */
    public function getReturnServiceTypeId()
    {
        return $this->returnServiceTypeId;
    }
    /**
     * Set returnServiceTypeId value
     * @param long $_returnServiceTypeId the returnServiceTypeId
     * @return long
     */
    public function setReturnServiceTypeId($_returnServiceTypeId)
    {
        return ($this->returnServiceTypeId = $_returnServiceTypeId);
    }
    /**
     * Get test value
     * @return boolean|null
     */
    public function getTest()
    {
        return $this->test;
    }
    /**
     * Set test value
     * @param boolean $_test the test
     * @return boolean
     */
    public function setTest($_test)
    {
        return ($this->test = $_test);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructParamOptionsBeforePayment
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
