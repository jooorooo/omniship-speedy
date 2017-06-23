<?php
/**
 * File for class SpeedyEnumParamLanguage
 * @package Speedy
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyEnumParamLanguage originally named paramLanguage
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyEnumParamLanguage extends SpeedyWsdlClass
{
    /**
     * Constant for value 'BG'
     * @return string 'BG'
     */
    const VALUE_BG = 'BG';
    /**
     * Constant for value 'EN'
     * @return string 'EN'
     */
    const VALUE_EN = 'EN';
    /**
     * Return true if value is allowed
     * @uses SpeedyEnumParamLanguage::VALUE_BG
     * @uses SpeedyEnumParamLanguage::VALUE_EN
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(SpeedyEnumParamLanguage::VALUE_BG,SpeedyEnumParamLanguage::VALUE_EN));
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
