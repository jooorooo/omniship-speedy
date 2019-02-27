<?php

require_once __DIR__ . '/ResultAddress.class.php';
require_once __DIR__ . '/ResultPhoneNumber.class.php';

/**
 * Instances of this class are returned as a result of Speedy web service method calls for client data
 */
class ResultClientData extends SpeedyResultFormat {

    /**
     * Client ID
     * @var integer Signed 64-bit
     */
    protected $_clientId;

    /**
     * Name of the client (company or private person)
     * @var string
     */
    protected $_partnerName;

    /**
     * Company department/office
     * @var string
     */
    protected $_objectName;

    /**
     * Address
     * @var ResultAddress
     */
    protected $_address;

    /**
     * Contact name
     * @var string
     */
    protected $_contactName;

    /**
     * Phone numbers
     * @var array ResultPhoneNumber
     */
    protected $_phones;

    /**
     * Constructs new instance of ResultClientData
     * @param stdClass $stdClassResultClientData
     */
    function __construct($stdClassResultClientData) {
        $this->_clientId    = isset($stdClassResultClientData->clientId)    ? $stdClassResultClientData->clientId                   : null;
        $this->_partnerName = isset($stdClassResultClientData->partnerName) ? $stdClassResultClientData->partnerName                : null;
        $this->_objectName  = isset($stdClassResultClientData->objectName)  ? $stdClassResultClientData->objectName                 : null;
        $this->_address     = isset($stdClassResultClientData->address)     ? new ResultAddress($stdClassResultClientData->address) : null;
        $this->_contactName = isset($stdClassResultClientData->contactName) ? $stdClassResultClientData->contactName                : null;
        $arrResultPhoneNumbers = array();
        if (isset($stdClassResultClientData->phones)) {
            if (is_array($stdClassResultClientData->phones)) {
                for($i = 0; $i < count($stdClassResultClientData->phones); $i++) {
                    $arrResultPhoneNumbers[$i] = new ResultPhoneNumber($stdClassResultClientData->phones[$i]);
                }
            } else {
                $arrResultPhoneNumbers[0] = new ResultPhoneNumber($stdClassResultClientData->phones);
            }
        }
        $this->_phones = $arrResultPhoneNumbers;
    }

    /**
     * Get client ID
     * @return integer Signed 64-bit
     */
    public function getClientId() {
        return $this->_clientId;
    }

    /**
     * Get name of the client (company or private person)
     * @return string
     */
    public function getPartnerName() {
        return $this->_partnerName;
    }

    /**
     * Get company department/office
     * @return string
     */
    public function getObjectName() {
        return $this->_objectName;
    }

    /**
     * Get address
     * @return ResultAddress
     */
    public function getAddress() {
        return $this->_address;
    }

    /**
     * Get contact name
     * @return string
     */
    public function getContactName() {
        return $this->_contactName;
    }

    /**
     * Get phone numbers
     * @return ResultPhoneNumber[]
     */
    public function getPhones() {
        return $this->_phones;
    }
}
?>