<?php

require_once 'ResultCourierService.class.php';

/**
 * Instances of this class are returned as a result of Speedy web service calls for services alloweed between sites
 */
class ResultCourierServiceExt extends ResultCourierService {

    /**
     * The deadline for shipment delivery
     * @var datetime
     */
    private $_deliveryDeadline;

    /**
     * Specifies if the complementary service "Delivery to floor" is banned, allowed or required
     * @var ComplementaryServiceAllowance
     */
    private $_allowanceDeliveryToFloor;

    /**
     * Constructs new instance of ResultCourierServiceExt
     * @param stdClass $stdClassResultCourierServiceExt
     */
    function __construct($stdClassResultCourierServiceExt) {
        parent::__construct($stdClassResultCourierServiceExt);
        $this->_deliveryDeadline = isset($stdClassResultCourierServiceExt->deliveryDeadline) ? $stdClassResultCourierServiceExt->deliveryDeadline : null;
        $this->_allowanceDeliveryToFloor = isset($stdClassResultCourierServiceExt->allowanceDeliveryToFloor) ? $stdClassResultCourierServiceExt->allowanceDeliveryToFloor : null;
   }

    /**
     * Get deadline for shipment delivery
     * @return datetime Deadline for shipment delivery
     */
    public function getDeliveryDeadline() {
        return $this->_deliveryDeadline;
    }

    /**
     * Get specifies if the complementary service "Delivery to floor" is banned, allowed or required
     * @return ComplementaryServiceAllowance
     */
    public function getAllowanceDeliveryToFloor() {
        return $this->_allowanceDeliveryToFloor;
    }

}
?>