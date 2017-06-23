<?php
/**
 * File for class SpeedyStructFixedDiscountCardId
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructFixedDiscountCardId originally named fixedDiscountCardId
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructFixedDiscountCardId extends SpeedyWsdlClass
{
    /**
     * The agreementId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $agreementId;
    /**
     * The cardId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $cardId;
    /**
     * Constructor method for fixedDiscountCardId
     * @see parent::__construct()
     * @param long $_agreementId
     * @param long $_cardId
     * @return SpeedyStructFixedDiscountCardId
     */
    public function __construct($_agreementId = NULL,$_cardId = NULL)
    {
        parent::__construct(array('agreementId'=>$_agreementId,'cardId'=>$_cardId),false);
    }
    /**
     * Get agreementId value
     * @return long|null
     */
    public function getAgreementId()
    {
        return $this->agreementId;
    }
    /**
     * Set agreementId value
     * @param long $_agreementId the agreementId
     * @return long
     */
    public function setAgreementId($_agreementId)
    {
        return ($this->agreementId = $_agreementId);
    }
    /**
     * Get cardId value
     * @return long|null
     */
    public function getCardId()
    {
        return $this->cardId;
    }
    /**
     * Set cardId value
     * @param long $_cardId the cardId
     * @return long
     */
    public function setCardId($_cardId)
    {
        return ($this->cardId = $_cardId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructFixedDiscountCardId
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
