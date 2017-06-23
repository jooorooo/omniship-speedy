<?php
/**
 * File for class SpeedyStructResultCourierServiceExt
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultCourierServiceExt originally named resultCourierServiceExt
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultCourierServiceExt extends SpeedyWsdlClass
{
    /**
     * The allowanceBackDocumentsRequest
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyEnumComplementaryServiceAllowance
     */
    public $allowanceBackDocumentsRequest;
    /**
     * The allowanceBackReceiptRequest
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyEnumComplementaryServiceAllowance
     */
    public $allowanceBackReceiptRequest;
    /**
     * The allowanceCashOnDelivery
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyEnumComplementaryServiceAllowance
     */
    public $allowanceCashOnDelivery;
    /**
     * The allowanceFixedTimeDelivery
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyEnumComplementaryServiceAllowance
     */
    public $allowanceFixedTimeDelivery;
    /**
     * The allowanceInsurance
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyEnumComplementaryServiceAllowance
     */
    public $allowanceInsurance;
    /**
     * The allowanceToBeCalled
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyEnumComplementaryServiceAllowance
     */
    public $allowanceToBeCalled;
    /**
     * The name
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $name;
    /**
     * The typeId
     * @var long
     */
    public $typeId;
    /**
     * The deliveryDeadline
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $deliveryDeadline;
    /**
     * The cargoType
     * @var int
     */
    public $cargoType;
    /**
     * The allowanceDeliveryToFloor
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyEnumComplementaryServiceAllowance
     */
    public $allowanceDeliveryToFloor;
    /**
     * Constructor method for resultCourierServiceExt
     * @see parent::__construct()
     * @param SpeedyEnumComplementaryServiceAllowance $_allowanceBackDocumentsRequest
     * @param SpeedyEnumComplementaryServiceAllowance $_allowanceBackReceiptRequest
     * @param SpeedyEnumComplementaryServiceAllowance $_allowanceCashOnDelivery
     * @param SpeedyEnumComplementaryServiceAllowance $_allowanceFixedTimeDelivery
     * @param SpeedyEnumComplementaryServiceAllowance $_allowanceInsurance
     * @param SpeedyEnumComplementaryServiceAllowance $_allowanceToBeCalled
     * @param string $_name
     * @param long $_typeId
     * @param dateTime $_deliveryDeadline
     * @param int $_cargoType
     * @param SpeedyEnumComplementaryServiceAllowance $_allowanceDeliveryToFloor
     * @return SpeedyStructResultCourierServiceExt
     */
    public function __construct($_allowanceBackDocumentsRequest = NULL,$_allowanceBackReceiptRequest = NULL,$_allowanceCashOnDelivery = NULL,$_allowanceFixedTimeDelivery = NULL,$_allowanceInsurance = NULL,$_allowanceToBeCalled = NULL,$_name = NULL,$_typeId = NULL,$_deliveryDeadline = NULL,$_cargoType = NULL,$_allowanceDeliveryToFloor = NULL)
    {
        parent::__construct(array('allowanceBackDocumentsRequest'=>$_allowanceBackDocumentsRequest,'allowanceBackReceiptRequest'=>$_allowanceBackReceiptRequest,'allowanceCashOnDelivery'=>$_allowanceCashOnDelivery,'allowanceFixedTimeDelivery'=>$_allowanceFixedTimeDelivery,'allowanceInsurance'=>$_allowanceInsurance,'allowanceToBeCalled'=>$_allowanceToBeCalled,'name'=>$_name,'typeId'=>$_typeId,'deliveryDeadline'=>$_deliveryDeadline,'cargoType'=>$_cargoType,'allowanceDeliveryToFloor'=>$_allowanceDeliveryToFloor),false);
    }
    /**
     * Get allowanceBackDocumentsRequest value
     * @return SpeedyEnumComplementaryServiceAllowance|null
     */
    public function getAllowanceBackDocumentsRequest()
    {
        return $this->allowanceBackDocumentsRequest;
    }
    /**
     * Set allowanceBackDocumentsRequest value
     * @uses SpeedyEnumComplementaryServiceAllowance::valueIsValid()
     * @param SpeedyEnumComplementaryServiceAllowance $_allowanceBackDocumentsRequest the allowanceBackDocumentsRequest
     * @return SpeedyEnumComplementaryServiceAllowance
     */
    public function setAllowanceBackDocumentsRequest($_allowanceBackDocumentsRequest)
    {
        if(!SpeedyEnumComplementaryServiceAllowance::valueIsValid($_allowanceBackDocumentsRequest))
        {
            return false;
        }
        return ($this->allowanceBackDocumentsRequest = $_allowanceBackDocumentsRequest);
    }
    /**
     * Get allowanceBackReceiptRequest value
     * @return SpeedyEnumComplementaryServiceAllowance|null
     */
    public function getAllowanceBackReceiptRequest()
    {
        return $this->allowanceBackReceiptRequest;
    }
    /**
     * Set allowanceBackReceiptRequest value
     * @uses SpeedyEnumComplementaryServiceAllowance::valueIsValid()
     * @param SpeedyEnumComplementaryServiceAllowance $_allowanceBackReceiptRequest the allowanceBackReceiptRequest
     * @return SpeedyEnumComplementaryServiceAllowance
     */
    public function setAllowanceBackReceiptRequest($_allowanceBackReceiptRequest)
    {
        if(!SpeedyEnumComplementaryServiceAllowance::valueIsValid($_allowanceBackReceiptRequest))
        {
            return false;
        }
        return ($this->allowanceBackReceiptRequest = $_allowanceBackReceiptRequest);
    }
    /**
     * Get allowanceCashOnDelivery value
     * @return SpeedyEnumComplementaryServiceAllowance|null
     */
    public function getAllowanceCashOnDelivery()
    {
        return $this->allowanceCashOnDelivery;
    }
    /**
     * Set allowanceCashOnDelivery value
     * @uses SpeedyEnumComplementaryServiceAllowance::valueIsValid()
     * @param SpeedyEnumComplementaryServiceAllowance $_allowanceCashOnDelivery the allowanceCashOnDelivery
     * @return SpeedyEnumComplementaryServiceAllowance
     */
    public function setAllowanceCashOnDelivery($_allowanceCashOnDelivery)
    {
        if(!SpeedyEnumComplementaryServiceAllowance::valueIsValid($_allowanceCashOnDelivery))
        {
            return false;
        }
        return ($this->allowanceCashOnDelivery = $_allowanceCashOnDelivery);
    }
    /**
     * Get allowanceFixedTimeDelivery value
     * @return SpeedyEnumComplementaryServiceAllowance|null
     */
    public function getAllowanceFixedTimeDelivery()
    {
        return $this->allowanceFixedTimeDelivery;
    }
    /**
     * Set allowanceFixedTimeDelivery value
     * @uses SpeedyEnumComplementaryServiceAllowance::valueIsValid()
     * @param SpeedyEnumComplementaryServiceAllowance $_allowanceFixedTimeDelivery the allowanceFixedTimeDelivery
     * @return SpeedyEnumComplementaryServiceAllowance
     */
    public function setAllowanceFixedTimeDelivery($_allowanceFixedTimeDelivery)
    {
        if(!SpeedyEnumComplementaryServiceAllowance::valueIsValid($_allowanceFixedTimeDelivery))
        {
            return false;
        }
        return ($this->allowanceFixedTimeDelivery = $_allowanceFixedTimeDelivery);
    }
    /**
     * Get allowanceInsurance value
     * @return SpeedyEnumComplementaryServiceAllowance|null
     */
    public function getAllowanceInsurance()
    {
        return $this->allowanceInsurance;
    }
    /**
     * Set allowanceInsurance value
     * @uses SpeedyEnumComplementaryServiceAllowance::valueIsValid()
     * @param SpeedyEnumComplementaryServiceAllowance $_allowanceInsurance the allowanceInsurance
     * @return SpeedyEnumComplementaryServiceAllowance
     */
    public function setAllowanceInsurance($_allowanceInsurance)
    {
        if(!SpeedyEnumComplementaryServiceAllowance::valueIsValid($_allowanceInsurance))
        {
            return false;
        }
        return ($this->allowanceInsurance = $_allowanceInsurance);
    }
    /**
     * Get allowanceToBeCalled value
     * @return SpeedyEnumComplementaryServiceAllowance|null
     */
    public function getAllowanceToBeCalled()
    {
        return $this->allowanceToBeCalled;
    }
    /**
     * Set allowanceToBeCalled value
     * @uses SpeedyEnumComplementaryServiceAllowance::valueIsValid()
     * @param SpeedyEnumComplementaryServiceAllowance $_allowanceToBeCalled the allowanceToBeCalled
     * @return SpeedyEnumComplementaryServiceAllowance
     */
    public function setAllowanceToBeCalled($_allowanceToBeCalled)
    {
        if(!SpeedyEnumComplementaryServiceAllowance::valueIsValid($_allowanceToBeCalled))
        {
            return false;
        }
        return ($this->allowanceToBeCalled = $_allowanceToBeCalled);
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
     * Get typeId value
     * @return long|null
     */
    public function getTypeId()
    {
        return $this->typeId;
    }
    /**
     * Set typeId value
     * @param long $_typeId the typeId
     * @return long
     */
    public function setTypeId($_typeId)
    {
        return ($this->typeId = $_typeId);
    }
    /**
     * Get deliveryDeadline value
     * @return dateTime|null
     */
    public function getDeliveryDeadline()
    {
        return $this->deliveryDeadline;
    }
    /**
     * Set deliveryDeadline value
     * @param dateTime $_deliveryDeadline the deliveryDeadline
     * @return dateTime
     */
    public function setDeliveryDeadline($_deliveryDeadline)
    {
        return ($this->deliveryDeadline = $_deliveryDeadline);
    }
    /**
     * Get cargoType value
     * @return int|null
     */
    public function getCargoType()
    {
        return $this->cargoType;
    }
    /**
     * Set cargoType value
     * @param int $_cargoType the cargoType
     * @return int
     */
    public function setCargoType($_cargoType)
    {
        return ($this->cargoType = $_cargoType);
    }
    /**
     * Get allowanceDeliveryToFloor value
     * @return SpeedyEnumComplementaryServiceAllowance|null
     */
    public function getAllowanceDeliveryToFloor()
    {
        return $this->allowanceDeliveryToFloor;
    }
    /**
     * Set allowanceDeliveryToFloor value
     * @uses SpeedyEnumComplementaryServiceAllowance::valueIsValid()
     * @param SpeedyEnumComplementaryServiceAllowance $_allowanceDeliveryToFloor the allowanceDeliveryToFloor
     * @return SpeedyEnumComplementaryServiceAllowance
     */
    public function setAllowanceDeliveryToFloor($_allowanceDeliveryToFloor)
    {
        if(!SpeedyEnumComplementaryServiceAllowance::valueIsValid($_allowanceDeliveryToFloor))
        {
            return false;
        }
        return ($this->allowanceDeliveryToFloor = $_allowanceDeliveryToFloor);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultCourierServiceExt
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
