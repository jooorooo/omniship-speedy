<?php
/**
 * File for class SpeedyStructParamSearchSecondaryPickings
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructParamSearchSecondaryPickings originally named paramSearchSecondaryPickings
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructParamSearchSecondaryPickings extends SpeedyWsdlClass
{
    /**
     * The billOfLading
     * @var long
     */
    public $billOfLading;
    /**
     * The secondaryPickingType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $secondaryPickingType;
    /**
     * Constructor method for paramSearchSecondaryPickings
     * @see parent::__construct()
     * @param long $_billOfLading
     * @param int $_secondaryPickingType
     * @return SpeedyStructParamSearchSecondaryPickings
     */
    public function __construct($_billOfLading = NULL,$_secondaryPickingType = NULL)
    {
        parent::__construct(array('billOfLading'=>$_billOfLading,'secondaryPickingType'=>$_secondaryPickingType),false);
    }
    /**
     * Get billOfLading value
     * @return long|null
     */
    public function getBillOfLading()
    {
        return $this->billOfLading;
    }
    /**
     * Set billOfLading value
     * @param long $_billOfLading the billOfLading
     * @return long
     */
    public function setBillOfLading($_billOfLading)
    {
        return ($this->billOfLading = $_billOfLading);
    }
    /**
     * Get secondaryPickingType value
     * @return int|null
     */
    public function getSecondaryPickingType()
    {
        return $this->secondaryPickingType;
    }
    /**
     * Set secondaryPickingType value
     * @param int $_secondaryPickingType the secondaryPickingType
     * @return int
     */
    public function setSecondaryPickingType($_secondaryPickingType)
    {
        return ($this->secondaryPickingType = $_secondaryPickingType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructParamSearchSecondaryPickings
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
