<?php
/**
 * File for class SpeedyEnumAddrNomen
 * @package Speedy
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyEnumAddrNomen originally named addrNomen
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Enumerations
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyEnumAddrNomen extends SpeedyWsdlClass
{
    /**
     * Constant for value 'NO'
     * @return string 'NO'
     */
    const VALUE_NO = 'NO';
    /**
     * Constant for value 'FULL'
     * @return string 'FULL'
     */
    const VALUE_FULL = 'FULL';
    /**
     * Constant for value 'PARTIAL'
     * @return string 'PARTIAL'
     */
    const VALUE_PARTIAL = 'PARTIAL';
    /**
     * Return true if value is allowed
     * @uses SpeedyEnumAddrNomen::VALUE_NO
     * @uses SpeedyEnumAddrNomen::VALUE_FULL
     * @uses SpeedyEnumAddrNomen::VALUE_PARTIAL
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(SpeedyEnumAddrNomen::VALUE_NO,SpeedyEnumAddrNomen::VALUE_FULL,SpeedyEnumAddrNomen::VALUE_PARTIAL));
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
