<?php
/**
 * File for class SpeedyStructResultAddressString
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultAddressString originally named resultAddressString
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultAddressString extends SpeedyWsdlClass
{
    /**
     * The fullAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $fullAddress;
    /**
     * The localAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $localAddress;
    /**
     * The siteAddress
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $siteAddress;
    /**
     * Constructor method for resultAddressString
     * @see parent::__construct()
     * @param string $_fullAddress
     * @param string $_localAddress
     * @param string $_siteAddress
     * @return SpeedyStructResultAddressString
     */
    public function __construct($_fullAddress = NULL,$_localAddress = NULL,$_siteAddress = NULL)
    {
        parent::__construct(array('fullAddress'=>$_fullAddress,'localAddress'=>$_localAddress,'siteAddress'=>$_siteAddress),false);
    }
    /**
     * Get fullAddress value
     * @return string|null
     */
    public function getFullAddress()
    {
        return $this->fullAddress;
    }
    /**
     * Set fullAddress value
     * @param string $_fullAddress the fullAddress
     * @return string
     */
    public function setFullAddress($_fullAddress)
    {
        return ($this->fullAddress = $_fullAddress);
    }
    /**
     * Get localAddress value
     * @return string|null
     */
    public function getLocalAddress()
    {
        return $this->localAddress;
    }
    /**
     * Set localAddress value
     * @param string $_localAddress the localAddress
     * @return string
     */
    public function setLocalAddress($_localAddress)
    {
        return ($this->localAddress = $_localAddress);
    }
    /**
     * Get siteAddress value
     * @return string|null
     */
    public function getSiteAddress()
    {
        return $this->siteAddress;
    }
    /**
     * Set siteAddress value
     * @param string $_siteAddress the siteAddress
     * @return string
     */
    public function setSiteAddress($_siteAddress)
    {
        return ($this->siteAddress = $_siteAddress);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultAddressString
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
