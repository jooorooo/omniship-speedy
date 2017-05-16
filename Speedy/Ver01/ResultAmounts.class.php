<?php

class ResultAmounts {

    /**
     * The real value of the shipment
     * @access private
     * @var double Signed 64-bit double
     */
    private $_insuranceBase;

    /**
     * The insurance premium (i.e. the price of the "Insurance" complementary service)
     * @access private
     * @var double Signed 64-bit double
     */
    private $_insurancePremium;

    /**
     * The net price (of the courier service only; w/o discounts, complementary services, VAT etc.)
     * @access private
     * @var double Signed 64-bit double
     */
    private $_net;

    /**
     * (NEGATIVE value) Fixed discount value
     * @access private
     * @var double Signed 64-bit double
     */
    private $_discountFixed;

    /**
     * (NEGATIVE value) Discount for shipments delivered to a Speedy office by the sender
     * @access private
     * @var double Signed 64-bit double
     */
    private $_discountToOffice;

    /**
     * (NEGATIVE value) Discount for the "To be called" complementary service
     * @access private
     * @var double Signed 64-bit double
     */
    private $_discountToBeCalled;

    /**
     * (NEGATIVE value) Additional discount
     * @access private
     * @var double Signed 64-bit double
     */
    private $_discountAdditional;

    /**
     * Packings value
     * @access private
     * @var double Signed 64-bit double
     */
    private $_packings;

    /**
     * The amount of the "Additional charges for loading/unloading operations" complementary service
     * @access private
     * @var double Signed 64-bit double
     */
    private $_tro;

    /**
     * The amount of the "Fixed time for delivery" complementary service
     * @access private
     * @var double Signed 64-bit double
     */
    private $_fixedTimeDelivery;

    /**
     * Fuel surcharge
     * @access private
     * @var double Signed 64-bit double
     */
    private $_fuelSurcharge;

    /**
     * Island surcharge (international shipments)
     * @access private
     * @var double Signed 64-bit double
     */
    private $_islandSurcharge;

    /**
     * The "Cash on delivery" amount to be paid to the sender
     * @access private
     * @var double Signed 64-bit double
     */
    private $_codBase;

    /**
     * The price of the "Cash on delivery" complementary service
     * @access private
     * @var double Signed 64-bit double
     */
    private $_codPremium;

    /**
     * VAT (Value added tax)
     * @access private
     * @var double Signed 64-bit double
     */
    private $_vat;

    /**
     * The total amount
     * @access private
     * @var double Signed 64-bit double
     */
    private $_total;

    /**
     * The PERCENTAGE of fixed discount
     * @access private
     * @var double Signed 64-bit double
     */
    private $_discPcntFixed;

    /**
     * The PERCENTAGE of the "brought to office" complementary service
     * @access private
     * @var double Signed 64-bit double
     */
    private $_discPcntToOffice;

    /**
     * The PERCENTAGE of the "To be called" complementary service
     * @access private
     * @var double Signed 64-bit double
     */
    private $_discPcntToBeCalled;

    /**
     * The PERCENTAGE of additional discount
     * @access private
     * @var double Signed 64-bit double
     */
    private $_discPcntAdditional;

    /**
     * The PERCENTAGE of fuel surcharge
     * @access private
     * @var double Signed 64-bit double
     */
    private $_pcntFuelSurcharge;
    
    /**
     * The PERCENTAGE of return shipment discount
     * @access private
     * @var double Signed 64-bit double
     * @since 2.5.0
     */
    private $_discPcntRetShipment;
    
    /**
     * The amount of return shipment discount
     * @access private
     * @var double Signed 64-bit double
     * @since 2.5.0
     */
    private $_discountRetShipment;
    
    /**
     * The amount of special delivery discount
     * @access private
     * @var double Signed 64-bit double
     * @since 2.5.0
     */
    private $_specialDelivery;

