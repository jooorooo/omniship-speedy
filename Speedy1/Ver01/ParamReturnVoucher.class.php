<?php
/**
 * Instances of this class are used as parameters in web service calls for picking creation
 */
class ParamReturnVoucher {

    /**
     * Service type id ID
     * MANDATORY: YES
     * @var integer Signed 64-bit
     */
    private $serviceTypeId;

    /**
     * Payer type (0=sender, 1=receiver or 2=third party)
     * MANDATORY: YES
     * @var integer Signed 32-bit
     */
    private $_payerType;

    /**
     * Set serviceTypeId ID
     * @param integer $serviceTypeId Signed 64-bit
     */
    public function setServiceTypeId($serviceTypeId) {
        $this->_serviceTypeId = $serviceTypeId;
    }

    /**
     * Get serviceTypeId ID
     * @return integer Signed 64-bit
     */
    public function getServiceTypeId() {
        return $this->_serviceTypeId;
    }

    /**
     * Set payerType
     * @param integer $payerType Signed 32-bit
     */
    public function setPayerType($payerType) {
        $this->_payerType = $payerType;
    }

    /**
     * Get payerType
     * @return integer Signed 32-bit
     */
    public function getPayerType() {
        return $this->_payerType;
    }

    /**
     * Return standard class from this class
     * @return stdClass
     */
    public function toStdClass() {
        $stdClass = new stdClass();
        $stdClass->serviceTypeId = $this->_serviceTypeId;
        $stdClass->payerType     = $this->_payerType;
        return $stdClass;
    }
}
?>