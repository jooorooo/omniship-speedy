<?php
/**
 * File for class SpeedyStructResultPackings
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultPackings originally named resultPackings
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultPackings extends SpeedyWsdlClass
{
    /**
     * The count
     * @var int
     */
    public $count;
    /**
     * The packingId
     * @var long
     */
    public $packingId;
    /**
     * Constructor method for resultPackings
     * @see parent::__construct()
     * @param int $_count
     * @param long $_packingId
     * @return SpeedyStructResultPackings
     */
    public function __construct($_count = NULL,$_packingId = NULL)
    {
        parent::__construct(array('count'=>$_count,'packingId'=>$_packingId),false);
    }
    /**
     * Get count value
     * @return int|null
     */
    public function getCount()
    {
        return $this->count;
    }
    /**
     * Set count value
     * @param int $_count the count
     * @return int
     */
    public function setCount($_count)
    {
        return ($this->count = $_count);
    }
    /**
     * Get packingId value
     * @return long|null
     */
    public function getPackingId()
    {
        return $this->packingId;
    }
    /**
     * Set packingId value
     * @param long $_packingId the packingId
     * @return long
     */
    public function setPackingId($_packingId)
    {
        return ($this->packingId = $_packingId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultPackings
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