    /**
     * Constructs new instance of ResultAmounts from stdClass
     * @param stdClass $stdClassResultAmounts
     */
    function __construct($stdClassResultAmounts) {
        $this->_insuranceBase       = isset($stdClassResultAmounts->insuranceBase)       ? $stdClassResultAmounts->insuranceBase       : null;
        $this->_insurancePremium    = isset($stdClassResultAmounts->insurancePremium)    ? $stdClassResultAmounts->insurancePremium    : null;
        $this->_net                 = isset($stdClassResultAmounts->net)                 ? $stdClassResultAmounts->net                 : null;
        $this->_discountFixed       = isset($stdClassResultAmounts->discountFixed)       ? $stdClassResultAmounts->discountFixed       : null;
        $this->_discountToOffice    = isset($stdClassResultAmounts->discountToOffice)    ? $stdClassResultAmounts->discountToOffice    : null;
        $this->_discountToBeCalled  = isset($stdClassResultAmounts->discountToBeCalled)  ? $stdClassResultAmounts->discountToBeCalled  : null;
        $this->_discountAdditional  = isset($stdClassResultAmounts->discountAdditional)  ? $stdClassResultAmounts->discountAdditional  : null;
        $this->_packings            = isset($stdClassResultAmounts->packings)            ? $stdClassResultAmounts->packings            : null;
        $this->_tro                 = isset($stdClassResultAmounts->tro)                 ? $stdClassResultAmounts->tro                 : null;
        $this->_fixedTimeDelivery   = isset($stdClassResultAmounts->fixedTimeDelivery)   ? $stdClassResultAmounts->fixedTimeDelivery   : null;
        $this->_fuelSurcharge       = isset($stdClassResultAmounts->fuelSurcharge)       ? $stdClassResultAmounts->fuelSurcharge       : null;
        $this->_islandSurcharge     = isset($stdClassResultAmounts->islandSurcharge)     ? $stdClassResultAmounts->islandSurcharge     : null;
        $this->_codBase             = isset($stdClassResultAmounts->codBase)             ? $stdClassResultAmounts->codBase             : null;
        $this->_codPremium          = isset($stdClassResultAmounts->codPremium)          ? $stdClassResultAmounts->codPremium          : null;
        $this->_vat                 = isset($stdClassResultAmounts->vat)                 ? $stdClassResultAmounts->vat                 : null;
        $this->_total               = isset($stdClassResultAmounts->total)               ? $stdClassResultAmounts->total               : null;
        $this->_discPcntFixed       = isset($stdClassResultAmounts->discPcntFixed)       ? $stdClassResultAmounts->discPcntFixed       : null;
        $this->_discPcntToOffice    = isset($stdClassResultAmounts->discPcntToOffice)    ? $stdClassResultAmounts->discPcntToOffice    : null;
        $this->_discPcntToBeCalled  = isset($stdClassResultAmounts->discPcntToBeCalled)  ? $stdClassResultAmounts->discPcntToBeCalled  : null;
        $this->_discPcntAdditional  = isset($stdClassResultAmounts->discPcntAdditional)  ? $stdClassResultAmounts->discPcntAdditional  : null;
        $this->_pcntFuelSurcharge   = isset($stdClassResultAmounts->pcntFuelSurcharge)   ? $stdClassResultAmounts->pcntFuelSurcharge   : null;
        $this->_discPcntRetShipment = isset($stdClassResultAmounts->discPcntRetShipment) ? $stdClassResultAmounts->discPcntRetShipment : null;
        $this->_discountRetShipment = isset($stdClassResultAmounts->discountRetShipment) ? $stdClassResultAmounts->discountRetShipment : null;
        $this->_specialDelivery     = isset($stdClassResultAmounts->specialDelivery)     ? $stdClassResultAmounts->specialDelivery     : null;
    }

    /**
     * Set real value of the shipment
     * @param double $insuranceBase Signed 64-bit double value
     */
    public function setInsuranceBase($insuranceBase) {
        $this->_insuranceBase = $insuranceBase;
    }

    /**
     * Get real value of the shipment
     * @return double Signed 64-bit double value
     */
    public function getInsuranceBase() {
        return $this->_insuranceBase;
    }

    /**
     * Set insurance premium (i.e. the price of the "Insurance" complementary service)
     * @param double $insurancePremium Signed 64-bit double value
     */
    public function setInsurancePremium($insurancePremium) {
        $this->_insurancePremium = $insurancePremium;
    }

    /**
     * Get insurance premium
     * @return double Signed 64-bit double value
     */
    public function getInsurancePremium() {
        return $this->_insurancePremium;
    }

    /**
     * Set net price (of the courier service only; w/o discounts, complementary services, VAT etc.)
     * @param double $net Signed 64-bit double value
     */
    public function setNet($net) {
        $this->_net = $net;
    }

    /**
     * Get net price
     * @return double Signed 64-bit double value
     */
    public function getNet() {
        return $this->_net;
    }

