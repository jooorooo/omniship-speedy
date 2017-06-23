<?php
/**
 * File for class SpeedyStructResultParcelInfo
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultParcelInfo originally named resultParcelInfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultParcelInfo extends SpeedyWsdlClass
{
    /**
     * The parcelId
     * @var long
     */
    public $parcelId;
    /**
     * The seqNo
     * @var int
     */
    public $seqNo;
    /**
     * Constructor method for resultParcelInfo
     * @see parent::__construct()
     * @param long $_parcelId
     * @param int $_seqNo
     * @return SpeedyStructResultParcelInfo
     */
    public function __construct($_parcelId = NULL,$_seqNo = NULL)
    {
        parent::__construct(array('parcelId'=>$_parcelId,'seqNo'=>$_seqNo),false);
    }
    /**
     * Get parcelId value
     * @return long|null
     */
    public function getParcelId()
    {
        return $this->parcelId;
    }
    /**
     * Set parcelId value
     * @param long $_parcelId the parcelId
     * @return long
     */
    public function setParcelId($_parcelId)
    {
        return ($this->parcelId = $_parcelId);
    }
    /**
     * Get seqNo value
     * @return int|null
     */
    public function getSeqNo()
    {
        return $this->seqNo;
    }
    /**
     * Set seqNo value
     * @param int $_seqNo the seqNo
     * @return int
     */
    public function setSeqNo($_seqNo)
    {
        return ($this->seqNo = $_seqNo);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultParcelInfo
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
