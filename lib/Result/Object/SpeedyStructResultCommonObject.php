<?php
/**
 * File for class SpeedyStructResultCommonObject
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultCommonObject originally named resultCommonObject
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultCommonObject extends SpeedyWsdlClass
{
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $address;
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
     * Constructor method for resultCommonObject
     * @see parent::__construct()
     * @param string $_address
     * @param long $_id
     * @param string $_name
     * @param string $_type
     * @return SpeedyStructResultCommonObject
     */
    public function __construct($_address = NULL,$_id = NULL,$_name = NULL,$_type = NULL)
    {
        parent::__construct(array('address'=>$_address,'id'=>$_id,'name'=>$_name,'type'=>$_type),false);
    }
    /**
     * Get address value
     * @return string|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * Set address value
     * @param string $_address the address
     * @return string
     */
    public function setAddress($_address)
    {
        return ($this->address = $_address);
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
     * @return SpeedyStructResultCommonObject
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
