<?php
/**
 * File for class SpeedyStructParamPDF
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructParamPDF originally named paramPDF
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructParamPDF extends SpeedyWsdlClass
{
    /**
     * The additionalBarcodes
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var SpeedyStructParamBarcodeInfo
     */
    public $additionalBarcodes;
    /**
     * The additionalBarcodesFormat
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $additionalBarcodesFormat;
    /**
     * The ids
     * Meta informations extracted from the WSDL
     * - maxOccurs : unbounded
     * - minOccurs : 0
     * - nillable : true
     * @var long
     */
    public $ids;
    /**
     * The includeAutoPrintJS
     * @var boolean
     */
    public $includeAutoPrintJS;
    /**
     * The printerName
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $printerName;
    /**
     * The type
     * @var int
     */
    public $type;
    /**
     * Constructor method for paramPDF
     * @see parent::__construct()
     * @param SpeedyStructParamBarcodeInfo $_additionalBarcodes
     * @param string $_additionalBarcodesFormat
     * @param long $_ids
     * @param boolean $_includeAutoPrintJS
     * @param string $_printerName
     * @param int $_type
     * @return SpeedyStructParamPDF
     */
    public function __construct($_additionalBarcodes = NULL,$_additionalBarcodesFormat = NULL,$_ids = NULL,$_includeAutoPrintJS = NULL,$_printerName = NULL,$_type = NULL)
    {
        parent::__construct(array('additionalBarcodes'=>$_additionalBarcodes,'additionalBarcodesFormat'=>$_additionalBarcodesFormat,'ids'=>$_ids,'includeAutoPrintJS'=>$_includeAutoPrintJS,'printerName'=>$_printerName,'type'=>$_type),false);
    }
    /**
     * Get additionalBarcodes value
     * @return SpeedyStructParamBarcodeInfo|null
     */
    public function getAdditionalBarcodes()
    {
        return $this->additionalBarcodes;
    }
    /**
     * Set additionalBarcodes value
     * @param SpeedyStructParamBarcodeInfo $_additionalBarcodes the additionalBarcodes
     * @return SpeedyStructParamBarcodeInfo
     */
    public function setAdditionalBarcodes($_additionalBarcodes)
    {
        return ($this->additionalBarcodes = $_additionalBarcodes);
    }
    /**
     * Get additionalBarcodesFormat value
     * @return string|null
     */
    public function getAdditionalBarcodesFormat()
    {
        return $this->additionalBarcodesFormat;
    }
    /**
     * Set additionalBarcodesFormat value
     * @param string $_additionalBarcodesFormat the additionalBarcodesFormat
     * @return string
     */
    public function setAdditionalBarcodesFormat($_additionalBarcodesFormat)
    {
        return ($this->additionalBarcodesFormat = $_additionalBarcodesFormat);
    }
    /**
     * Get ids value
     * @return long|null
     */
    public function getIds()
    {
        return $this->ids;
    }
    /**
     * Set ids value
     * @param long $_ids the ids
     * @return long
     */
    public function setIds($_ids)
    {
        return ($this->ids = $_ids);
    }
    /**
     * Get includeAutoPrintJS value
     * @return boolean|null
     */
    public function getIncludeAutoPrintJS()
    {
        return $this->includeAutoPrintJS;
    }
    /**
     * Set includeAutoPrintJS value
     * @param boolean $_includeAutoPrintJS the includeAutoPrintJS
     * @return boolean
     */
    public function setIncludeAutoPrintJS($_includeAutoPrintJS)
    {
        return ($this->includeAutoPrintJS = $_includeAutoPrintJS);
    }
    /**
     * Get printerName value
     * @return string|null
     */
    public function getPrinterName()
    {
        return $this->printerName;
    }
    /**
     * Set printerName value
     * @param string $_printerName the printerName
     * @return string
     */
    public function setPrinterName($_printerName)
    {
        return ($this->printerName = $_printerName);
    }
    /**
     * Get type value
     * @return int|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $_type the type
     * @return int
     */
    public function setType($_type)
    {
        return ($this->type = $_type);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructParamPDF
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
