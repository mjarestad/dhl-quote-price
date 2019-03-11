<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tOptionsHomeDelivery StructType
 * @subpackage Structs
 */
class TOptionsHomeDelivery extends AbstractStructBase
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
     * The IndoorDelivery
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $IndoorDelivery;
    /**
     * The PreAdviceByDriver
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $PreAdviceByDriver;
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
     * The TerminalPickUp
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $TerminalPickUp;
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
     * Constructor method for tOptionsHomeDelivery
     * @uses TOptionsHomeDelivery::setInsurance()
     * @uses TOptionsHomeDelivery::setIndoorDelivery()
     * @uses TOptionsHomeDelivery::setPreAdviceByDriver()
     * @uses TOptionsHomeDelivery::setShipmentMonitoring()
     * @uses TOptionsHomeDelivery::setTerminalPickUp()
     * @uses TOptionsHomeDelivery::setCO2ClimateCompensation()
     * @param \Mjarestad\DHL\QuotePrice\StructType\TInsuaranceAmountSEKOption $insurance
     * @param bool $indoorDelivery
     * @param bool $preAdviceByDriver
     * @param bool $shipmentMonitoring
     * @param bool $terminalPickUp
     * @param bool $cO2ClimateCompensation
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\TInsuaranceAmountSEKOption $insurance = null, $indoorDelivery = false, $preAdviceByDriver = false, $shipmentMonitoring = false, $terminalPickUp = false, $cO2ClimateCompensation = false)
    {
        $this
            ->setInsurance($insurance)
            ->setIndoorDelivery($indoorDelivery)
            ->setPreAdviceByDriver($preAdviceByDriver)
            ->setShipmentMonitoring($shipmentMonitoring)
            ->setTerminalPickUp($terminalPickUp)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDelivery
     */
    public function setInsurance(\Mjarestad\DHL\QuotePrice\StructType\TInsuaranceAmountSEKOption $insurance = null)
    {
        $this->Insurance = $insurance;
        return $this;
    }
    /**
     * Get IndoorDelivery value
     * @return bool|null
     */
    public function getIndoorDelivery()
    {
        return $this->IndoorDelivery;
    }
    /**
     * Set IndoorDelivery value
     * @param bool $indoorDelivery
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDelivery
     */
    public function setIndoorDelivery($indoorDelivery = false)
    {
        // validation for constraint: boolean
        if (!is_null($indoorDelivery) && !is_bool($indoorDelivery)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($indoorDelivery, true), gettype($indoorDelivery)), __LINE__);
        }
        $this->IndoorDelivery = $indoorDelivery;
        return $this;
    }
    /**
     * Get PreAdviceByDriver value
     * @return bool|null
     */
    public function getPreAdviceByDriver()
    {
        return $this->PreAdviceByDriver;
    }
    /**
     * Set PreAdviceByDriver value
     * @param bool $preAdviceByDriver
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDelivery
     */
    public function setPreAdviceByDriver($preAdviceByDriver = false)
    {
        // validation for constraint: boolean
        if (!is_null($preAdviceByDriver) && !is_bool($preAdviceByDriver)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preAdviceByDriver, true), gettype($preAdviceByDriver)), __LINE__);
        }
        $this->PreAdviceByDriver = $preAdviceByDriver;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDelivery
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
     * Get TerminalPickUp value
     * @return bool|null
     */
    public function getTerminalPickUp()
    {
        return $this->TerminalPickUp;
    }
    /**
     * Set TerminalPickUp value
     * @param bool $terminalPickUp
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDelivery
     */
    public function setTerminalPickUp($terminalPickUp = false)
    {
        // validation for constraint: boolean
        if (!is_null($terminalPickUp) && !is_bool($terminalPickUp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($terminalPickUp, true), gettype($terminalPickUp)), __LINE__);
        }
        $this->TerminalPickUp = $terminalPickUp;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDelivery
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDelivery
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
