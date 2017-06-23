<?php
/**
 * File for class SpeedyStructParamReturnShipmentRequest
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructParamReturnShipmentRequest originally named paramReturnShipmentRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructParamReturnShipmentRequest extends SpeedyWsdlClass
{
    /**
     * The amountInsuranceBase
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $amountInsuranceBase;
    /**
     * The fragile
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $fragile;
    /**
     * The parcelsCount
     * @var int
     */
    public $parcelsCount;
    /**
     * The serviceTypeId
     * @var long
     */
    public $serviceTypeId;
    /**
     * Constructor method for paramReturnShipmentRequest
     * @see parent::__construct()
     * @param double $_amountInsuranceBase
     * @param boolean $_fragile
     * @param int $_parcelsCount
     * @param long $_serviceTypeId
     * @return SpeedyStructParamReturnShipmentRequest
     */
    public function __construct($_amountInsuranceBase = NULL,$_fragile = NULL,$_parcelsCount = NULL,$_serviceTypeId = NULL)
    {
        parent::__construct(array('amountInsuranceBase'=>$_amountInsuranceBase,'fragile'=>$_fragile,'parcelsCount'=>$_parcelsCount,'serviceTypeId'=>$_serviceTypeId),false);
    }
    /**
     * Get amountInsuranceBase value
     * @return double|null
     */
    public function getAmountInsuranceBase()
    {
        return $this->amountInsuranceBase;
    }
    /**
     * Set amountInsuranceBase value
     * @param double $_amountInsuranceBase the amountInsuranceBase
     * @return double
     */
    public function setAmountInsuranceBase($_amountInsuranceBase)
    {
        return ($this->amountInsuranceBase = $_amountInsuranceBase);
    }
    /**
     * Get fragile value
     * @return boolean|null
     */
    public function getFragile()
    {
        return $this->fragile;
    }
    /**
     * Set fragile value
     * @param boolean $_fragile the fragile
     * @return boolean
     */
    public function setFragile($_fragile)
    {
        return ($this->fragile = $_fragile);
    }
    /**
     * Get parcelsCount value
     * @return int|null
     */
    public function getParcelsCount()
    {
        return $this->parcelsCount;
    }
    /**
     * Set parcelsCount value
     * @param int $_parcelsCount the parcelsCount
     * @return int
     */
    public function setParcelsCount($_parcelsCount)
    {
        return ($this->parcelsCount = $_parcelsCount);
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
     * @return SpeedyStructParamReturnShipmentRequest
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
