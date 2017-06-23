<?php
/**
 * File for class SpeedyStructResultStreet
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultStreet originally named resultStreet
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultStreet extends SpeedyWsdlClass
{
    /**
     * The actualName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $actualName;
    /**
     * The id
     * @var long
     */
    public $id;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $name;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $type;
    /**
     * Constructor method for resultStreet
     * @see parent::__construct()
     * @param string $_actualName
     * @param long $_id
     * @param string $_name
     * @param string $_type
     * @return SpeedyStructResultStreet
     */
    public function __construct($_actualName = NULL,$_id = NULL,$_name = NULL,$_type = NULL)
    {
        parent::__construct(array('actualName'=>$_actualName,'id'=>$_id,'name'=>$_name,'type'=>$_type),false);
    }
    /**
     * Get actualName value
     * @return string|null
     */
    public function getActualName()
    {
        return $this->actualName;
    }
    /**
     * Set actualName value
     * @param string $_actualName the actualName
     * @return string
     */
    public function setActualName($_actualName)
    {
        return ($this->actualName = $_actualName);
    }
    /**
     * Get id value
     * @return long|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param long $_id the id
     * @return long
     */
    public function setId($_id)
    {
        return ($this->id = $_id);
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $_type the type
     * @return string
     */
    public function setType($_type)
    {
        return ($this->type = $_type);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultStreet
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