    /**
     * Set fixed discount value (NEGATIVE value).
     * @param double $discountFixed Signed 64-bit double value
     */
    public function setDiscountFixed($discountFixed) {
        $this->_discountFixed = $discountFixed;
    }

    /**
     * Get fixed discount value (NEGATIVE value)
     * @return double Signed 64-bit double value
     */
    public function getDiscountFixed() {
        return $this->_discountFixed;
    }

    /**
     * Set discount for shipments delivered to a Speedy office by the sender (NEGATIVE value).
     * @param double $discountToOffice Signed 64-bit double value
     */
    public function setDiscountToOffice($discountToOffice) {
        $this->_discountToOffice = $discountToOffice;
    }

    /**
     * Get discount for shipments delivered to a Speedy office by the sender (NEGATIVE value)
     * @return double Signed 64-bit double value
     */
    public function getDiscountToOffice() {
        return $this->_discountToOffice;
    }

    /**
     * Set discount for the "To be called" complementary service (NEGATIVE value).
     * @param double $discountToBeCalled Signed 64-bit double value
     */
    public function setDiscountToBeCalled($discountToBeCalled) {
        $this->_discountToBeCalled = $discountToBeCalled;
    }

    /**
     * Get discount for the "To be called" complementary service (NEGATIVE value)
     * @return double Signed 64-bit double value
     */
    public function getDiscountToBeCalled() {
        return $this->_discountToBeCalled;
    }

    /**
     * Set additional discount (NEGATIVE value).
     * @param double $discountAdditional Signed 64-bit double value
     */
    public function setDiscountAdditional($discountAdditional) {
        $this->_discountAdditional = $discountAdditional;
    }

    /**
     * Get additional discount (NEGATIVE value)
     * @return double Signed 64-bit double value
     */
    public function getDiscountAdditional() {
        return $this->_discountAdditional;
    }

    /**
     * Set packings value
     * @param double $packings Signed 64-bit double value
     */
    public function setPackings($packings) {
        $this->_packings = $packings;
    }

    /**
     * Get packings value
     * @return double Signed 64-bit double value
     */
    public function getPackings() {
        return $this->_packings;
    }

    /**
     * Set amount of the "Additional charges for loading/unloading operations" complementary service
     * @param double $tro Signed 64-bit double value
     */
    public function setTro($tro) {
        $this->_tro = $tro;
    }

    /**
     * Get amount of the "Additional charges for loading/unloading operations" complementary service
     * @return double Signed 64-bit double value
     */
    public function getTro() {
        return $this->_tro;
    }

    /**
     * Set amount of the "Fixed time for delivery" complementary service
     * @param double $fixedTimeDelivery Signed 64-bit double value
     */
    public function setFixedTimeDelivery($fixedTimeDelivery) {
        $this->_fixedTimeDelivery = $fixedTimeDelivery;
    }

    /**
     * Get amount of the "Fixed time for delivery" complementary service
     * @return double Signed 64-bit double value
     */
    public function getFixedTimeDelivery() {
        return $this->_fixedTimeDelivery;
    }

    /**
     * Set fuel surcharge
     * @param double $fuelSurcharge Signed 64-bit double value
     */
    public function setFuelSurcharge($fuelSurcharge) {
        $this->_fuelSurcharge = $fuelSurcharge;
    }

    /**
     * Get fuel surcharge
     * @return double Signed 64-bit double value
     */
    public function getFuelSurcharge() {
        return $this->_fuelSurcharge;
    }

    /**
     * Set island surcharge (international shipments)
     * @param double $islandSurcharge Signed 64-bit double value
     */
    public function setIslandSurcharge($islandSurcharge) {
        $this->_islandSurcharge = $islandSurcharge;
    }

    /**
     * Get island surcharge (international shipments)
     * @return double Signed 64-bit double value
     */
    public function getIslandSurcharge() {
        return $this->_islandSurcharge;
    }

    /**
     * Set "Cash on delivery" amount to be paid to the sender
     * @param double $codBase Signed 64-bit double value
     */
    public function setCodBase($codBase) {
        $this->_codBase = $codBase;
    }

    /**
     * Get "Cash on delivery" amount to be paid to the sender
     * @return double Signed 64-bit double value
     */
    public function getCodBase() {
        return $this->_codBase;
    }

    /**
     * Set the price of the "Cash on delivery" complementary service
     * @param double $codPremium Signed 64-bit double value
     */
    public function setCodPremium($codPremium) {
        $this->_codPremium = $codPremium;
    }

