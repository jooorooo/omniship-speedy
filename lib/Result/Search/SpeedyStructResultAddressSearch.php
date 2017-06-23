<?php
/**
 * File for class SpeedyStructResultAddressSearch
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultAddressSearch originally named resultAddressSearch
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultAddressSearch extends SpeedyWsdlClass
{
    /**
     * The actual
     * @var boolean
     */
    public $actual;
    /**
     * The additionalAddressProcessing
     * @var int
     */
    public $additionalAddressProcessing;
    /**
     * The coordType
     * @var int
     */
    public $coordType;
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
     * The distanceToSiteCenter
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $distanceToSiteCenter;
    /**
     * The microregionId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $microregionId;
    /**
     * The text
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $text;
    /**
     * Constructor method for resultAddressSearch
     * @see parent::__construct()
     * @param boolean $_actual
     * @param int $_additionalAddressProcessing
     * @param int $_coordType
     * @param double $_coordX
     * @param double $_coordY
     * @param double $_distanceToSiteCenter
     * @param long $_microregionId
     * @param string $_text
     * @return SpeedyStructResultAddressSearch
     */
    public function __construct($_actual = NULL,$_additionalAddressProcessing = NULL,$_coordType = NULL,$_coordX = NULL,$_coordY = NULL,$_distanceToSiteCenter = NULL,$_microregionId = NULL,$_text = NULL)
    {
        parent::__construct(array('actual'=>$_actual,'additionalAddressProcessing'=>$_additionalAddressProcessing,'coordType'=>$_coordType,'coordX'=>$_coordX,'coordY'=>$_coordY,'distanceToSiteCenter'=>$_distanceToSiteCenter,'microregionId'=>$_microregionId,'text'=>$_text),false);
    }
    /**
     * Get actual value
     * @return boolean|null
     */
    public function getActual()
    {
        return $this->actual;
    }
    /**
     * Set actual value
     * @param boolean $_actual the actual
     * @return boolean
     */
    public function setActual($_actual)
    {
        return ($this->actual = $_actual);
    }
    /**
     * Get additionalAddressProcessing value
     * @return int|null
     */
    public function getAdditionalAddressProcessing()
    {
        return $this->additionalAddressProcessing;
    }
    /**
     * Set additionalAddressProcessing value
     * @param int $_additionalAddressProcessing the additionalAddressProcessing
     * @return int
     */
    public function setAdditionalAddressProcessing($_additionalAddressProcessing)
    {
        return ($this->additionalAddressProcessing = $_additionalAddressProcessing);
    }
    /**
     * Get coordType value
     * @return int|null
     */
    public function getCoordType()
    {
        return $this->coordType;
    }
    /**
     * Set coordType value
     * @param int $_coordType the coordType
     * @return int
     */
    public function setCoordType($_coordType)
    {
        return ($this->coordType = $_coordType);
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
     * Get distanceToSiteCenter value
     * @return double|null
     */
    public function getDistanceToSiteCenter()
    {
        return $this->distanceToSiteCenter;
    }
    /**
     * Set distanceToSiteCenter value
     * @param double $_distanceToSiteCenter the distanceToSiteCenter
     * @return double
     */
    public function setDistanceToSiteCenter($_distanceToSiteCenter)
    {
        return ($this->distanceToSiteCenter = $_distanceToSiteCenter);
    }
    /**
     * Get microregionId value
     * @return long|null
     */
    public function getMicroregionId()
    {
        return $this->microregionId;
    }
    /**
     * Set microregionId value
     * @param long $_microregionId the microregionId
     * @return long
     */
    public function setMicroregionId($_microregionId)
    {
        return ($this->microregionId = $_microregionId);
    }
    /**
     * Get text value
     * @return string|null
     */
    public function getText()
    {
        return $this->text;
    }
    /**
     * Set text value
     * @param string $_text the text
     * @return string
     */
    public function setText($_text)
    {
        return ($this->text = $_text);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultAddressSearch
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
