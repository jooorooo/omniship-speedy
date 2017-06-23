<?php
/**
 * File for class SpeedyStructSize
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructSize originally named size
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructSize extends SpeedyWsdlClass
{
    /**
     * The depth
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $depth;
    /**
     * The height
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $height;
    /**
     * The width
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $width;
    /**
     * Constructor method for size
     * @see parent::__construct()
     * @param int $_depth
     * @param int $_height
     * @param int $_width
     * @return SpeedyStructSize
     */
    public function __construct($_depth = NULL,$_height = NULL,$_width = NULL)
    {
        parent::__construct(array('depth'=>$_depth,'height'=>$_height,'width'=>$_width),false);
    }
    /**
     * Get depth value
     * @return int|null
     */
    public function getDepth()
    {
        return $this->depth;
    }
    /**
     * Set depth value
     * @param int $_depth the depth
     * @return int
     */
    public function setDepth($_depth)
    {
        return ($this->depth = $_depth);
    }
    /**
     * Get height value
     * @return int|null
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * Set height value
     * @param int $_height the height
     * @return int
     */
    public function setHeight($_height)
    {
        return ($this->height = $_height);
    }
    /**
     * Get width value
     * @return int|null
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Set width value
     * @param int $_width the width
     * @return int
     */
    public function setWidth($_width)
    {
        return ($this->width = $_width);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructSize
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
