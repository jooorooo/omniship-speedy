<?php
/**
 * File for class SpeedyStructCreateBillOfLadingPDF
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructCreateBillOfLadingPDF originally named createBillOfLadingPDF
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructCreateBillOfLadingPDF extends SpeedyWsdlClass
{
    /**
     * The sessionId
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var string
     */
    public $sessionId;
    /**
     * The billOfLading
     * @var long
     */
    public $billOfLading;
    /**
     * The includeAutoPrintJS
     * @var boolean
     */
    public $includeAutoPrintJS;
    /**
     * Constructor method for createBillOfLadingPDF
     * @see parent::__construct()
     * @param string $_sessionId
     * @param long $_billOfLading
     * @param boolean $_includeAutoPrintJS
     * @return SpeedyStructCreateBillOfLadingPDF
     */
    public function __construct($_sessionId = NULL,$_billOfLading = NULL,$_includeAutoPrintJS = NULL)
    {
        parent::__construct(array('sessionId'=>$_sessionId,'billOfLading'=>$_billOfLading,'includeAutoPrintJS'=>$_includeAutoPrintJS),false);
    }
    /**
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $_sessionId the sessionId
     * @return string
     */
    public function setSessionId($_sessionId)
    {
        return ($this->sessionId = $_sessionId);
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructCreateBillOfLadingPDF
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
