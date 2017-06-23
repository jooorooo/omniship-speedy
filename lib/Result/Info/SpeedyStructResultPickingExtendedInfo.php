<?php
/**
 * File for class SpeedyStructResultPickingExtendedInfo
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultPickingExtendedInfo originally named resultPickingExtendedInfo
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultPickingExtendedInfo extends SpeedyWsdlClass
{
    /**
     * The amounts
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructResultAmounts
     */
    public $amounts;
    /**
     * The backDocumentsRequest
     * @var boolean
     */
    public $backDocumentsRequest;
    /**
     * The backReceiptRequest
     * @var boolean
     */
    public $backReceiptRequest;
    /**
     * The billOfLading
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $billOfLading;
    /**
     * The codPayment
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructCodPayment
     */
    public $codPayment;
    /**
     * The contents
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $contents;
    /**
     * The deadlineDelivery
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $deadlineDelivery;
    /**
     * The deferredDeliveryWorkDays
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $deferredDeliveryWorkDays;
    /**
     * The deliveryInfo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructResultDeliveryInfo
     */
    public $deliveryInfo;
    /**
     * The deliveryToFloorNo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $deliveryToFloorNo;
    /**
     * The discCalc
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructFixedDiscountCardId
     */
    public $discCalc;
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
     * The noteClient
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $noteClient;
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
     * @var SpeedyStructResultOptionsBeforePayment
     */
    public $optionsBeforePayment;
    /**
     * The packing
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $packing;
    /**
     * The packings
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var SpeedyStructResultPackings
     */
    public $packings;
    /**
     * The palletized
     * @var boolean
     */
    public $palletized;
    /**
     * The palletsListCalculation
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $palletsListCalculation;
    /**
     * The palletsListDeclared
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $palletsListDeclared;
    /**
     * The palletsListMeasured
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $palletsListMeasured;
    /**
     * The parcels
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var SpeedyStructResultParcelInfoEx
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
     * The receiver
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructResultClientInfo
     */
    public $receiver;
    /**
     * The redirectBillOfLading
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $redirectBillOfLading;
    /**
     * The ref1
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ref1;
    /**
     * The ref2
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $ref2;
    /**
     * The retMoneyTransferReqAmount
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $retMoneyTransferReqAmount;
    /**
     * The retServicesRequest
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var SpeedyStructResultReturnServiceRequest
     */
    public $retServicesRequest;
    /**
     * The retShipmentRequest
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructResultReturnShipmentRequest
     */
    public $retShipmentRequest;
    /**
     * The retThirdPartyPayer
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $retThirdPartyPayer;
    /**
     * The retToClientId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $retToClientId;
    /**
     * The retToOfficeId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $retToOfficeId;
    /**
     * The returnBillOfLading
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $returnBillOfLading;
    /**
     * The returnVoucher
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructResultReturnVoucher
     */
    public $returnVoucher;
    /**
     * The sender
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructResultClientInfo
     */
    public $sender;
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
     * The weightCalculation
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $weightCalculation;
    /**
     * The weightDeclared
     * @var double
     */
    public $weightDeclared;
    /**
     * The weightMeasured
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var double
     */
    public $weightMeasured;
    /**
     * The willBringToOfficeId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $willBringToOfficeId;
    /**
     * The pickingType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var int
     */
    public $pickingType;
    /**
     * The primaryPickingBOL
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $primaryPickingBOL;
    /**
     * The pendingParcelsDescription
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $pendingParcelsDescription;
    /**
     * The pendingShipmentDescription
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $pendingShipmentDescription;
    /**
     * Constructor method for resultPickingExtendedInfo
     * @see parent::__construct()
     * @param SpeedyStructResultAmounts $_amounts
     * @param boolean $_backDocumentsRequest
     * @param boolean $_backReceiptRequest
     * @param long $_billOfLading
     * @param SpeedyStructCodPayment $_codPayment
     * @param string $_contents
     * @param dateTime $_deadlineDelivery
     * @param int $_deferredDeliveryWorkDays
     * @param SpeedyStructResultDeliveryInfo $_deliveryInfo
     * @param int $_deliveryToFloorNo
     * @param SpeedyStructFixedDiscountCardId $_discCalc
     * @param boolean $_documents
     * @param short $_fixedTimeDelivery
     * @param boolean $_fragile
     * @param string $_noteClient
     * @param long $_officeToBeCalledId
     * @param SpeedyStructResultOptionsBeforePayment $_optionsBeforePayment
     * @param string $_packing
     * @param SpeedyStructResultPackings $_packings
     * @param boolean $_palletized
     * @param string $_palletsListCalculation
     * @param string $_palletsListDeclared
     * @param string $_palletsListMeasured
     * @param SpeedyStructResultParcelInfoEx $_parcels
     * @param int $_parcelsCount
     * @param boolean $_payCodToThirdParty
     * @param long $_payerRefId
     * @param long $_payerRefInsuranceId
     * @param long $_payerRefPackingsId
     * @param int $_payerType
     * @param int $_payerTypeInsurance
     * @param int $_payerTypePackings
     * @param SpeedyStructResultClientInfo $_receiver
     * @param long $_redirectBillOfLading
     * @param string $_ref1
     * @param string $_ref2
     * @param double $_retMoneyTransferReqAmount
     * @param SpeedyStructResultReturnServiceRequest $_retServicesRequest
     * @param SpeedyStructResultReturnShipmentRequest $_retShipmentRequest
     * @param boolean $_retThirdPartyPayer
     * @param long $_retToClientId
     * @param long $_retToOfficeId
     * @param long $_returnBillOfLading
     * @param SpeedyStructResultReturnVoucher $_returnVoucher
     * @param SpeedyStructResultClientInfo $_sender
     * @param long $_serviceTypeId
     * @param int $_specialDeliveryId
     * @param dateTime $_takingDate
     * @param double $_weightCalculation
     * @param double $_weightDeclared
     * @param double $_weightMeasured
     * @param long $_willBringToOfficeId
     * @param int $_pickingType
     * @param long $_primaryPickingBOL
     * @param boolean $_pendingParcelsDescription
     * @param boolean $_pendingShipmentDescription
     * @return SpeedyStructResultPickingExtendedInfo
     */
    public function __construct($_amounts = NULL,$_backDocumentsRequest = NULL,$_backReceiptRequest = NULL,$_billOfLading = NULL,$_codPayment = NULL,$_contents = NULL,$_deadlineDelivery = NULL,$_deferredDeliveryWorkDays = NULL,$_deliveryInfo = NULL,$_deliveryToFloorNo = NULL,$_discCalc = NULL,$_documents = NULL,$_fixedTimeDelivery = NULL,$_fragile = NULL,$_noteClient = NULL,$_officeToBeCalledId = NULL,$_optionsBeforePayment = NULL,$_packing = NULL,$_packings = NULL,$_palletized = NULL,$_palletsListCalculation = NULL,$_palletsListDeclared = NULL,$_palletsListMeasured = NULL,$_parcels = NULL,$_parcelsCount = NULL,$_payCodToThirdParty = NULL,$_payerRefId = NULL,$_payerRefInsuranceId = NULL,$_payerRefPackingsId = NULL,$_payerType = NULL,$_payerTypeInsurance = NULL,$_payerTypePackings = NULL,$_receiver = NULL,$_redirectBillOfLading = NULL,$_ref1 = NULL,$_ref2 = NULL,$_retMoneyTransferReqAmount = NULL,$_retServicesRequest = NULL,$_retShipmentRequest = NULL,$_retThirdPartyPayer = NULL,$_retToClientId = NULL,$_retToOfficeId = NULL,$_returnBillOfLading = NULL,$_returnVoucher = NULL,$_sender = NULL,$_serviceTypeId = NULL,$_specialDeliveryId = NULL,$_takingDate = NULL,$_weightCalculation = NULL,$_weightDeclared = NULL,$_weightMeasured = NULL,$_willBringToOfficeId = NULL,$_pickingType = NULL,$_primaryPickingBOL = NULL,$_pendingParcelsDescription = NULL,$_pendingShipmentDescription = NULL)
    {
        parent::__construct(array('amounts'=>$_amounts,'backDocumentsRequest'=>$_backDocumentsRequest,'backReceiptRequest'=>$_backReceiptRequest,'billOfLading'=>$_billOfLading,'codPayment'=>$_codPayment,'contents'=>$_contents,'deadlineDelivery'=>$_deadlineDelivery,'deferredDeliveryWorkDays'=>$_deferredDeliveryWorkDays,'deliveryInfo'=>$_deliveryInfo,'deliveryToFloorNo'=>$_deliveryToFloorNo,'discCalc'=>$_discCalc,'documents'=>$_documents,'fixedTimeDelivery'=>$_fixedTimeDelivery,'fragile'=>$_fragile,'noteClient'=>$_noteClient,'officeToBeCalledId'=>$_officeToBeCalledId,'optionsBeforePayment'=>$_optionsBeforePayment,'packing'=>$_packing,'packings'=>$_packings,'palletized'=>$_palletized,'palletsListCalculation'=>$_palletsListCalculation,'palletsListDeclared'=>$_palletsListDeclared,'palletsListMeasured'=>$_palletsListMeasured,'parcels'=>$_parcels,'parcelsCount'=>$_parcelsCount,'payCodToThirdParty'=>$_payCodToThirdParty,'payerRefId'=>$_payerRefId,'payerRefInsuranceId'=>$_payerRefInsuranceId,'payerRefPackingsId'=>$_payerRefPackingsId,'payerType'=>$_payerType,'payerTypeInsurance'=>$_payerTypeInsurance,'payerTypePackings'=>$_payerTypePackings,'receiver'=>$_receiver,'redirectBillOfLading'=>$_redirectBillOfLading,'ref1'=>$_ref1,'ref2'=>$_ref2,'retMoneyTransferReqAmount'=>$_retMoneyTransferReqAmount,'retServicesRequest'=>$_retServicesRequest,'retShipmentRequest'=>$_retShipmentRequest,'retThirdPartyPayer'=>$_retThirdPartyPayer,'retToClientId'=>$_retToClientId,'retToOfficeId'=>$_retToOfficeId,'returnBillOfLading'=>$_returnBillOfLading,'returnVoucher'=>$_returnVoucher,'sender'=>$_sender,'serviceTypeId'=>$_serviceTypeId,'specialDeliveryId'=>$_specialDeliveryId,'takingDate'=>$_takingDate,'weightCalculation'=>$_weightCalculation,'weightDeclared'=>$_weightDeclared,'weightMeasured'=>$_weightMeasured,'willBringToOfficeId'=>$_willBringToOfficeId,'pickingType'=>$_pickingType,'primaryPickingBOL'=>$_primaryPickingBOL,'pendingParcelsDescription'=>$_pendingParcelsDescription,'pendingShipmentDescription'=>$_pendingShipmentDescription),false);
    }
    /**
     * Get amounts value
     * @return SpeedyStructResultAmounts|null
     */
    public function getAmounts()
    {
        return $this->amounts;
    }
    /**
     * Set amounts value
     * @param SpeedyStructResultAmounts $_amounts the amounts
     * @return SpeedyStructResultAmounts
     */
    public function setAmounts($_amounts)
    {
        return ($this->amounts = $_amounts);
    }
    /**
     * Get backDocumentsRequest value
     * @return boolean|null
     */
    public function getBackDocumentsRequest()
    {
        return $this->backDocumentsRequest;
    }
    /**
     * Set backDocumentsRequest value
     * @param boolean $_backDocumentsRequest the backDocumentsRequest
     * @return boolean
     */
    public function setBackDocumentsRequest($_backDocumentsRequest)
    {
        return ($this->backDocumentsRequest = $_backDocumentsRequest);
    }
    /**
     * Get backReceiptRequest value
     * @return boolean|null
     */
    public function getBackReceiptRequest()
    {
        return $this->backReceiptRequest;
    }
    /**
     * Set backReceiptRequest value
     * @param boolean $_backReceiptRequest the backReceiptRequest
     * @return boolean
     */
    public function setBackReceiptRequest($_backReceiptRequest)
    {
        return ($this->backReceiptRequest = $_backReceiptRequest);
    }
    /**
     * Get billOfLading value
     * @return long|null
     */
    public function getBillOfLading()
    {
        return $this->billOfLading;
    }
    /**
     * Set billOfLading value
     * @param long $_billOfLading the billOfLading
     * @return long
     */
    public function setBillOfLading($_billOfLading)
    {
        return ($this->billOfLading = $_billOfLading);
    }
    /**
     * Get codPayment value
     * @return SpeedyStructCodPayment|null
     */
    public function getCodPayment()
    {
        return $this->codPayment;
    }
    /**
     * Set codPayment value
     * @param SpeedyStructCodPayment $_codPayment the codPayment
     * @return SpeedyStructCodPayment
     */
    public function setCodPayment($_codPayment)
    {
        return ($this->codPayment = $_codPayment);
    }
    /**
     * Get contents value
     * @return string|null
     */
    public function getContents()
    {
        return $this->contents;
    }
    /**
     * Set contents value
     * @param string $_contents the contents
     * @return string
     */
    public function setContents($_contents)
    {
        return ($this->contents = $_contents);
    }
    /**
     * Get deadlineDelivery value
     * @return dateTime|null
     */
    public function getDeadlineDelivery()
    {
        return $this->deadlineDelivery;
    }
    /**
     * Set deadlineDelivery value
     * @param dateTime $_deadlineDelivery the deadlineDelivery
     * @return dateTime
     */
    public function setDeadlineDelivery($_deadlineDelivery)
    {
        return ($this->deadlineDelivery = $_deadlineDelivery);
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
     * Get deliveryInfo value
     * @return SpeedyStructResultDeliveryInfo|null
     */
    public function getDeliveryInfo()
    {
        return $this->deliveryInfo;
    }
    /**
     * Set deliveryInfo value
     * @param SpeedyStructResultDeliveryInfo $_deliveryInfo the deliveryInfo
     * @return SpeedyStructResultDeliveryInfo
     */
    public function setDeliveryInfo($_deliveryInfo)
    {
        return ($this->deliveryInfo = $_deliveryInfo);
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
     * Get discCalc value
     * @return SpeedyStructFixedDiscountCardId|null
     */
    public function getDiscCalc()
    {
        return $this->discCalc;
    }
    /**
     * Set discCalc value
     * @param SpeedyStructFixedDiscountCardId $_discCalc the discCalc
     * @return SpeedyStructFixedDiscountCardId
     */
    public function setDiscCalc($_discCalc)
    {
        return ($this->discCalc = $_discCalc);
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
     * Get noteClient value
     * @return string|null
     */
    public function getNoteClient()
    {
        return $this->noteClient;
    }
    /**
     * Set noteClient value
     * @param string $_noteClient the noteClient
     * @return string
     */
    public function setNoteClient($_noteClient)
    {
        return ($this->noteClient = $_noteClient);
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
     * @return SpeedyStructResultOptionsBeforePayment|null
     */
    public function getOptionsBeforePayment()
    {
        return $this->optionsBeforePayment;
    }
    /**
     * Set optionsBeforePayment value
     * @param SpeedyStructResultOptionsBeforePayment $_optionsBeforePayment the optionsBeforePayment
     * @return SpeedyStructResultOptionsBeforePayment
     */
    public function setOptionsBeforePayment($_optionsBeforePayment)
    {
        return ($this->optionsBeforePayment = $_optionsBeforePayment);
    }
    /**
     * Get packing value
     * @return string|null
     */
    public function getPacking()
    {
        return $this->packing;
    }
    /**
     * Set packing value
     * @param string $_packing the packing
     * @return string
     */
    public function setPacking($_packing)
    {
        return ($this->packing = $_packing);
    }
    /**
     * Get packings value
     * @return SpeedyStructResultPackings|null
     */
    public function getPackings()
    {
        return $this->packings;
    }
    /**
     * Set packings value
     * @param SpeedyStructResultPackings $_packings the packings
     * @return SpeedyStructResultPackings
     */
    public function setPackings($_packings)
    {
        return ($this->packings = $_packings);
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
     * Get palletsListCalculation value
     * @return string|null
     */
    public function getPalletsListCalculation()
    {
        return $this->palletsListCalculation;
    }
    /**
     * Set palletsListCalculation value
     * @param string $_palletsListCalculation the palletsListCalculation
     * @return string
     */
    public function setPalletsListCalculation($_palletsListCalculation)
    {
        return ($this->palletsListCalculation = $_palletsListCalculation);
    }
    /**
     * Get palletsListDeclared value
     * @return string|null
     */
    public function getPalletsListDeclared()
    {
        return $this->palletsListDeclared;
    }
    /**
     * Set palletsListDeclared value
     * @param string $_palletsListDeclared the palletsListDeclared
     * @return string
     */
    public function setPalletsListDeclared($_palletsListDeclared)
    {
        return ($this->palletsListDeclared = $_palletsListDeclared);
    }
    /**
     * Get palletsListMeasured value
     * @return string|null
     */
    public function getPalletsListMeasured()
    {
        return $this->palletsListMeasured;
    }
    /**
     * Set palletsListMeasured value
     * @param string $_palletsListMeasured the palletsListMeasured
     * @return string
     */
    public function setPalletsListMeasured($_palletsListMeasured)
    {
        return ($this->palletsListMeasured = $_palletsListMeasured);
    }
    /**
     * Get parcels value
     * @return SpeedyStructResultParcelInfoEx|null
     */
    public function getParcels()
    {
        return $this->parcels;
    }
    /**
     * Set parcels value
     * @param SpeedyStructResultParcelInfoEx $_parcels the parcels
     * @return SpeedyStructResultParcelInfoEx
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
     * Get receiver value
     * @return SpeedyStructResultClientInfo|null
     */
    public function getReceiver()
    {
        return $this->receiver;
    }
    /**
     * Set receiver value
     * @param SpeedyStructResultClientInfo $_receiver the receiver
     * @return SpeedyStructResultClientInfo
     */
    public function setReceiver($_receiver)
    {
        return ($this->receiver = $_receiver);
    }
    /**
     * Get redirectBillOfLading value
     * @return long|null
     */
    public function getRedirectBillOfLading()
    {
        return $this->redirectBillOfLading;
    }
    /**
     * Set redirectBillOfLading value
     * @param long $_redirectBillOfLading the redirectBillOfLading
     * @return long
     */
    public function setRedirectBillOfLading($_redirectBillOfLading)
    {
        return ($this->redirectBillOfLading = $_redirectBillOfLading);
    }
    /**
     * Get ref1 value
     * @return string|null
     */
    public function getRef1()
    {
        return $this->ref1;
    }
    /**
     * Set ref1 value
     * @param string $_ref1 the ref1
     * @return string
     */
    public function setRef1($_ref1)
    {
        return ($this->ref1 = $_ref1);
    }
    /**
     * Get ref2 value
     * @return string|null
     */
    public function getRef2()
    {
        return $this->ref2;
    }
    /**
     * Set ref2 value
     * @param string $_ref2 the ref2
     * @return string
     */
    public function setRef2($_ref2)
    {
        return ($this->ref2 = $_ref2);
    }
    /**
     * Get retMoneyTransferReqAmount value
     * @return double|null
     */
    public function getRetMoneyTransferReqAmount()
    {
        return $this->retMoneyTransferReqAmount;
    }
    /**
     * Set retMoneyTransferReqAmount value
     * @param double $_retMoneyTransferReqAmount the retMoneyTransferReqAmount
     * @return double
     */
    public function setRetMoneyTransferReqAmount($_retMoneyTransferReqAmount)
    {
        return ($this->retMoneyTransferReqAmount = $_retMoneyTransferReqAmount);
    }
    /**
     * Get retServicesRequest value
     * @return SpeedyStructResultReturnServiceRequest|null
     */
    public function getRetServicesRequest()
    {
        return $this->retServicesRequest;
    }
    /**
     * Set retServicesRequest value
     * @param SpeedyStructResultReturnServiceRequest $_retServicesRequest the retServicesRequest
     * @return SpeedyStructResultReturnServiceRequest
     */
    public function setRetServicesRequest($_retServicesRequest)
    {
        return ($this->retServicesRequest = $_retServicesRequest);
    }
    /**
     * Get retShipmentRequest value
     * @return SpeedyStructResultReturnShipmentRequest|null
     */
    public function getRetShipmentRequest()
    {
        return $this->retShipmentRequest;
    }
    /**
     * Set retShipmentRequest value
     * @param SpeedyStructResultReturnShipmentRequest $_retShipmentRequest the retShipmentRequest
     * @return SpeedyStructResultReturnShipmentRequest
     */
    public function setRetShipmentRequest($_retShipmentRequest)
    {
        return ($this->retShipmentRequest = $_retShipmentRequest);
    }
    /**
     * Get retThirdPartyPayer value
     * @return boolean|null
     */
    public function getRetThirdPartyPayer()
    {
        return $this->retThirdPartyPayer;
    }
    /**
     * Set retThirdPartyPayer value
     * @param boolean $_retThirdPartyPayer the retThirdPartyPayer
     * @return boolean
     */
    public function setRetThirdPartyPayer($_retThirdPartyPayer)
    {
        return ($this->retThirdPartyPayer = $_retThirdPartyPayer);
    }
    /**
     * Get retToClientId value
     * @return long|null
     */
    public function getRetToClientId()
    {
        return $this->retToClientId;
    }
    /**
     * Set retToClientId value
     * @param long $_retToClientId the retToClientId
     * @return long
     */
    public function setRetToClientId($_retToClientId)
    {
        return ($this->retToClientId = $_retToClientId);
    }
    /**
     * Get retToOfficeId value
     * @return long|null
     */
    public function getRetToOfficeId()
    {
        return $this->retToOfficeId;
    }
    /**
     * Set retToOfficeId value
     * @param long $_retToOfficeId the retToOfficeId
     * @return long
     */
    public function setRetToOfficeId($_retToOfficeId)
    {
        return ($this->retToOfficeId = $_retToOfficeId);
    }
    /**
     * Get returnBillOfLading value
     * @return long|null
     */
    public function getReturnBillOfLading()
    {
        return $this->returnBillOfLading;
    }
    /**
     * Set returnBillOfLading value
     * @param long $_returnBillOfLading the returnBillOfLading
     * @return long
     */
    public function setReturnBillOfLading($_returnBillOfLading)
    {
        return ($this->returnBillOfLading = $_returnBillOfLading);
    }
    /**
     * Get returnVoucher value
     * @return SpeedyStructResultReturnVoucher|null
     */
    public function getReturnVoucher()
    {
        return $this->returnVoucher;
    }
    /**
     * Set returnVoucher value
     * @param SpeedyStructResultReturnVoucher $_returnVoucher the returnVoucher
     * @return SpeedyStructResultReturnVoucher
     */
    public function setReturnVoucher($_returnVoucher)
    {
        return ($this->returnVoucher = $_returnVoucher);
    }
    /**
     * Get sender value
     * @return SpeedyStructResultClientInfo|null
     */
    public function getSender()
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param SpeedyStructResultClientInfo $_sender the sender
     * @return SpeedyStructResultClientInfo
     */
    public function setSender($_sender)
    {
        return ($this->sender = $_sender);
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
     * Get weightCalculation value
     * @return double|null
     */
    public function getWeightCalculation()
    {
        return $this->weightCalculation;
    }
    /**
     * Set weightCalculation value
     * @param double $_weightCalculation the weightCalculation
     * @return double
     */
    public function setWeightCalculation($_weightCalculation)
    {
        return ($this->weightCalculation = $_weightCalculation);
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
     * Get weightMeasured value
     * @return double|null
     */
    public function getWeightMeasured()
    {
        return $this->weightMeasured;
    }
    /**
     * Set weightMeasured value
     * @param double $_weightMeasured the weightMeasured
     * @return double
     */
    public function setWeightMeasured($_weightMeasured)
    {
        return ($this->weightMeasured = $_weightMeasured);
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
     * Get pickingType value
     * @return int|null
     */
    public function getPickingType()
    {
        return $this->pickingType;
    }
    /**
     * Set pickingType value
     * @param int $_pickingType the pickingType
     * @return int
     */
    public function setPickingType($_pickingType)
    {
        return ($this->pickingType = $_pickingType);
    }
    /**
     * Get primaryPickingBOL value
     * @return long|null
     */
    public function getPrimaryPickingBOL()
    {
        return $this->primaryPickingBOL;
    }
    /**
     * Set primaryPickingBOL value
     * @param long $_primaryPickingBOL the primaryPickingBOL
     * @return long
     */
    public function setPrimaryPickingBOL($_primaryPickingBOL)
    {
        return ($this->primaryPickingBOL = $_primaryPickingBOL);
    }
    /**
     * Get pendingParcelsDescription value
     * @return boolean|null
     */
    public function getPendingParcelsDescription()
    {
        return $this->pendingParcelsDescription;
    }
    /**
     * Set pendingParcelsDescription value
     * @param boolean $_pendingParcelsDescription the pendingParcelsDescription
     * @return boolean
     */
    public function setPendingParcelsDescription($_pendingParcelsDescription)
    {
        return ($this->pendingParcelsDescription = $_pendingParcelsDescription);
    }
    /**
     * Get pendingShipmentDescription value
     * @return boolean|null
     */
    public function getPendingShipmentDescription()
    {
        return $this->pendingShipmentDescription;
    }
    /**
     * Set pendingShipmentDescription value
     * @param boolean $_pendingShipmentDescription the pendingShipmentDescription
     * @return boolean
     */
    public function setPendingShipmentDescription($_pendingShipmentDescription)
    {
        return ($this->pendingShipmentDescription = $_pendingShipmentDescription);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultPickingExtendedInfo
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