    /**
     * Get the price of the "Cash on delivery" complementary service
     * @return double Signed 64-bit double value
     */
    public function getCodPremium() {
        return $this->_codPremium;
    }

    /**
     * Set value added tax
     * @param double $vat Signed 64-bit double value
     */
    public function setVat($vat) {
        $this->_vat = $vat;
    }

    /**
     * Get value added tax
     * @return double Signed 64-bit double value
     */
    public function getVat() {
        return $this->_vat;
    }

    /**
     * Set total amount
     * @param double $total Signed 64-bit double value
     */
    public function setTotal($total) {
        $this->_total = $total;
    }

    /**
     * Get total amount
     * @return double Signed 64-bit double value
     */
    public function getTotal() {
        return $this->_total;
    }

    /**
     * Set PERCENTAGE of fixed discount
     * @param double $discPcntFixed Signed 64-bit double value
     */
    public function setDiscPcntFixed($discPcntFixed) {
        $this->_discPcntFixed = $discPcntFixed;
    }

    /**
     * Get PERCENTAGE of fixed discount
     * @return double Signed 64-bit double value
     */
    public function getDiscPcntFixed() {
        return $this->_discPcntFixed;
    }

    /**
     * Set PERCENTAGE of the "brought to office" complementary service
     * @param double $discPcntToOffice Signed 64-bit double value
     */
    public function setDiscPcntToOffice($discPcntToOffice) {
        $this->_discPcntToOffice = $discPcntToOffice;
    }

    /**
     * Get PERCENTAGE of the "brought to office" complementary service
     * @return double Signed 64-bit double value
     */
    public function getDiscPcntToOffice() {
        return $this->_discPcntToOffice;
    }

    /**
     * Set PERCENTAGE of the "To be called" complementary service
     * @param double $discPcntToBeCalled Signed 64-bit double value
     */
    public function setDiscPcntToBeCalled($discPcntToBeCalled) {
        $this->_discPcntToBeCalled = $discPcntToBeCalled;
    }

    /**
     * Get PERCENTAGE of the "To be called" complementary service
     * @return double Signed 64-bit double value
     */
    public function getDiscPcntToBeCalled() {
        return $this->_discPcntToBeCalled;
    }

    /**
     * Set PERCENTAGE of additional discount
     * @param double $discPcntAdditional Signed 64-bit double value
     */
    public function setDiscPcntAdditional($discPcntAdditional) {
        $this->_discPcntAdditional = $discPcntAdditional;
    }

    /**
     * Get PERCENTAGE of additional discount
     * @return double Signed 64-bit double value
     */
    public function getDiscPcntAdditional() {
        return $this->_discPcntAdditional;
    }

    /**
     * Set PERCENTAGE of fuel surcharge
     * @param double $pcntFuelSurcharge Signed 64-bit double value
     */
    public function setPcntFuelSurcharge($pcntFuelSurcharge) {
        $this->_pcntFuelSurcharge = $pcntFuelSurcharge;
    }

    /**
     * Get PERCENTAGE of fuel surcharge
     * @return double Signed 64-bit double value
     */
    public function getPcntFuelSurcharge() {
        return $this->_pcntFuelSurcharge;
    }
    
    /**
     * Set PERCENTAGE of return shipment surcharge
     * @param double $discPcntRetShipment Signed 64-bit double value
     */
    public function setDiscPcntRetShipment($discPcntRetShipment) {
        $this->_discPcntRetShipment = $discPcntRetShipment;
    }

    /**
     * Get PERCENTAGE of return shipment surcharge
     * @return double Signed 64-bit double value
     */
    public function getDiscPcntRetShipment() {
        return $this->_discPcntRetShipment;
    }
    
    /**
     * Set return shipment discount amount
     * @param double $total Signed 64-bit double value
     */
    public function setDiscountRetShipment($discountRetShipment) {
        $this->_discountRetShipment = $discountRetShipment;
    }

    /**
     * Get return shipment discount amount
     * @return double Signed 64-bit double value
     */
    public function getDiscountRetShipment() {
        return $this->_discountRetShipment;
    }
 
    /**
     * Set special delivery surcharge amount
     * @param double $specialDelivery Signed 64-bit double value
     */
    public function setSpecialDelivery($specialDelivery) {
        $this->_specialDelivery = $specialDelivery;
    }

    /**
     * Get special delivery surcharge amount
     * @return double Signed 64-bit double value
     */
    public function getSpecialDelivery() {
        return $this->_specialDelivery;
    }   
}
?>