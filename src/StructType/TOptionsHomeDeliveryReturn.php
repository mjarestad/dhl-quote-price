<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tOptionsHomeDeliveryReturn StructType
 * @subpackage Structs
 */
class TOptionsHomeDeliveryReturn extends AbstractStructBase
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
     * Constructor method for tOptionsHomeDeliveryReturn
     * @uses TOptionsHomeDeliveryReturn::setInsurance()
     * @uses TOptionsHomeDeliveryReturn::setShipmentMonitoring()
     * @uses TOptionsHomeDeliveryReturn::setCO2ClimateCompensation()
     * @param \Mjarestad\DHL\QuotePrice\StructType\TInsuaranceAmountSEKOption $insurance
     * @param bool $shipmentMonitoring
     * @param bool $cO2ClimateCompensation
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\TInsuaranceAmountSEKOption $insurance = null, $shipmentMonitoring = false, $cO2ClimateCompensation = false)
    {
        $this
            ->setInsurance($insurance)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryReturn
     */
    public function setInsurance(\Mjarestad\DHL\QuotePrice\StructType\TInsuaranceAmountSEKOption $insurance = null)
    {
        $this->Insurance = $insurance;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryReturn
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryReturn
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryReturn
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
