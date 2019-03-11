<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tOptionsHomeDeliveryExternalReturn StructType
 * @subpackage Structs
 */
class TOptionsHomeDeliveryExternalReturn extends AbstractStructBase
{
    /**
     * The Insurance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TInsuaranceAmountSEKOption
     */
    public $Insurance;
    /**
     * The AllocatedTimeSlot
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $AllocatedTimeSlot;
    /**
     * The TwoManDelivery
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $TwoManDelivery;
    /**
     * The CarryingHelpRemoval
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $CarryingHelpRemoval;
    /**
     * The EveningDelivery
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $EveningDelivery;
    /**
     * The EveningDeliveryB
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $EveningDeliveryB;
    /**
     * The EveningDeliveryC
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $EveningDeliveryC;
    /**
     * The EveningDeliveryD
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $EveningDeliveryD;
    /**
     * The EveningDeliveryE
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $EveningDeliveryE;
    /**
     * The WeekendDelivery
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $WeekendDelivery;
    /**
     * The ShipmentMonitoring
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $ShipmentMonitoring;
    /**
     * The CO2ClimateCompensation
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $CO2ClimateCompensation;
    /**
     * Constructor method for tOptionsHomeDeliveryExternalReturn
     * @uses TOptionsHomeDeliveryExternalReturn::setInsurance()
     * @uses TOptionsHomeDeliveryExternalReturn::setAllocatedTimeSlot()
     * @uses TOptionsHomeDeliveryExternalReturn::setTwoManDelivery()
     * @uses TOptionsHomeDeliveryExternalReturn::setCarryingHelpRemoval()
     * @uses TOptionsHomeDeliveryExternalReturn::setEveningDelivery()
     * @uses TOptionsHomeDeliveryExternalReturn::setEveningDeliveryB()
     * @uses TOptionsHomeDeliveryExternalReturn::setEveningDeliveryC()
     * @uses TOptionsHomeDeliveryExternalReturn::setEveningDeliveryD()
     * @uses TOptionsHomeDeliveryExternalReturn::setEveningDeliveryE()
     * @uses TOptionsHomeDeliveryExternalReturn::setWeekendDelivery()
     * @uses TOptionsHomeDeliveryExternalReturn::setShipmentMonitoring()
     * @uses TOptionsHomeDeliveryExternalReturn::setCO2ClimateCompensation()
     * @param \Mjarestad\DHL\QuotePrice\StructType\TInsuaranceAmountSEKOption $insurance
     * @param bool $allocatedTimeSlot
     * @param bool $twoManDelivery
     * @param bool $carryingHelpRemoval
     * @param bool $eveningDelivery
     * @param bool $eveningDeliveryB
     * @param bool $eveningDeliveryC
     * @param bool $eveningDeliveryD
     * @param bool $eveningDeliveryE
     * @param bool $weekendDelivery
     * @param bool $shipmentMonitoring
     * @param bool $cO2ClimateCompensation
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\TInsuaranceAmountSEKOption $insurance = null, $allocatedTimeSlot = false, $twoManDelivery = false, $carryingHelpRemoval = false, $eveningDelivery = false, $eveningDeliveryB = false, $eveningDeliveryC = false, $eveningDeliveryD = false, $eveningDeliveryE = false, $weekendDelivery = false, $shipmentMonitoring = false, $cO2ClimateCompensation = false)
    {
        $this
            ->setInsurance($insurance)
            ->setAllocatedTimeSlot($allocatedTimeSlot)
            ->setTwoManDelivery($twoManDelivery)
            ->setCarryingHelpRemoval($carryingHelpRemoval)
            ->setEveningDelivery($eveningDelivery)
            ->setEveningDeliveryB($eveningDeliveryB)
            ->setEveningDeliveryC($eveningDeliveryC)
            ->setEveningDeliveryD($eveningDeliveryD)
            ->setEveningDeliveryE($eveningDeliveryE)
            ->setWeekendDelivery($weekendDelivery)
            ->setShipmentMonitoring($shipmentMonitoring)
            ->setCO2ClimateCompensation($cO2ClimateCompensation);
    }
    /**
     * Get Insurance value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TInsuaranceAmountSEKOption|null
     */
    public function getInsurance()
    {
        return $this->Insurance;
    }
    /**
     * Set Insurance value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TInsuaranceAmountSEKOption $insurance
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn
     */
    public function setInsurance(\Mjarestad\DHL\QuotePrice\StructType\TInsuaranceAmountSEKOption $insurance = null)
    {
        $this->Insurance = $insurance;
        return $this;
    }
    /**
     * Get AllocatedTimeSlot value
     * @return bool|null
     */
    public function getAllocatedTimeSlot()
    {
        return $this->AllocatedTimeSlot;
    }
    /**
     * Set AllocatedTimeSlot value
     * @param bool $allocatedTimeSlot
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn
     */
    public function setAllocatedTimeSlot($allocatedTimeSlot = false)
    {
        // validation for constraint: boolean
        if (!is_null($allocatedTimeSlot) && !is_bool($allocatedTimeSlot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allocatedTimeSlot, true), gettype($allocatedTimeSlot)), __LINE__);
        }
        $this->AllocatedTimeSlot = $allocatedTimeSlot;
        return $this;
    }
    /**
     * Get TwoManDelivery value
     * @return bool|null
     */
    public function getTwoManDelivery()
    {
        return $this->TwoManDelivery;
    }
    /**
     * Set TwoManDelivery value
     * @param bool $twoManDelivery
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn
     */
    public function setTwoManDelivery($twoManDelivery = false)
    {
        // validation for constraint: boolean
        if (!is_null($twoManDelivery) && !is_bool($twoManDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($twoManDelivery, true), gettype($twoManDelivery)), __LINE__);
        }
        $this->TwoManDelivery = $twoManDelivery;
        return $this;
    }
    /**
     * Get CarryingHelpRemoval value
     * @return bool|null
     */
    public function getCarryingHelpRemoval()
    {
        return $this->CarryingHelpRemoval;
    }
    /**
     * Set CarryingHelpRemoval value
     * @param bool $carryingHelpRemoval
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn
     */
    public function setCarryingHelpRemoval($carryingHelpRemoval = false)
    {
        // validation for constraint: boolean
        if (!is_null($carryingHelpRemoval) && !is_bool($carryingHelpRemoval)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($carryingHelpRemoval, true), gettype($carryingHelpRemoval)), __LINE__);
        }
        $this->CarryingHelpRemoval = $carryingHelpRemoval;
        return $this;
    }
    /**
     * Get EveningDelivery value
     * @return bool|null
     */
    public function getEveningDelivery()
    {
        return $this->EveningDelivery;
    }
    /**
     * Set EveningDelivery value
     * @param bool $eveningDelivery
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn
     */
    public function setEveningDelivery($eveningDelivery = false)
    {
        // validation for constraint: boolean
        if (!is_null($eveningDelivery) && !is_bool($eveningDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eveningDelivery, true), gettype($eveningDelivery)), __LINE__);
        }
        $this->EveningDelivery = $eveningDelivery;
        return $this;
    }
    /**
     * Get EveningDeliveryB value
     * @return bool|null
     */
    public function getEveningDeliveryB()
    {
        return $this->EveningDeliveryB;
    }
    /**
     * Set EveningDeliveryB value
     * @param bool $eveningDeliveryB
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn
     */
    public function setEveningDeliveryB($eveningDeliveryB = false)
    {
        // validation for constraint: boolean
        if (!is_null($eveningDeliveryB) && !is_bool($eveningDeliveryB)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eveningDeliveryB, true), gettype($eveningDeliveryB)), __LINE__);
        }
        $this->EveningDeliveryB = $eveningDeliveryB;
        return $this;
    }
    /**
     * Get EveningDeliveryC value
     * @return bool|null
     */
    public function getEveningDeliveryC()
    {
        return $this->EveningDeliveryC;
    }
    /**
     * Set EveningDeliveryC value
     * @param bool $eveningDeliveryC
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn
     */
    public function setEveningDeliveryC($eveningDeliveryC = false)
    {
        // validation for constraint: boolean
        if (!is_null($eveningDeliveryC) && !is_bool($eveningDeliveryC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eveningDeliveryC, true), gettype($eveningDeliveryC)), __LINE__);
        }
        $this->EveningDeliveryC = $eveningDeliveryC;
        return $this;
    }
    /**
     * Get EveningDeliveryD value
     * @return bool|null
     */
    public function getEveningDeliveryD()
    {
        return $this->EveningDeliveryD;
    }
    /**
     * Set EveningDeliveryD value
     * @param bool $eveningDeliveryD
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn
     */
    public function setEveningDeliveryD($eveningDeliveryD = false)
    {
        // validation for constraint: boolean
        if (!is_null($eveningDeliveryD) && !is_bool($eveningDeliveryD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eveningDeliveryD, true), gettype($eveningDeliveryD)), __LINE__);
        }
        $this->EveningDeliveryD = $eveningDeliveryD;
        return $this;
    }
    /**
     * Get EveningDeliveryE value
     * @return bool|null
     */
    public function getEveningDeliveryE()
    {
        return $this->EveningDeliveryE;
    }
    /**
     * Set EveningDeliveryE value
     * @param bool $eveningDeliveryE
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn
     */
    public function setEveningDeliveryE($eveningDeliveryE = false)
    {
        // validation for constraint: boolean
        if (!is_null($eveningDeliveryE) && !is_bool($eveningDeliveryE)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eveningDeliveryE, true), gettype($eveningDeliveryE)), __LINE__);
        }
        $this->EveningDeliveryE = $eveningDeliveryE;
        return $this;
    }
    /**
     * Get WeekendDelivery value
     * @return bool|null
     */
    public function getWeekendDelivery()
    {
        return $this->WeekendDelivery;
    }
    /**
     * Set WeekendDelivery value
     * @param bool $weekendDelivery
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn
     */
    public function setWeekendDelivery($weekendDelivery = false)
    {
        // validation for constraint: boolean
        if (!is_null($weekendDelivery) && !is_bool($weekendDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($weekendDelivery, true), gettype($weekendDelivery)), __LINE__);
        }
        $this->WeekendDelivery = $weekendDelivery;
        return $this;
    }
    /**
     * Get ShipmentMonitoring value
     * @return bool|null
     */
    public function getShipmentMonitoring()
    {
        return $this->ShipmentMonitoring;
    }
    /**
     * Set ShipmentMonitoring value
     * @param bool $shipmentMonitoring
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn
     */
    public function setShipmentMonitoring($shipmentMonitoring = false)
    {
        // validation for constraint: boolean
        if (!is_null($shipmentMonitoring) && !is_bool($shipmentMonitoring)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shipmentMonitoring, true), gettype($shipmentMonitoring)), __LINE__);
        }
        $this->ShipmentMonitoring = $shipmentMonitoring;
        return $this;
    }
    /**
     * Get CO2ClimateCompensation value
     * @return bool|null
     */
    public function getCO2ClimateCompensation()
    {
        return $this->CO2ClimateCompensation;
    }
    /**
     * Set CO2ClimateCompensation value
     * @param bool $cO2ClimateCompensation
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn
     */
    public function setCO2ClimateCompensation($cO2ClimateCompensation = false)
    {
        // validation for constraint: boolean
        if (!is_null($cO2ClimateCompensation) && !is_bool($cO2ClimateCompensation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cO2ClimateCompensation, true), gettype($cO2ClimateCompensation)), __LINE__);
        }
        $this->CO2ClimateCompensation = $cO2ClimateCompensation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
