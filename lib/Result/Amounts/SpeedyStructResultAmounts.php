<?php
/**
 * File for class SpeedyStructResultAmounts
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
/**
 * This class stands for SpeedyStructResultAmounts originally named resultAmounts
 * Meta informations extracted from the WSDL
 * - from schema : {@link https://www.speedy.bg/eps/mainservice01?xsd=1}
 * @package Speedy
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2017-05-16
 */
class SpeedyStructResultAmounts extends SpeedyWsdlClass
{
    /**
     * The codBase
     * @var double
     */
    public $codBase;
    /**
     * The codPremium
     * @var double
     */
    public $codPremium;
    /**
     * The discPcntAdditional
     * @var double
     */
    public $discPcntAdditional;
    /**
     * The discPcntFixed
     * @var double
     */
    public $discPcntFixed;
    /**
     * The discPcntToBeCalled
     * @var double
     */
    public $discPcntToBeCalled;
    /**
     * The discPcntToOffice
     * @var double
     */
    public $discPcntToOffice;
    /**
     * The discountAdditional
     * @var double
     */
    public $discountAdditional;
    /**
     * The discountFixed
     * @var double
     */
    public $discountFixed;
    /**
     * The discountToBeCalled
     * @var double
     */
    public $discountToBeCalled;
    /**
     * The discountToOffice
     * @var double
     */
    public $discountToOffice;
    /**
     * The fixedTimeDelivery
     * @var double
     */
    public $fixedTimeDelivery;
    /**
     * The fuelSurcharge
     * @var double
     */
    public $fuelSurcharge;
    /**
     * The insuranceBase
     * @var double
     */
    public $insuranceBase;
    /**
     * The insurancePremium
     * @var double
     */
    public $insurancePremium;
    /**
     * The islandSurcharge
     * @var double
     */
    public $islandSurcharge;
    /**
     * The net
     * @var double
     */
    public $net;
    /**
     * The packings
     * @var double
     */
    public $packings;
    /**
     * The pcntFuelSurcharge
     * @var double
     */
    public $pcntFuelSurcharge;
    /**
     * The total
     * @var double
     */
    public $total;
    /**
     * The tro
     * @var double
     */
    public $tro;
    /**
     * The vat
     * @var double
     */
    public $vat;
    /**
     * The discPcntRetShipment
     * @var double
     */
    public $discPcntRetShipment;
    /**
     * The discountRetShipment
     * @var double
     */
    public $discountRetShipment;
    /**
     * The specialDelivery
     * @var double
     */
    public $specialDelivery;
    /**
     * The moneyTransferPremium
     * @var double
     */
    public $moneyTransferPremium;
    /**
     * The testBeforePayment
     * @var double
     */
    public $testBeforePayment;
    /**
     * The deliveryToFloor
     * @var double
     */
    public $deliveryToFloor;
    /**
     * The heavyPackageFee
     * @var double
     */
    public $heavyPackageFee;
    /**
     * Constructor method for resultAmounts
     * @see parent::__construct()
     * @param double $_codBase
     * @param double $_codPremium
     * @param double $_discPcntAdditional
     * @param double $_discPcntFixed
     * @param double $_discPcntToBeCalled
     * @param double $_discPcntToOffice
     * @param double $_discountAdditional
     * @param double $_discountFixed
     * @param double $_discountToBeCalled
     * @param double $_discountToOffice
     * @param double $_fixedTimeDelivery
     * @param double $_fuelSurcharge
     * @param double $_insuranceBase
     * @param double $_insurancePremium
     * @param double $_islandSurcharge
     * @param double $_net
     * @param double $_packings
     * @param double $_pcntFuelSurcharge
     * @param double $_total
     * @param double $_tro
     * @param double $_vat
     * @param double $_discPcntRetShipment
     * @param double $_discountRetShipment
     * @param double $_specialDelivery
     * @param double $_moneyTransferPremium
     * @param double $_testBeforePayment
     * @param double $_deliveryToFloor
     * @param double $_heavyPackageFee
     * @return SpeedyStructResultAmounts
     */
    public function __construct($_codBase = NULL,$_codPremium = NULL,$_discPcntAdditional = NULL,$_discPcntFixed = NULL,$_discPcntToBeCalled = NULL,$_discPcntToOffice = NULL,$_discountAdditional = NULL,$_discountFixed = NULL,$_discountToBeCalled = NULL,$_discountToOffice = NULL,$_fixedTimeDelivery = NULL,$_fuelSurcharge = NULL,$_insuranceBase = NULL,$_insurancePremium = NULL,$_islandSurcharge = NULL,$_net = NULL,$_packings = NULL,$_pcntFuelSurcharge = NULL,$_total = NULL,$_tro = NULL,$_vat = NULL,$_discPcntRetShipment = NULL,$_discountRetShipment = NULL,$_specialDelivery = NULL,$_moneyTransferPremium = NULL,$_testBeforePayment = NULL,$_deliveryToFloor = NULL,$_heavyPackageFee = NULL)
    {
        parent::__construct(array('codBase'=>$_codBase,'codPremium'=>$_codPremium,'discPcntAdditional'=>$_discPcntAdditional,'discPcntFixed'=>$_discPcntFixed,'discPcntToBeCalled'=>$_discPcntToBeCalled,'discPcntToOffice'=>$_discPcntToOffice,'discountAdditional'=>$_discountAdditional,'discountFixed'=>$_discountFixed,'discountToBeCalled'=>$_discountToBeCalled,'discountToOffice'=>$_discountToOffice,'fixedTimeDelivery'=>$_fixedTimeDelivery,'fuelSurcharge'=>$_fuelSurcharge,'insuranceBase'=>$_insuranceBase,'insurancePremium'=>$_insurancePremium,'islandSurcharge'=>$_islandSurcharge,'net'=>$_net,'packings'=>$_packings,'pcntFuelSurcharge'=>$_pcntFuelSurcharge,'total'=>$_total,'tro'=>$_tro,'vat'=>$_vat,'discPcntRetShipment'=>$_discPcntRetShipment,'discountRetShipment'=>$_discountRetShipment,'specialDelivery'=>$_specialDelivery,'moneyTransferPremium'=>$_moneyTransferPremium,'testBeforePayment'=>$_testBeforePayment,'deliveryToFloor'=>$_deliveryToFloor,'heavyPackageFee'=>$_heavyPackageFee),false);
    }
    /**
     * Get codBase value
     * @return double|null
     */
    public function getCodBase()
    {
        return $this->codBase;
    }
    /**
     * Set codBase value
     * @param double $_codBase the codBase
     * @return double
     */
    public function setCodBase($_codBase)
    {
        return ($this->codBase = $_codBase);
    }
    /**
     * Get codPremium value
     * @return double|null
     */
    public function getCodPremium()
    {
        return $this->codPremium;
    }
    /**
     * Set codPremium value
     * @param double $_codPremium the codPremium
     * @return double
     */
    public function setCodPremium($_codPremium)
    {
        return ($this->codPremium = $_codPremium);
    }
    /**
     * Get discPcntAdditional value
     * @return double|null
     */
    public function getDiscPcntAdditional()
    {
        return $this->discPcntAdditional;
    }
    /**
     * Set discPcntAdditional value
     * @param double $_discPcntAdditional the discPcntAdditional
     * @return double
     */
    public function setDiscPcntAdditional($_discPcntAdditional)
    {
        return ($this->discPcntAdditional = $_discPcntAdditional);
    }
    /**
     * Get discPcntFixed value
     * @return double|null
     */
    public function getDiscPcntFixed()
    {
        return $this->discPcntFixed;
    }
    /**
     * Set discPcntFixed value
     * @param double $_discPcntFixed the discPcntFixed
     * @return double
     */
    public function setDiscPcntFixed($_discPcntFixed)
    {
        return ($this->discPcntFixed = $_discPcntFixed);
    }
    /**
     * Get discPcntToBeCalled value
     * @return double|null
     */
    public function getDiscPcntToBeCalled()
    {
        return $this->discPcntToBeCalled;
    }
    /**
     * Set discPcntToBeCalled value
     * @param double $_discPcntToBeCalled the discPcntToBeCalled
     * @return double
     */
    public function setDiscPcntToBeCalled($_discPcntToBeCalled)
    {
        return ($this->discPcntToBeCalled = $_discPcntToBeCalled);
    }
    /**
     * Get discPcntToOffice value
     * @return double|null
     */
    public function getDiscPcntToOffice()
    {
        return $this->discPcntToOffice;
    }
    /**
     * Set discPcntToOffice value
     * @param double $_discPcntToOffice the discPcntToOffice
     * @return double
     */
    public function setDiscPcntToOffice($_discPcntToOffice)
    {
        return ($this->discPcntToOffice = $_discPcntToOffice);
    }
    /**
     * Get discountAdditional value
     * @return double|null
     */
    public function getDiscountAdditional()
    {
        return $this->discountAdditional;
    }
    /**
     * Set discountAdditional value
     * @param double $_discountAdditional the discountAdditional
     * @return double
     */
    public function setDiscountAdditional($_discountAdditional)
    {
        return ($this->discountAdditional = $_discountAdditional);
    }
    /**
     * Get discountFixed value
     * @return double|null
     */
    public function getDiscountFixed()
    {
        return $this->discountFixed;
    }
    /**
     * Set discountFixed value
     * @param double $_discountFixed the discountFixed
     * @return double
     */
    public function setDiscountFixed($_discountFixed)
    {
        return ($this->discountFixed = $_discountFixed);
    }
    /**
     * Get discountToBeCalled value
     * @return double|null
     */
    public function getDiscountToBeCalled()
    {
        return $this->discountToBeCalled;
    }
    /**
     * Set discountToBeCalled value
     * @param double $_discountToBeCalled the discountToBeCalled
     * @return double
     */
    public function setDiscountToBeCalled($_discountToBeCalled)
    {
        return ($this->discountToBeCalled = $_discountToBeCalled);
    }
    /**
     * Get discountToOffice value
     * @return double|null
     */
    public function getDiscountToOffice()
    {
        return $this->discountToOffice;
    }
    /**
     * Set discountToOffice value
     * @param double $_discountToOffice the discountToOffice
     * @return double
     */
    public function setDiscountToOffice($_discountToOffice)
    {
        return ($this->discountToOffice = $_discountToOffice);
    }
    /**
     * Get fixedTimeDelivery value
     * @return double|null
     */
    public function getFixedTimeDelivery()
    {
        return $this->fixedTimeDelivery;
    }
    /**
     * Set fixedTimeDelivery value
     * @param double $_fixedTimeDelivery the fixedTimeDelivery
     * @return double
     */
    public function setFixedTimeDelivery($_fixedTimeDelivery)
    {
        return ($this->fixedTimeDelivery = $_fixedTimeDelivery);
    }
    /**
     * Get fuelSurcharge value
     * @return double|null
     */
    public function getFuelSurcharge()
    {
        return $this->fuelSurcharge;
    }
    /**
     * Set fuelSurcharge value
     * @param double $_fuelSurcharge the fuelSurcharge
     * @return double
     */
    public function setFuelSurcharge($_fuelSurcharge)
    {
        return ($this->fuelSurcharge = $_fuelSurcharge);
    }
    /**
     * Get insuranceBase value
     * @return double|null
     */
    public function getInsuranceBase()
    {
        return $this->insuranceBase;
    }
    /**
     * Set insuranceBase value
     * @param double $_insuranceBase the insuranceBase
     * @return double
     */
    public function setInsuranceBase($_insuranceBase)
    {
        return ($this->insuranceBase = $_insuranceBase);
    }
    /**
     * Get insurancePremium value
     * @return double|null
     */
    public function getInsurancePremium()
    {
        return $this->insurancePremium;
    }
    /**
     * Set insurancePremium value
     * @param double $_insurancePremium the insurancePremium
     * @return double
     */
    public function setInsurancePremium($_insurancePremium)
    {
        return ($this->insurancePremium = $_insurancePremium);
    }
    /**
     * Get islandSurcharge value
     * @return double|null
     */
    public function getIslandSurcharge()
    {
        return $this->islandSurcharge;
    }
    /**
     * Set islandSurcharge value
     * @param double $_islandSurcharge the islandSurcharge
     * @return double
     */
    public function setIslandSurcharge($_islandSurcharge)
    {
        return ($this->islandSurcharge = $_islandSurcharge);
    }
    /**
     * Get net value
     * @return double|null
     */
    public function getNet()
    {
        return $this->net;
    }
    /**
     * Set net value
     * @param double $_net the net
     * @return double
     */
    public function setNet($_net)
    {
        return ($this->net = $_net);
    }
    /**
     * Get packings value
     * @return double|null
     */
    public function getPackings()
    {
        return $this->packings;
    }
    /**
     * Set packings value
     * @param double $_packings the packings
     * @return double
     */
    public function setPackings($_packings)
    {
        return ($this->packings = $_packings);
    }
    /**
     * Get pcntFuelSurcharge value
     * @return double|null
     */
    public function getPcntFuelSurcharge()
    {
        return $this->pcntFuelSurcharge;
    }
    /**
     * Set pcntFuelSurcharge value
     * @param double $_pcntFuelSurcharge the pcntFuelSurcharge
     * @return double
     */
    public function setPcntFuelSurcharge($_pcntFuelSurcharge)
    {
        return ($this->pcntFuelSurcharge = $_pcntFuelSurcharge);
    }
    /**
     * Get total value
     * @return double|null
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * Set total value
     * @param double $_total the total
     * @return double
     */
    public function setTotal($_total)
    {
        return ($this->total = $_total);
    }
    /**
     * Get tro value
     * @return double|null
     */
    public function getTro()
    {
        return $this->tro;
    }
    /**
     * Set tro value
     * @param double $_tro the tro
     * @return double
     */
    public function setTro($_tro)
    {
        return ($this->tro = $_tro);
    }
    /**
     * Get vat value
     * @return double|null
     */
    public function getVat()
    {
        return $this->vat;
    }
    /**
     * Set vat value
     * @param double $_vat the vat
     * @return double
     */
    public function setVat($_vat)
    {
        return ($this->vat = $_vat);
    }
    /**
     * Get discPcntRetShipment value
     * @return double|null
     */
    public function getDiscPcntRetShipment()
    {
        return $this->discPcntRetShipment;
    }
    /**
     * Set discPcntRetShipment value
     * @param double $_discPcntRetShipment the discPcntRetShipment
     * @return double
     */
    public function setDiscPcntRetShipment($_discPcntRetShipment)
    {
        return ($this->discPcntRetShipment = $_discPcntRetShipment);
    }
    /**
     * Get discountRetShipment value
     * @return double|null
     */
    public function getDiscountRetShipment()
    {
        return $this->discountRetShipment;
    }
    /**
     * Set discountRetShipment value
     * @param double $_discountRetShipment the discountRetShipment
     * @return double
     */
    public function setDiscountRetShipment($_discountRetShipment)
    {
        return ($this->discountRetShipment = $_discountRetShipment);
    }
    /**
     * Get specialDelivery value
     * @return double|null
     */
    public function getSpecialDelivery()
    {
        return $this->specialDelivery;
    }
    /**
     * Set specialDelivery value
     * @param double $_specialDelivery the specialDelivery
     * @return double
     */
    public function setSpecialDelivery($_specialDelivery)
    {
        return ($this->specialDelivery = $_specialDelivery);
    }
    /**
     * Get moneyTransferPremium value
     * @return double|null
     */
    public function getMoneyTransferPremium()
    {
        return $this->moneyTransferPremium;
    }
    /**
     * Set moneyTransferPremium value
     * @param double $_moneyTransferPremium the moneyTransferPremium
     * @return double
     */
    public function setMoneyTransferPremium($_moneyTransferPremium)
    {
        return ($this->moneyTransferPremium = $_moneyTransferPremium);
    }
    /**
     * Get testBeforePayment value
     * @return double|null
     */
    public function getTestBeforePayment()
    {
        return $this->testBeforePayment;
    }
    /**
     * Set testBeforePayment value
     * @param double $_testBeforePayment the testBeforePayment
     * @return double
     */
    public function setTestBeforePayment($_testBeforePayment)
    {
        return ($this->testBeforePayment = $_testBeforePayment);
    }
    /**
     * Get deliveryToFloor value
     * @return double|null
     */
    public function getDeliveryToFloor()
    {
        return $this->deliveryToFloor;
    }
    /**
     * Set deliveryToFloor value
     * @param double $_deliveryToFloor the deliveryToFloor
     * @return double
     */
    public function setDeliveryToFloor($_deliveryToFloor)
    {
        return ($this->deliveryToFloor = $_deliveryToFloor);
    }
    /**
     * Get heavyPackageFee value
     * @return double|null
     */
    public function getHeavyPackageFee()
    {
        return $this->heavyPackageFee;
    }
    /**
     * Set heavyPackageFee value
     * @param double $_heavyPackageFee the heavyPackageFee
     * @return double
     */
    public function setHeavyPackageFee($_heavyPackageFee)
    {
        return ($this->heavyPackageFee = $_heavyPackageFee);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see SpeedyWsdlClass::__set_state()
     * @uses SpeedyWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return SpeedyStructResultAmounts
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
