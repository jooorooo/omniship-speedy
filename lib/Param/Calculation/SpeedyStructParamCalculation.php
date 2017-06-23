<?php
/**
 * File for class SpeedyStructParamCalculation
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructParamCalculation originally named paramCalculation
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructParamCalculation extends SpeedyWsdlClass
{
    /**
     * The amountCodBase
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $amountCodBase;
    /**
     * The amountInsuranceBase
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $amountInsuranceBase;
    /**
     * The autoAdjustTakingDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $autoAdjustTakingDate;
    /**
     * The broughtToOffice
     * @var boolean
     */
    public $broughtToOffice;
    /**
     * The checkTBCOfficeWorkDay
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $checkTBCOfficeWorkDay;
    /**
     * The deferredDeliveryWorkDays
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $deferredDeliveryWorkDays;
    /**
     * The deliveryToFloorNo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $deliveryToFloorNo;
    /**
     * The documents
     * @var boolean
     */
    public $documents;
    /**
     * The fixedTimeDelivery
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var short
     */
    public $fixedTimeDelivery;
    /**
     * The fragile
     * @var boolean
     */
    public $fragile;
    /**
     * The halfWorkDayDelivery
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $halfWorkDayDelivery;
    /**
     * The includeShippingPriceInCod
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $includeShippingPriceInCod;
    /**
     * The officeToBeCalledId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $officeToBeCalledId;
    /**
     * The optionsBeforePayment
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructParamOptionsBeforePayment
     */
    public $optionsBeforePayment;
    /**
     * The palletized
     * @var boolean
     */
    public $palletized;
    /**
     * The parcels
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var SpeedyStructParamParcelInfo
     */
    public $parcels;
    /**
     * The parcelsCount
     * @var int
     */
    public $parcelsCount;
    /**
     * The payCodToThirdParty
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $payCodToThirdParty;
    /**
     * The payerRefId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $payerRefId;
    /**
     * The payerRefInsuranceId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $payerRefInsuranceId;
    /**
     * The payerRefPackingsId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $payerRefPackingsId;
    /**
     * The payerType
     * @var int
     */
    public $payerType;
    /**
     * The payerTypeInsurance
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $payerTypeInsurance;
    /**
     * The payerTypePackings
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $payerTypePackings;
    /**
     * The receiverCountryId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $receiverCountryId;
    /**
     * The receiverId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $receiverId;
    /**
     * The receiverPostCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $receiverPostCode;
    /**
     * The receiverSiteId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $receiverSiteId;
    /**
     * The senderCountryId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $senderCountryId;
    /**
     * The senderId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $senderId;
    /**
     * The senderPostCode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $senderPostCode;
    /**
     * The senderSiteId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $senderSiteId;
    /**
     * The serviceTypeId
     * @var long
     */
    public $serviceTypeId;
    /**
     * The specialDeliveryId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $specialDeliveryId;
    /**
     * The takingDate
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $takingDate;
    /**
     * The toBeCalled
     * @var boolean
     */
    public $toBeCalled;
    /**
     * The weightDeclared
     * @var double
     */
    public $weightDeclared;
    /**
     * The willBringToOfficeId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $willBringToOfficeId;
    /**
     * Constructor method for paramCalculation
     * @see parent::__construct()
     * @param double $_amountCodBase
     * @param double $_amountInsuranceBase
     * @param boolean $_autoAdjustTakingDate
     * @param boolean $_broughtToOffice
     * @param boolean $_checkTBCOfficeWorkDay
     * @param int $_deferredDeliveryWorkDays
     * @param int $_deliveryToFloorNo
     * @param boolean $_documents
     * @param short $_fixedTimeDelivery
     * @param boolean $_fragile
     * @param boolean $_halfWorkDayDelivery
     * @param boolean $_includeShippingPriceInCod
     * @param long $_officeToBeCalledId
     * @param SpeedyStructParamOptionsBeforePayment $_optionsBeforePayment
     * @param boolean $_palletized
     * @param SpeedyStructParamParcelInfo $_parcels
     * @param int $_parcelsCount
     * @param boolean $_payCodToThirdParty
     * @param long $_payerRefId
     * @param long $_payerRefInsuranceId
     * @param long $_payerRefPackingsId
     * @param int $_payerType
     * @param int $_payerTypeInsurance
     * @param int $_payerTypePackings
     * @param long $_receiverCountryId
     * @param long $_receiverId
     * @param string $_receiverPostCode
     * @param long $_receiverSiteId
     * @param long $_senderCountryId
     * @param long $_senderId
     * @param string $_senderPostCode
     * @param long $_senderSiteId
     * @param long $_serviceTypeId
     * @param int $_specialDeliveryId
     * @param dateTime $_takingDate
     * @param boolean $_toBeCalled
     * @param double $_weightDeclared
     * @param long $_willBringToOfficeId
     * @return SpeedyStructParamCalculation
     */
    public function __construct($_amountCodBase = NULL,$_amountInsuranceBase = NULL,$_autoAdjustTakingDate = NULL,$_broughtToOffice = NULL,$_checkTBCOfficeWorkDay = NULL,$_deferredDeliveryWorkDays = NULL,$_deliveryToFloorNo = NULL,$_documents = NULL,$_fixedTimeDelivery = NULL,$_fragile = NULL,$_halfWorkDayDelivery = NULL,$_includeShippingPriceInCod = NULL,$_officeToBeCalledId = NULL,$_optionsBeforePayment = NULL,$_palletized = NULL,$_parcels = NULL,$_parcelsCount = NULL,$_payCodToThirdParty = NULL,$_payerRefId = NULL,$_payerRefInsuranceId = NULL,$_payerRefPackingsId = NULL,$_payerType = NULL,$_payerTypeInsurance = NULL,$_payerTypePackings = NULL,$_receiverCountryId = NULL,$_receiverId = NULL,$_receiverPostCode = NULL,$_receiverSiteId = NULL,$_senderCountryId = NULL,$_senderId = NULL,$_senderPostCode = NULL,$_senderSiteId = NULL,$_serviceTypeId = NULL,$_specialDeliveryId = NULL,$_takingDate = NULL,$_toBeCalled = NULL,$_weightDeclared = NULL,$_willBringToOfficeId = NULL)
    {
        parent::__construct(array('amountCodBase'=>$_amountCodBase,'amountInsuranceBase'=>$_amountInsuranceBase,'autoAdjustTakingDate'=>$_autoAdjustTakingDate,'broughtToOffice'=>$_broughtToOffice,'checkTBCOfficeWorkDay'=>$_checkTBCOfficeWorkDay,'deferredDeliveryWorkDays'=>$_deferredDeliveryWorkDays,'deliveryToFloorNo'=>$_deliveryToFloorNo,'documents'=>$_documents,'fixedTimeDelivery'=>$_fixedTimeDelivery,'fragile'=>$_fragile,'halfWorkDayDelivery'=>$_halfWorkDayDelivery,'includeShippingPriceInCod'=>$_includeShippingPriceInCod,'officeToBeCalledId'=>$_officeToBeCalledId,'optionsBeforePayment'=>$_optionsBeforePayment,'palletized'=>$_palletized,'parcels'=>$_parcels,'parcelsCount'=>$_parcelsCount,'payCodToThirdParty'=>$_payCodToThirdParty,'payerRefId'=>$_payerRefId,'payerRefInsuranceId'=>$_payerRefInsuranceId,'payerRefPackingsId'=>$_payerRefPackingsId,'payerType'=>$_payerType,'payerTypeInsurance'=>$_payerTypeInsurance,'payerTypePackings'=>$_payerTypePackings,'receiverCountryId'=>$_receiverCountryId,'receiverId'=>$_receiverId,'receiverPostCode'=>$_receiverPostCode,'receiverSiteId'=>$_receiverSiteId,'senderCountryId'=>$_senderCountryId,'senderId'=>$_senderId,'senderPostCode'=>$_senderPostCode,'senderSiteId'=>$_senderSiteId,'serviceTypeId'=>$_serviceTypeId,'specialDeliveryId'=>$_specialDeliveryId,'takingDate'=>$_takingDate,'toBeCalled'=>$_toBeCalled,'weightDeclared'=>$_weightDeclared,'willBringToOfficeId'=>$_willBringToOfficeId),false);
    }
    /**
     * Get amountCodBase value
     * @return double|null
     */
    public function getAmountCodBase()
    {
        return $this->amountCodBase;
    }
    /**
     * Set amountCodBase value
     * @param double $_amountCodBase the amountCodBase
     * @return double
     */
    public function setAmountCodBase($_amountCodBase)
    {
        return ($this->amountCodBase = $_amountCodBase);
    }
    /**
     * Get amountInsuranceBase value
     * @return double|null
     */
    public function getAmountInsuranceBase()
    {
        return $this->amountInsuranceBase;
    }
    /**
     * Set amountInsuranceBase value
     * @param double $_amountInsuranceBase the amountInsuranceBase
     * @return double
     */
    public function setAmountInsuranceBase($_amountInsuranceBase)
    {
        return ($this->amountInsuranceBase = $_amountInsuranceBase);
    }
    /**
     * Get autoAdjustTakingDate value
     * @return boolean|null
     */
    public function getAutoAdjustTakingDate()
    {
        return $this->autoAdjustTakingDate;
    }
    /**
     * Set autoAdjustTakingDate value
     * @param boolean $_autoAdjustTakingDate the autoAdjustTakingDate
     * @return boolean
     */
    public function setAutoAdjustTakingDate($_autoAdjustTakingDate)
    {
        return ($this->autoAdjustTakingDate = $_autoAdjustTakingDate);
    }
    /**
     * Get broughtToOffice value
     * @return boolean|null
     */
    public function getBroughtToOffice()
    {
        return $this->broughtToOffice;
    }
    /**
     * Set broughtToOffice value
     * @param boolean $_broughtToOffice the broughtToOffice
     * @return boolean
     */
    public function setBroughtToOffice($_broughtToOffice)
    {
        return ($this->broughtToOffice = $_broughtToOffice);
    }
    /**
     * Get checkTBCOfficeWorkDay value
     * @return boolean|null
     */
    public function getCheckTBCOfficeWorkDay()
    {
        return $this->checkTBCOfficeWorkDay;
    }
    /**
     * Set checkTBCOfficeWorkDay value
     * @param boolean $_checkTBCOfficeWorkDay the checkTBCOfficeWorkDay
     * @return boolean
     */
    public function setCheckTBCOfficeWorkDay($_checkTBCOfficeWorkDay)
    {
        return ($this->checkTBCOfficeWorkDay = $_checkTBCOfficeWorkDay);
    }
    /**
     * Get deferredDeliveryWorkDays value
     * @return int|null
     */
    public function getDeferredDeliveryWorkDays()
    {
        return $this->deferredDeliveryWorkDays;
    }
    /**
     * Set deferredDeliveryWorkDays value
     * @param int $_deferredDeliveryWorkDays the deferredDeliveryWorkDays
     * @return int
     */
    public function setDeferredDeliveryWorkDays($_deferredDeliveryWorkDays)
    {
        return ($this->deferredDeliveryWorkDays = $_deferredDeliveryWorkDays);
    }
    /**
     * Get deliveryToFloorNo value
     * @return int|null
     */
    public function getDeliveryToFloorNo()
    {
        return $this->deliveryToFloorNo;
    }
    /**
     * Set deliveryToFloorNo value
     * @param int $_deliveryToFloorNo the deliveryToFloorNo
     * @return int
     */
    public function setDeliveryToFloorNo($_deliveryToFloorNo)
    {
        return ($this->deliveryToFloorNo = $_deliveryToFloorNo);
    }
    /**
     * Get documents value
     * @return boolean|null
     */
    public function getDocuments()
    {
        return $this->documents;
    }
    /**
     * Set documents value
     * @param boolean $_documents the documents
     * @return boolean
     */
    public function setDocuments($_documents)
    {
        return ($this->documents = $_documents);
    }
    /**
     * Get fixedTimeDelivery value
     * @return short|null
     */
    public function getFixedTimeDelivery()
    {
        return $this->fixedTimeDelivery;
    }
    /**
     * Set fixedTimeDelivery value
     * @param short $_fixedTimeDelivery the fixedTimeDelivery
     * @return short
     */
    public function setFixedTimeDelivery($_fixedTimeDelivery)
    {
        return ($this->fixedTimeDelivery = $_fixedTimeDelivery);
    }
    /**
     * Get fragile value
     * @return boolean|null
     */
    public function getFragile()
    {
        return $this->fragile;
    }
    /**
     * Set fragile value
     * @param boolean $_fragile the fragile
     * @return boolean
     */
    public function setFragile($_fragile)
    {
        return ($this->fragile = $_fragile);
    }
    /**
     * Get halfWorkDayDelivery value
     * @return boolean|null
     */
    public function getHalfWorkDayDelivery()
    {
        return $this->halfWorkDayDelivery;
    }
    /**
     * Set halfWorkDayDelivery value
     * @param boolean $_halfWorkDayDelivery the halfWorkDayDelivery
     * @return boolean
     */
    public function setHalfWorkDayDelivery($_halfWorkDayDelivery)
    {
        return ($this->halfWorkDayDelivery = $_halfWorkDayDelivery);
    }
    /**
     * Get includeShippingPriceInCod value
     * @return boolean|null
     */
    public function getIncludeShippingPriceInCod()
    {
        return $this->includeShippingPriceInCod;
    }
    /**
     * Set includeShippingPriceInCod value
     * @param boolean $_includeShippingPriceInCod the includeShippingPriceInCod
     * @return boolean
     */
    public function setIncludeShippingPriceInCod($_includeShippingPriceInCod)
    {
        return ($this->includeShippingPriceInCod = $_includeShippingPriceInCod);
    }
    /**
     * Get officeToBeCalledId value
     * @return long|null
     */
    public function getOfficeToBeCalledId()
    {
        return $this->officeToBeCalledId;
    }
    /**
     * Set officeToBeCalledId value
     * @param long $_officeToBeCalledId the officeToBeCalledId
     * @return long
     */
    public function setOfficeToBeCalledId($_officeToBeCalledId)
    {
        return ($this->officeToBeCalledId = $_officeToBeCalledId);
    }
    /**
     * Get optionsBeforePayment value
     * @return SpeedyStructParamOptionsBeforePayment|null
     */
    public function getOptionsBeforePayment()
    {
        return $this->optionsBeforePayment;
    }
    /**
     * Set optionsBeforePayment value
     * @param SpeedyStructParamOptionsBeforePayment $_optionsBeforePayment the optionsBeforePayment
     * @return SpeedyStructParamOptionsBeforePayment
     */
    public function setOptionsBeforePayment($_optionsBeforePayment)
    {
        return ($this->optionsBeforePayment = $_optionsBeforePayment);
    }
    /**
     * Get palletized value
     * @return boolean|null
     */
    public function getPalletized()
    {
        return $this->palletized;
    }
    /**
     * Set palletized value
     * @param boolean $_palletized the palletized
     * @return boolean
     */
    public function setPalletized($_palletized)
    {
        return ($this->palletized = $_palletized);
    }
    /**
     * Get parcels value
     * @return SpeedyStructParamParcelInfo|null
     */
    public function getParcels()
    {
        return $this->parcels;
    }
    /**
     * Set parcels value
     * @param SpeedyStructParamParcelInfo $_parcels the parcels
     * @return SpeedyStructParamParcelInfo
     */
    public function setParcels($_parcels)
    {
        return ($this->parcels = $_parcels);
    }
    /**
     * Get parcelsCount value
     * @return int|null
     */
    public function getParcelsCount()
    {
        return $this->parcelsCount;
    }
    /**
     * Set parcelsCount value
     * @param int $_parcelsCount the parcelsCount
     * @return int
     */
    public function setParcelsCount($_parcelsCount)
    {
        return ($this->parcelsCount = $_parcelsCount);
    }
    /**
     * Get payCodToThirdParty value
     * @return boolean|null
     */
    public function getPayCodToThirdParty()
    {
        return $this->payCodToThirdParty;
    }
    /**
     * Set payCodToThirdParty value
     * @param boolean $_payCodToThirdParty the payCodToThirdParty
     * @return boolean
     */
    public function setPayCodToThirdParty($_payCodToThirdParty)
    {
        return ($this->payCodToThirdParty = $_payCodToThirdParty);
    }
    /**
     * Get payerRefId value
     * @return long|null
     */
    public function getPayerRefId()
    {
        return $this->payerRefId;
    }
    /**
     * Set payerRefId value
     * @param long $_payerRefId the payerRefId
     * @return long
     */
    public function setPayerRefId($_payerRefId)
    {
        return ($this->payerRefId = $_payerRefId);
    }
    /**
     * Get payerRefInsuranceId value
     * @return long|null
     */
    public function getPayerRefInsuranceId()
    {
        return $this->payerRefInsuranceId;
    }
    /**
     * Set payerRefInsuranceId value
     * @param long $_payerRefInsuranceId the payerRefInsuranceId
     * @return long
     */
    public function setPayerRefInsuranceId($_payerRefInsuranceId)
    {
        return ($this->payerRefInsuranceId = $_payerRefInsuranceId);
    }
    /**
     * Get payerRefPackingsId value
     * @return long|null
     */
    public function getPayerRefPackingsId()
    {
        return $this->payerRefPackingsId;
    }
    /**
     * Set payerRefPackingsId value
     * @param long $_payerRefPackingsId the payerRefPackingsId
     * @return long
     */
    public function setPayerRefPackingsId($_payerRefPackingsId)
    {
        return ($this->payerRefPackingsId = $_payerRefPackingsId);
    }
    /**
     * Get payerType value
     * @return int|null
     */
    public function getPayerType()
    {
        return $this->payerType;
    }
    /**
     * Set payerType value
     * @param int $_payerType the payerType
     * @return int
     */
    public function setPayerType($_payerType)
    {
        return ($this->payerType = $_payerType);
    }
    /**
     * Get payerTypeInsurance value
     * @return int|null
     */
    public function getPayerTypeInsurance()
    {
        return $this->payerTypeInsurance;
    }
    /**
     * Set payerTypeInsurance value
     * @param int $_payerTypeInsurance the payerTypeInsurance
     * @return int
     */
    public function setPayerTypeInsurance($_payerTypeInsurance)
    {
        return ($this->payerTypeInsurance = $_payerTypeInsurance);
    }
    /**
     * Get payerTypePackings value
     * @return int|null
     */
    public function getPayerTypePackings()
    {
        return $this->payerTypePackings;
    }
    /**
     * Set payerTypePackings value
     * @param int $_payerTypePackings the payerTypePackings
     * @return int
     */
    public function setPayerTypePackings($_payerTypePackings)
    {
        return ($this->payerTypePackings = $_payerTypePackings);
    }
    /**
     * Get receiverCountryId value
     * @return long|null
     */
    public function getReceiverCountryId()
    {
        return $this->receiverCountryId;
    }
    /**
     * Set receiverCountryId value
     * @param long $_receiverCountryId the receiverCountryId
     * @return long
     */
    public function setReceiverCountryId($_receiverCountryId)
    {
        return ($this->receiverCountryId = $_receiverCountryId);
    }
    /**
     * Get receiverId value
     * @return long|null
     */
    public function getReceiverId()
    {
        return $this->receiverId;
    }
    /**
     * Set receiverId value
     * @param long $_receiverId the receiverId
     * @return long
     */
    public function setReceiverId($_receiverId)
    {
        return ($this->receiverId = $_receiverId);
    }
    /**
     * Get receiverPostCode value
     * @return string|null
     */
    public function getReceiverPostCode()
    {
        return $this->receiverPostCode;
    }
    /**
     * Set receiverPostCode value
     * @param string $_receiverPostCode the receiverPostCode
     * @return string
     */
    public function setReceiverPostCode($_receiverPostCode)
    {
        return ($this->receiverPostCode = $_receiverPostCode);
    }
    /**
     * Get receiverSiteId value
     * @return long|null
     */
    public function getReceiverSiteId()
    {
        return $this->receiverSiteId;
    }
    /**
     * Set receiverSiteId value
     * @param long $_receiverSiteId the receiverSiteId
     * @return long
     */
    public function setReceiverSiteId($_receiverSiteId)
    {
        return ($this->receiverSiteId = $_receiverSiteId);
    }
    /**
     * Get senderCountryId value
     * @return long|null
     */
    public function getSenderCountryId()
    {
        return $this->senderCountryId;
    }
    /**
     * Set senderCountryId value
     * @param long $_senderCountryId the senderCountryId
     * @return long
     */
    public function setSenderCountryId($_senderCountryId)
    {
        return ($this->senderCountryId = $_senderCountryId);
    }
    /**
     * Get senderId value
     * @return long|null
     */
    public function getSenderId()
    {
        return $this->senderId;
    }
    /**
     * Set senderId value
     * @param long $_senderId the senderId
     * @return long
     */
    public function setSenderId($_senderId)
    {
        return ($this->senderId = $_senderId);
    }
    /**
     * Get senderPostCode value
     * @return string|null
     */
    public function getSenderPostCode()
    {
        return $this->senderPostCode;
    }
    /**
     * Set senderPostCode value
     * @param string $_senderPostCode the senderPostCode
     * @return string
     */
    public function setSenderPostCode($_senderPostCode)
    {
        return ($this->senderPostCode = $_senderPostCode);
    }
    /**
     * Get senderSiteId value
     * @return long|null
     */
    public function getSenderSiteId()
    {
        return $this->senderSiteId;
    }
    /**
     * Set senderSiteId value
     * @param long $_senderSiteId the senderSiteId
     * @return long
     */
    public function setSenderSiteId($_senderSiteId)
    {
        return ($this->senderSiteId = $_senderSiteId);
    }
    /**
     * Get serviceTypeId value
     * @return long|null
     */
    public function getServiceTypeId()
    {
        return $this->serviceTypeId;
    }
    /**
     * Set serviceTypeId value
     * @param long $_serviceTypeId the serviceTypeId
     * @return long
     */
    public function setServiceTypeId($_serviceTypeId)
    {
        return ($this->serviceTypeId = $_serviceTypeId);
    }
    /**
     * Get specialDeliveryId value
     * @return int|null
     */
    public function getSpecialDeliveryId()
    {
        return $this->specialDeliveryId;
    }
    /**
     * Set specialDeliveryId value
     * @param int $_specialDeliveryId the specialDeliveryId
     * @return int
     */
    public function setSpecialDeliveryId($_specialDeliveryId)
    {
        return ($this->specialDeliveryId = $_specialDeliveryId);
    }
    /**
     * Get takingDate value
     * @return dateTime|null
     */
    public function getTakingDate()
    {
        return $this->takingDate;
    }
    /**
     * Set takingDate value
     * @param dateTime $_takingDate the takingDate
     * @return dateTime
     */
    public function setTakingDate($_takingDate)
    {
        return ($this->takingDate = $_takingDate);
    }
    /**
     * Get toBeCalled value
     * @return boolean|null
     */
    public function getToBeCalled()
    {
        return $this->toBeCalled;
    }
    /**
     * Set toBeCalled value
     * @param boolean $_toBeCalled the toBeCalled
     * @return boolean
     */
    public function setToBeCalled($_toBeCalled)
    {
        return ($this->toBeCalled = $_toBeCalled);
    }
    /**
     * Get weightDeclared value
     * @return double|null
     */
    public function getWeightDeclared()
    {
        return $this->weightDeclared;
    }
    /**
     * Set weightDeclared value
     * @param double $_weightDeclared the weightDeclared
     * @return double
     */
    public function setWeightDeclared($_weightDeclared)
    {
        return ($this->weightDeclared = $_weightDeclared);
    }
    /**
     * Get willBringToOfficeId value
     * @return long|null
     */
    public function getWillBringToOfficeId()
    {
        return $this->willBringToOfficeId;
    }
    /**
     * Set willBringToOfficeId value
     * @param long $_willBringToOfficeId the willBringToOfficeId
     * @return long
     */
    public function setWillBringToOfficeId($_willBringToOfficeId)
    {
        return ($this->willBringToOfficeId = $_willBringToOfficeId);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructParamCalculation
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
