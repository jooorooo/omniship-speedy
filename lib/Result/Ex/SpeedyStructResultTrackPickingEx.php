<?php
/**
 * File for class SpeedyStructResultTrackPickingEx
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultTrackPickingEx originally named resultTrackPickingEx
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultTrackPickingEx extends SpeedyWsdlClass
{
    /**
     * The consignee
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $consignee;
    /**
     * The moment
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $moment;
    /**
     * The operationCode
     * @var int
     */
    public $operationCode;
    /**
     * The operationComment
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $operationComment;
    /**
     * The operationDescription
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $operationDescription;
    /**
     * The redirectBillOfLading
     * @var long
     */
    public $redirectBillOfLading;
    /**
     * The returnBillOfLading
     * @var long
     */
    public $returnBillOfLading;
    /**
     * The siteName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $siteName;
    /**
     * The siteType
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $siteType;
    /**
     * The signatureImage
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $signatureImage;
    /**
     * The barcode
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $barcode;
    /**
     * The foreignParcelNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $foreignParcelNumber;
    /**
     * The exceptionCodes
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var int
     */
    public $exceptionCodes;
    /**
     * The foreignParcelNumbersList
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var string
     */
    public $foreignParcelNumbersList;
    /**
     * Constructor method for resultTrackPickingEx
     * @see parent::__construct()
     * @param string $_consignee
     * @param dateTime $_moment
     * @param int $_operationCode
     * @param string $_operationComment
     * @param string $_operationDescription
     * @param long $_redirectBillOfLading
     * @param long $_returnBillOfLading
     * @param string $_siteName
     * @param string $_siteType
     * @param string $_signatureImage
     * @param long $_barcode
     * @param string $_foreignParcelNumber
     * @param int $_exceptionCodes
     * @param string $_foreignParcelNumbersList
     * @return SpeedyStructResultTrackPickingEx
     */
    public function __construct($_consignee = NULL,$_moment = NULL,$_operationCode = NULL,$_operationComment = NULL,$_operationDescription = NULL,$_redirectBillOfLading = NULL,$_returnBillOfLading = NULL,$_siteName = NULL,$_siteType = NULL,$_signatureImage = NULL,$_barcode = NULL,$_foreignParcelNumber = NULL,$_exceptionCodes = NULL,$_foreignParcelNumbersList = NULL)
    {
        parent::__construct(array('consignee'=>$_consignee,'moment'=>$_moment,'operationCode'=>$_operationCode,'operationComment'=>$_operationComment,'operationDescription'=>$_operationDescription,'redirectBillOfLading'=>$_redirectBillOfLading,'returnBillOfLading'=>$_returnBillOfLading,'siteName'=>$_siteName,'siteType'=>$_siteType,'signatureImage'=>$_signatureImage,'barcode'=>$_barcode,'foreignParcelNumber'=>$_foreignParcelNumber,'exceptionCodes'=>$_exceptionCodes,'foreignParcelNumbersList'=>$_foreignParcelNumbersList),false);
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
     * Get moment value
     * @return dateTime|null
     */
    public function getMoment()
    {
        return $this->moment;
    }
    /**
     * Set moment value
     * @param dateTime $_moment the moment
     * @return dateTime
     */
    public function setMoment($_moment)
    {
        return ($this->moment = $_moment);
    }
    /**
     * Get operationCode value
     * @return int|null
     */
    public function getOperationCode()
    {
        return $this->operationCode;
    }
    /**
     * Set operationCode value
     * @param int $_operationCode the operationCode
     * @return int
     */
    public function setOperationCode($_operationCode)
    {
        return ($this->operationCode = $_operationCode);
    }
    /**
     * Get operationComment value
     * @return string|null
     */
    public function getOperationComment()
    {
        return $this->operationComment;
    }
    /**
     * Set operationComment value
     * @param string $_operationComment the operationComment
     * @return string
     */
    public function setOperationComment($_operationComment)
    {
        return ($this->operationComment = $_operationComment);
    }
    /**
     * Get operationDescription value
     * @return string|null
     */
    public function getOperationDescription()
    {
        return $this->operationDescription;
    }
    /**
     * Set operationDescription value
     * @param string $_operationDescription the operationDescription
     * @return string
     */
    public function setOperationDescription($_operationDescription)
    {
        return ($this->operationDescription = $_operationDescription);
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
     * Get siteName value
     * @return string|null
     */
    public function getSiteName()
    {
        return $this->siteName;
    }
    /**
     * Set siteName value
     * @param string $_siteName the siteName
     * @return string
     */
    public function setSiteName($_siteName)
    {
        return ($this->siteName = $_siteName);
    }
    /**
     * Get siteType value
     * @return string|null
     */
    public function getSiteType()
    {
        return $this->siteType;
    }
    /**
     * Set siteType value
     * @param string $_siteType the siteType
     * @return string
     */
    public function setSiteType($_siteType)
    {
        return ($this->siteType = $_siteType);
    }
    /**
     * Get signatureImage value
     * @return string|null
     */
    public function getSignatureImage()
    {
        return $this->signatureImage;
    }
    /**
     * Set signatureImage value
     * @param string $_signatureImage the signatureImage
     * @return string
     */
    public function setSignatureImage($_signatureImage)
    {
        return ($this->signatureImage = $_signatureImage);
    }
    /**
     * Get barcode value
     * @return long|null
     */
    public function getBarcode()
    {
        return $this->barcode;
    }
    /**
     * Set barcode value
     * @param long $_barcode the barcode
     * @return long
     */
    public function setBarcode($_barcode)
    {
        return ($this->barcode = $_barcode);
    }
    /**
     * Get foreignParcelNumber value
     * @return string|null
     */
    public function getForeignParcelNumber()
    {
        return $this->foreignParcelNumber;
    }
    /**
     * Set foreignParcelNumber value
     * @param string $_foreignParcelNumber the foreignParcelNumber
     * @return string
     */
    public function setForeignParcelNumber($_foreignParcelNumber)
    {
        return ($this->foreignParcelNumber = $_foreignParcelNumber);
    }
    /**
     * Get exceptionCodes value
     * @return int|null
     */
    public function getExceptionCodes()
    {
        return $this->exceptionCodes;
    }
    /**
     * Set exceptionCodes value
     * @param int $_exceptionCodes the exceptionCodes
     * @return int
     */
    public function setExceptionCodes($_exceptionCodes)
    {
        return ($this->exceptionCodes = $_exceptionCodes);
    }
    /**
     * Get foreignParcelNumbersList value
     * @return string|null
     */
    public function getForeignParcelNumbersList()
    {
        return $this->foreignParcelNumbersList;
    }
    /**
     * Set foreignParcelNumbersList value
     * @param string $_foreignParcelNumbersList the foreignParcelNumbersList
     * @return string
     */
    public function setForeignParcelNumbersList($_foreignParcelNumbersList)
    {
        return ($this->foreignParcelNumbersList = $_foreignParcelNumbersList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultTrackPickingEx
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
