<?php
/**
 * File for class SpeedyStructResultState
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultState originally named resultState
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultState extends SpeedyWsdlClass
{
    /**
     * The countryId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $countryId;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $name;
    /**
     * The stateAlpha
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $stateAlpha;
    /**
     * The stateId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $stateId;
    /**
     * Constructor method for resultState
     * @see parent::__construct()
     * @param long $_countryId
     * @param string $_name
     * @param string $_stateAlpha
     * @param string $_stateId
     * @return SpeedyStructResultState
     */
    public function __construct($_countryId = NULL,$_name = NULL,$_stateAlpha = NULL,$_stateId = NULL)
    {
        parent::__construct(array('countryId'=>$_countryId,'name'=>$_name,'stateAlpha'=>$_stateAlpha,'stateId'=>$_stateId),false);
    }
    /**
     * Get countryId value
     * @return long|null
     */
    public function getCountryId()
    {
        return $this->countryId;
    }
    /**
     * Set countryId value
     * @param long $_countryId the countryId
     * @return long
     */
    public function setCountryId($_countryId)
    {
        return ($this->countryId = $_countryId);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $_name the name
     * @return string
     */
    public function setName($_name)
    {
        return ($this->name = $_name);
    }
    /**
     * Get stateAlpha value
     * @return string|null
     */
    public function getStateAlpha()
    {
        return $this->stateAlpha;
    }
    /**
     * Set stateAlpha value
     * @param string $_stateAlpha the stateAlpha
     * @return string
     */
    public function setStateAlpha($_stateAlpha)
    {
        return ($this->stateAlpha = $_stateAlpha);
    }
    /**
     * Get stateId value
     * @return string|null
     */
    public function getStateId()
    {
        return $this->stateId;
    }
    /**
     * Set stateId value
     * @param string $_stateId the stateId
     * @return string
     */
    public function setStateId($_stateId)
    {
        return ($this->stateId = $_stateId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultState
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
