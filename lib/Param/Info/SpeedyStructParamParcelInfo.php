<?php
/**
 * File for class SpeedyStructParamParcelInfo
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructParamParcelInfo originally named paramParcelInfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructParamParcelInfo extends SpeedyWsdlClass
{
    /**
     * The foreignParcelNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $foreignParcelNumber;
    /**
     * The packId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $packId;
    /**
     * The parcelId
     * @var long
     */
    public $parcelId;
    /**
     * The predefinedSize
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $predefinedSize;
    /**
     * The seqNo
     * @var int
     */
    public $seqNo;
    /**
     * The size
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructSize
     */
    public $size;
    /**
     * The weight
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $weight;
    /**
     * Constructor method for paramParcelInfo
     * @see parent::__construct()
     * @param string $_foreignParcelNumber
     * @param long $_packId
     * @param long $_parcelId
     * @param string $_predefinedSize
     * @param int $_seqNo
     * @param SpeedyStructSize $_size
     * @param double $_weight
     * @return SpeedyStructParamParcelInfo
     */
    public function __construct($_foreignParcelNumber = NULL,$_packId = NULL,$_parcelId = NULL,$_predefinedSize = NULL,$_seqNo = NULL,$_size = NULL,$_weight = NULL)
    {
        parent::__construct(array('foreignParcelNumber'=>$_foreignParcelNumber,'packId'=>$_packId,'parcelId'=>$_parcelId,'predefinedSize'=>$_predefinedSize,'seqNo'=>$_seqNo,'size'=>$_size,'weight'=>$_weight),false);
    }
    /**
     * Get foreignParcelNumber value
     * @return string|null
     */
    public function getForeignParcelNumber()
    {
        return $this->foreignParcelNumber;
    }
    /**
     * Set foreignParcelNumber value
     * @param string $_foreignParcelNumber the foreignParcelNumber
     * @return string
     */
    public function setForeignParcelNumber($_foreignParcelNumber)
    {
        return ($this->foreignParcelNumber = $_foreignParcelNumber);
    }
    /**
     * Get packId value
     * @return long|null
     */
    public function getPackId()
    {
        return $this->packId;
    }
    /**
     * Set packId value
     * @param long $_packId the packId
     * @return long
     */
    public function setPackId($_packId)
    {
        return ($this->packId = $_packId);
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
     * Get predefinedSize value
     * @return string|null
     */
    public function getPredefinedSize()
    {
        return $this->predefinedSize;
    }
    /**
     * Set predefinedSize value
     * @param string $_predefinedSize the predefinedSize
     * @return string
     */
    public function setPredefinedSize($_predefinedSize)
    {
        return ($this->predefinedSize = $_predefinedSize);
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
     * Get size value
     * @return SpeedyStructSize|null
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * Set size value
     * @param SpeedyStructSize $_size the size
     * @return SpeedyStructSize
     */
    public function setSize($_size)
    {
        return ($this->size = $_size);
    }
    /**
     * Get weight value
     * @return double|null
     */
    public function getWeight()
    {
        return $this->weight;
    }
    /**
     * Set weight value
     * @param double $_weight the weight
     * @return double
     */
    public function setWeight($_weight)
    {
        return ($this->weight = $_weight);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructParamParcelInfo
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
