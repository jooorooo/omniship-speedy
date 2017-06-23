<?php
/**
 * File for class SpeedyEnumComplementaryServiceAllowance
 * @package Speedy
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyEnumComplementaryServiceAllowance originally named complementaryServiceAllowance
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyEnumComplementaryServiceAllowance extends SpeedyWsdlClass
{
    /**
     * Constant for value 'BANNED'
     * @return string 'BANNED'
     */
    const VALUE_BANNED = 'BANNED';
    /**
     * Constant for value 'ALLOWED'
     * @return string 'ALLOWED'
     */
    const VALUE_ALLOWED = 'ALLOWED';
    /**
     * Constant for value 'REQUIRED'
     * @return string 'REQUIRED'
     */
    const VALUE_REQUIRED = 'REQUIRED';
    /**
     * Return true if value is allowed
     * @uses SpeedyEnumComplementaryServiceAllowance::VALUE_BANNED
     * @uses SpeedyEnumComplementaryServiceAllowance::VALUE_ALLOWED
     * @uses SpeedyEnumComplementaryServiceAllowance::VALUE_REQUIRED
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(SpeedyEnumComplementaryServiceAllowance::VALUE_BANNED,SpeedyEnumComplementaryServiceAllowance::VALUE_ALLOWED,SpeedyEnumComplementaryServiceAllowance::VALUE_REQUIRED));
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
