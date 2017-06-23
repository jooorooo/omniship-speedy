<?php
/**
 * File for class SpeedyStructParamPicking
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructParamPicking originally named paramPicking
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructParamPicking extends SpeedyWsdlClass
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
     * The clientSystemId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $clientSystemId;
    /**
     * The contents
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $contents;
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
     * @var SpeedyStructParamOptionsBeforePayment
     */
    public $optionsBeforePayment;
    /**
     * The packId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $packId;
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
     * @var SpeedyStructParamPackings
     */
    public $packings;
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
     * The receiver
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructParamClientData
     */
    public $receiver;
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
     * @var SpeedyStructParamReturnServiceRequest
     */
    public $retServicesRequest;
    /**
     * The retShipmentRequest
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructParamReturnShipmentRequest
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
     * The returnVoucher
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructParamReturnVoucher
     */
    public $returnVoucher;
    /**
     * The sender
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructParamClientData
     */
    public $sender;
    /**
     * The serviceTypeId
     * @var long
     */
    public $serviceTypeId;
    /**
     * The size
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var SpeedyStructSize
     */
    public $size;
    /**
     * The skipAutomaticParcelsCreation
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var boolean
     */
    public $skipAutomaticParcelsCreation;
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
     * The weightDeclared
     * @var double
     */
    public $weightDeclared;
    /**
     * The willBringToOffice
     * @var boolean
     */
    public $willBringToOffice;
    /**
     * The willBringToOfficeId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $willBringToOfficeId;
    /**
     * Constructor method for paramPicking
     * @see parent::__construct()
     * @param double $_amountCodBase
     * @param double $_amountInsuranceBase
     * @param boolean $_backDocumentsRequest
     * @param boolean $_backReceiptRequest
     * @param long $_billOfLading
     * @param long $_clientSystemId
     * @param string $_contents
     * @param int $_deferredDeliveryWorkDays
     * @param int $_deliveryToFloorNo
     * @param SpeedyStructFixedDiscountCardId $_discCalc
     * @param boolean $_documents
     * @param short $_fixedTimeDelivery
     * @param boolean $_fragile
     * @param boolean $_halfWorkDayDelivery
     * @param boolean $_includeShippingPriceInCod
     * @param string $_noteClient
     * @param long $_officeToBeCalledId
     * @param SpeedyStructParamOptionsBeforePayment $_optionsBeforePayment
     * @param long $_packId
     * @param string $_packing
     * @param SpeedyStructParamPackings $_packings
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
     * @param boolean $_pendingParcelsDescription
     * @param boolean $_pendingShipmentDescription
     * @param SpeedyStructParamClientData $_receiver
     * @param string $_ref1
     * @param string $_ref2
     * @param double $_retMoneyTransferReqAmount
     * @param SpeedyStructParamReturnServiceRequest $_retServicesRequest
     * @param SpeedyStructParamReturnShipmentRequest $_retShipmentRequest
     * @param boolean $_retThirdPartyPayer
     * @param long $_retToClientId
     * @param long $_retToOfficeId
     * @param SpeedyStructParamReturnVoucher $_returnVoucher
     * @param SpeedyStructParamClientData $_sender
     * @param long $_serviceTypeId
     * @param SpeedyStructSize $_size
     * @param boolean $_skipAutomaticParcelsCreation
     * @param int $_specialDeliveryId
     * @param dateTime $_takingDate
     * @param double $_weightDeclared
     * @param boolean $_willBringToOffice
     * @param long $_willBringToOfficeId
     * @return SpeedyStructParamPicking
     */
    public function __construct($_amountCodBase = NULL,$_amountInsuranceBase = NULL,$_backDocumentsRequest = NULL,$_backReceiptRequest = NULL,$_billOfLading = NULL,$_clientSystemId = NULL,$_contents = NULL,$_deferredDeliveryWorkDays = NULL,$_deliveryToFloorNo = NULL,$_discCalc = NULL,$_documents = NULL,$_fixedTimeDelivery = NULL,$_fragile = NULL,$_halfWorkDayDelivery = NULL,$_includeShippingPriceInCod = NULL,$_noteClient = NULL,$_officeToBeCalledId = NULL,$_optionsBeforePayment = NULL,$_packId = NULL,$_packing = NULL,$_packings = NULL,$_palletized = NULL,$_parcels = NULL,$_parcelsCount = NULL,$_payCodToThirdParty = NULL,$_payerRefId = NULL,$_payerRefInsuranceId = NULL,$_payerRefPackingsId = NULL,$_payerType = NULL,$_payerTypeInsurance = NULL,$_payerTypePackings = NULL,$_pendingParcelsDescription = NULL,$_pendingShipmentDescription = NULL,$_receiver = NULL,$_ref1 = NULL,$_ref2 = NULL,$_retMoneyTransferReqAmount = NULL,$_retServicesRequest = NULL,$_retShipmentRequest = NULL,$_retThirdPartyPayer = NULL,$_retToClientId = NULL,$_retToOfficeId = NULL,$_returnVoucher = NULL,$_sender = NULL,$_serviceTypeId = NULL,$_size = NULL,$_skipAutomaticParcelsCreation = NULL,$_specialDeliveryId = NULL,$_takingDate = NULL,$_weightDeclared = NULL,$_willBringToOffice = NULL,$_willBringToOfficeId = NULL)
    {
        parent::__construct(array('amountCodBase'=>$_amountCodBase,'amountInsuranceBase'=>$_amountInsuranceBase,'backDocumentsRequest'=>$_backDocumentsRequest,'backReceiptRequest'=>$_backReceiptRequest,'billOfLading'=>$_billOfLading,'clientSystemId'=>$_clientSystemId,'contents'=>$_contents,'deferredDeliveryWorkDays'=>$_deferredDeliveryWorkDays,'deliveryToFloorNo'=>$_deliveryToFloorNo,'discCalc'=>$_discCalc,'documents'=>$_documents,'fixedTimeDelivery'=>$_fixedTimeDelivery,'fragile'=>$_fragile,'halfWorkDayDelivery'=>$_halfWorkDayDelivery,'includeShippingPriceInCod'=>$_includeShippingPriceInCod,'noteClient'=>$_noteClient,'officeToBeCalledId'=>$_officeToBeCalledId,'optionsBeforePayment'=>$_optionsBeforePayment,'packId'=>$_packId,'packing'=>$_packing,'packings'=>$_packings,'palletized'=>$_palletized,'parcels'=>$_parcels,'parcelsCount'=>$_parcelsCount,'payCodToThirdParty'=>$_payCodToThirdParty,'payerRefId'=>$_payerRefId,'payerRefInsuranceId'=>$_payerRefInsuranceId,'payerRefPackingsId'=>$_payerRefPackingsId,'payerType'=>$_payerType,'payerTypeInsurance'=>$_payerTypeInsurance,'payerTypePackings'=>$_payerTypePackings,'pendingParcelsDescription'=>$_pendingParcelsDescription,'pendingShipmentDescription'=>$_pendingShipmentDescription,'receiver'=>$_receiver,'ref1'=>$_ref1,'ref2'=>$_ref2,'retMoneyTransferReqAmount'=>$_retMoneyTransferReqAmount,'retServicesRequest'=>$_retServicesRequest,'retShipmentRequest'=>$_retShipmentRequest,'retThirdPartyPayer'=>$_retThirdPartyPayer,'retToClientId'=>$_retToClientId,'retToOfficeId'=>$_retToOfficeId,'returnVoucher'=>$_returnVoucher,'sender'=>$_sender,'serviceTypeId'=>$_serviceTypeId,'size'=>$_size,'skipAutomaticParcelsCreation'=>$_skipAutomaticParcelsCreation,'specialDeliveryId'=>$_specialDeliveryId,'takingDate'=>$_takingDate,'weightDeclared'=>$_weightDeclared,'willBringToOffice'=>$_willBringToOffice,'willBringToOfficeId'=>$_willBringToOfficeId),false);
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
     * Get clientSystemId value
     * @return long|null
     */
    public function getClientSystemId()
    {
        return $this->clientSystemId;
    }
    /**
     * Set clientSystemId value
     * @param long $_clientSystemId the clientSystemId
     * @return long
     */
    public function setClientSystemId($_clientSystemId)
    {
        return ($this->clientSystemId = $_clientSystemId);
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
     * Get packId value
     * @return long|null
     */
    public function getPackId()
    {
        return $this->packId;
    }
    /**
     * Set packId value
     * @param long $_packId the packId
     * @return long
     */
    public function setPackId($_packId)
    {
        return ($this->packId = $_packId);
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
     * @return SpeedyStructParamPackings|null
     */
    public function getPackings()
    {
        return $this->packings;
    }
    /**
     * Set packings value
     * @param SpeedyStructParamPackings $_packings the packings
     * @return SpeedyStructParamPackings
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
     * Get receiver value
     * @return SpeedyStructParamClientData|null
     */
    public function getReceiver()
    {
        return $this->receiver;
    }
    /**
     * Set receiver value
     * @param SpeedyStructParamClientData $_receiver the receiver
     * @return SpeedyStructParamClientData
     */
    public function setReceiver($_receiver)
    {
        return ($this->receiver = $_receiver);
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
     * @return SpeedyStructParamReturnServiceRequest|null
     */
    public function getRetServicesRequest()
    {
        return $this->retServicesRequest;
    }
    /**
     * Set retServicesRequest value
     * @param SpeedyStructParamReturnServiceRequest $_retServicesRequest the retServicesRequest
     * @return SpeedyStructParamReturnServiceRequest
     */
    public function setRetServicesRequest($_retServicesRequest)
    {
        return ($this->retServicesRequest = $_retServicesRequest);
    }
    /**
     * Get retShipmentRequest value
     * @return SpeedyStructParamReturnShipmentRequest|null
     */
    public function getRetShipmentRequest()
    {
        return $this->retShipmentRequest;
    }
    /**
     * Set retShipmentRequest value
     * @param SpeedyStructParamReturnShipmentRequest $_retShipmentRequest the retShipmentRequest
     * @return SpeedyStructParamReturnShipmentRequest
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
     * Get returnVoucher value
     * @return SpeedyStructParamReturnVoucher|null
     */
    public function getReturnVoucher()
    {
        return $this->returnVoucher;
    }
    /**
     * Set returnVoucher value
     * @param SpeedyStructParamReturnVoucher $_returnVoucher the returnVoucher
     * @return SpeedyStructParamReturnVoucher
     */
    public function setReturnVoucher($_returnVoucher)
    {
        return ($this->returnVoucher = $_returnVoucher);
    }
    /**
     * Get sender value
     * @return SpeedyStructParamClientData|null
     */
    public function getSender()
    {
        return $this->sender;
    }
    /**
     * Set sender value
     * @param SpeedyStructParamClientData $_sender the sender
     * @return SpeedyStructParamClientData
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
     * Get size value
     * @return SpeedyStructSize|null
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * Set size value
     * @param SpeedyStructSize $_size the size
     * @return SpeedyStructSize
     */
    public function setSize($_size)
    {
        return ($this->size = $_size);
    }
    /**
     * Get skipAutomaticParcelsCreation value
     * @return boolean|null
     */
    public function getSkipAutomaticParcelsCreation()
    {
        return $this->skipAutomaticParcelsCreation;
    }
    /**
     * Set skipAutomaticParcelsCreation value
     * @param boolean $_skipAutomaticParcelsCreation the skipAutomaticParcelsCreation
     * @return boolean
     */
    public function setSkipAutomaticParcelsCreation($_skipAutomaticParcelsCreation)
    {
        return ($this->skipAutomaticParcelsCreation = $_skipAutomaticParcelsCreation);
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
     * Get willBringToOffice value
     * @return boolean|null
     */
    public function getWillBringToOffice()
    {
        return $this->willBringToOffice;
    }
    /**
     * Set willBringToOffice value
     * @param boolean $_willBringToOffice the willBringToOffice
     * @return boolean
     */
    public function setWillBringToOffice($_willBringToOffice)
    {
        return ($this->willBringToOffice = $_willBringToOffice);
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
     * @return SpeedyStructParamPicking
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
