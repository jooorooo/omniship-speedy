<?php

require_once __DIR__ . '/ResultParcelInfo.class.php';

/**
 * Instances of this class are returned as a result of create picking speedy web service calls
 */
class ResultBOL extends SpeedyResultFormat {

    /**
     * List of parcels data
     * @var array List of ResultParcelInfo
     */
    protected $_generatedParcels;

    /**
     * Amounts
     * @var ResultAmounts
     */
    protected $_amounts;

    /**
     * Deadline for delivery
     * @var date
     */
    protected $_deadlineDelivery;

    /**
     * Constructs new instance of ResultBOL from stdClass
     * @param stdClass $stdClassResultBOL
     */
    function __construct($stdClassResultBOL) {
        $arrResultParcelInfo = array();
        if (isset($stdClassResultBOL->generatedParcels)) {
            if (is_array($stdClassResultBOL->generatedParcels)) {
                for($i = 0; $i < count($stdClassResultBOL->generatedParcels); $i++) {
                    $arrResultParcelInfo[$i] = new ResultParcelInfo($stdClassResultBOL->generatedParcels[$i]);
                }
            } else {
                $arrResultParcelInfo[0] = new ResultParcelInfo($stdClassResultBOL->generatedParcels);
            }
        }
        $this->_generatedParcels = $arrResultParcelInfo;
        $this->_amounts          = isset($stdClassResultBOL->amounts)          ? new ResultAmounts($stdClassResultBOL->amounts) : null;
        $this->_deadlineDelivery = isset($stdClassResultBOL->deadlineDelivery) ? $stdClassResultBOL->deadlineDelivery           : null;
    }

    /**
     * Return list of parcels data
     * @return array List of ResultParcelInfo
     */
    public function getGeneratedParcels() {
        return $this->_generatedParcels;
    }

    /**
     * Return amounts
     * @return ResultAmounts
     */
    public function getAmounts() {
        return $this->_amounts;
    }

    /**
     * Return deadline for delivery
     * @return date
     */
    public function getDeadlineDelivery() {
        return $this->_deadlineDelivery;
    }
}
?>