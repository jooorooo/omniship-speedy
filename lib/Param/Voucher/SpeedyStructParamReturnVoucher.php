<?php
/**
 * File for class SpeedyStructParamReturnVoucher
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructParamReturnVoucher originally named paramReturnVoucher
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructParamReturnVoucher extends SpeedyWsdlClass
{
    /**
     * The payerType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $payerType;
    /**
     * The serviceTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $serviceTypeId;
    /**
     * Constructor method for paramReturnVoucher
     * @see parent::__construct()
     * @param int $_payerType
     * @param long $_serviceTypeId
     * @return SpeedyStructParamReturnVoucher
     */
    public function __construct($_payerType = NULL,$_serviceTypeId = NULL)
    {
        parent::__construct(array('payerType'=>$_payerType,'serviceTypeId'=>$_serviceTypeId),false);
    }
    /**
     * Get payerType value
     * @return int|null
     */
    public function getPayerType()
    {
        return $this->payerType;
    }
    /**
     * Set payerType value
     * @param int $_payerType the payerType
     * @return int
     */
    public function setPayerType($_payerType)
    {
        return ($this->payerType = $_payerType);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructParamReturnVoucher
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
