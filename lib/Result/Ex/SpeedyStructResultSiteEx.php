<?php
/**
 * File for class SpeedyStructResultSiteEx
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultSiteEx originally named resultSiteEx
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultSiteEx extends SpeedyWsdlClass
{
    /**
     * The exactMatch
     * @var boolean
     */
    public $exactMatch;
    /**
     * The site
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructResultSite
     */
    public $site;
    /**
     * Constructor method for resultSiteEx
     * @see parent::__construct()
     * @param boolean $_exactMatch
     * @param SpeedyStructResultSite $_site
     * @return SpeedyStructResultSiteEx
     */
    public function __construct($_exactMatch = NULL,$_site = NULL)
    {
        parent::__construct(array('exactMatch'=>$_exactMatch,'site'=>$_site),false);
    }
    /**
     * Get exactMatch value
     * @return boolean|null
     */
    public function getExactMatch()
    {
        return $this->exactMatch;
    }
    /**
     * Set exactMatch value
     * @param boolean $_exactMatch the exactMatch
     * @return boolean
     */
    public function setExactMatch($_exactMatch)
    {
        return ($this->exactMatch = $_exactMatch);
    }
    /**
     * Get site value
     * @return SpeedyStructResultSite|null
     */
    public function getSite()
    {
        return $this->site;
    }
    /**
     * Set site value
     * @param SpeedyStructResultSite $_site the site
     * @return SpeedyStructResultSite
     */
    public function setSite($_site)
    {
        return ($this->site = $_site);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultSiteEx
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
