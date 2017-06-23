<?php
/**
 * File for class SpeedyStructParamSearchByRefNum
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructParamSearchByRefNum originally named paramSearchByRefNum
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructParamSearchByRefNum extends SpeedyWsdlClass
{
    /**
     * The dateFrom
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $dateFrom;
    /**
     * The dateTo
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var dateTime
     */
    public $dateTo;
    /**
     * The referenceNumber
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $referenceNumber;
    /**
     * The searchInField
     * @var int
     */
    public $searchInField;
    /**
     * The includeReturnBols
     * @var boolean
     */
    public $includeReturnBols;
    /**
     * Constructor method for paramSearchByRefNum
     * @see parent::__construct()
     * @param dateTime $_dateFrom
     * @param dateTime $_dateTo
     * @param string $_referenceNumber
     * @param int $_searchInField
     * @param boolean $_includeReturnBols
     * @return SpeedyStructParamSearchByRefNum
     */
    public function __construct($_dateFrom = NULL,$_dateTo = NULL,$_referenceNumber = NULL,$_searchInField = NULL,$_includeReturnBols = NULL)
    {
        parent::__construct(array('dateFrom'=>$_dateFrom,'dateTo'=>$_dateTo,'referenceNumber'=>$_referenceNumber,'searchInField'=>$_searchInField,'includeReturnBols'=>$_includeReturnBols),false);
    }
    /**
     * Get dateFrom value
     * @return dateTime|null
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }
    /**
     * Set dateFrom value
     * @param dateTime $_dateFrom the dateFrom
     * @return dateTime
     */
    public function setDateFrom($_dateFrom)
    {
        return ($this->dateFrom = $_dateFrom);
    }
    /**
     * Get dateTo value
     * @return dateTime|null
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }
    /**
     * Set dateTo value
     * @param dateTime $_dateTo the dateTo
     * @return dateTime
     */
    public function setDateTo($_dateTo)
    {
        return ($this->dateTo = $_dateTo);
    }
    /**
     * Get referenceNumber value
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }
    /**
     * Set referenceNumber value
     * @param string $_referenceNumber the referenceNumber
     * @return string
     */
    public function setReferenceNumber($_referenceNumber)
    {
        return ($this->referenceNumber = $_referenceNumber);
    }
    /**
     * Get searchInField value
     * @return int|null
     */
    public function getSearchInField()
    {
        return $this->searchInField;
    }
    /**
     * Set searchInField value
     * @param int $_searchInField the searchInField
     * @return int
     */
    public function setSearchInField($_searchInField)
    {
        return ($this->searchInField = $_searchInField);
    }
    /**
     * Get includeReturnBols value
     * @return boolean|null
     */
    public function getIncludeReturnBols()
    {
        return $this->includeReturnBols;
    }
    /**
     * Set includeReturnBols value
     * @param boolean $_includeReturnBols the includeReturnBols
     * @return boolean
     */
    public function setIncludeReturnBols($_includeReturnBols)
    {
        return ($this->includeReturnBols = $_includeReturnBols);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructParamSearchByRefNum
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
