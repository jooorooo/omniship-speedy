<?php
/**
 * File for class SpeedyStructResultDeliveryInfo
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultDeliveryInfo originally named resultDeliveryInfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultDeliveryInfo extends SpeedyWsdlClass
{
    /**
     * The consignee
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $consignee;
    /**
     * The deliveryDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $deliveryDate;
    /**
     * The deliveryNote
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $deliveryNote;
    /**
     * Constructor method for resultDeliveryInfo
     * @see parent::__construct()
     * @param string $_consignee
     * @param dateTime $_deliveryDate
     * @param string $_deliveryNote
     * @return SpeedyStructResultDeliveryInfo
     */
    public function __construct($_consignee = NULL,$_deliveryDate = NULL,$_deliveryNote = NULL)
    {
        parent::__construct(array('consignee'=>$_consignee,'deliveryDate'=>$_deliveryDate,'deliveryNote'=>$_deliveryNote),false);
    }
    /**
     * Get consignee value
     * @return string|null
     */
    public function getConsignee()
    {
        return $this->consignee;
    }
    /**
     * Set consignee value
     * @param string $_consignee the consignee
     * @return string
     */
    public function setConsignee($_consignee)
    {
        return ($this->consignee = $_consignee);
    }
    /**
     * Get deliveryDate value
     * @return dateTime|null
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }
    /**
     * Set deliveryDate value
     * @param dateTime $_deliveryDate the deliveryDate
     * @return dateTime
     */
    public function setDeliveryDate($_deliveryDate)
    {
        return ($this->deliveryDate = $_deliveryDate);
    }
    /**
     * Get deliveryNote value
     * @return string|null
     */
    public function getDeliveryNote()
    {
        return $this->deliveryNote;
    }
    /**
     * Set deliveryNote value
     * @param string $_deliveryNote the deliveryNote
     * @return string
     */
    public function setDeliveryNote($_deliveryNote)
    {
        return ($this->deliveryNote = $_deliveryNote);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultDeliveryInfo
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
