<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tOptions_PC StructType
 * @subpackage Structs
 */
class TOptions_PC extends AbstractStructBase
{
    /**
     * The Insurance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TInsurance_PC
     */
    public $Insurance;
    /**
     * The Combiterm
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Combiterm;
    /**
     * The DeliveryAdvice
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $DeliveryAdvice;
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
     * The CustomsHandling
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CustomsHandling;
    /**
     * The NumberOfItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfItems;
    /**
     * Constructor method for tOptions_PC
     * @uses TOptions_PC::setInsurance()
     * @uses TOptions_PC::setCombiterm()
     * @uses TOptions_PC::setDeliveryAdvice()
     * @uses TOptions_PC::setCO2ClimateCompensation()
     * @uses TOptions_PC::setCustomsHandling()
     * @uses TOptions_PC::setNumberOfItems()
     * @param \Mjarestad\DHL\QuotePrice\StructType\TInsurance_PC $insurance
     * @param string $combiterm
     * @param bool $deliveryAdvice
     * @param bool $cO2ClimateCompensation
     * @param string $customsHandling
     * @param int $numberOfItems
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\TInsurance_PC $insurance = null, $combiterm = null, $deliveryAdvice = false, $cO2ClimateCompensation = false, $customsHandling = null, $numberOfItems = null)
    {
        $this
            ->setInsurance($insurance)
            ->setCombiterm($combiterm)
            ->setDeliveryAdvice($deliveryAdvice)
            ->setCO2ClimateCompensation($cO2ClimateCompensation)
            ->setCustomsHandling($customsHandling)
            ->setNumberOfItems($numberOfItems);
    }
    /**
     * Get Insurance value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TInsurance_PC|null
     */
    public function getInsurance()
    {
        return $this->Insurance;
    }
    /**
     * Set Insurance value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TInsurance_PC $insurance
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions_PC
     */
    public function setInsurance(\Mjarestad\DHL\QuotePrice\StructType\TInsurance_PC $insurance = null)
    {
        $this->Insurance = $insurance;
        return $this;
    }
    /**
     * Get Combiterm value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCombiterm()
    {
        return isset($this->Combiterm) ? $this->Combiterm : null;
    }
    /**
     * Set Combiterm value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TCombiterms_PC::valueIsValid()
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TCombiterms_PC::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $combiterm
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions_PC
     */
    public function setCombiterm($combiterm = null)
    {
        // validation for constraint: enumeration
        if (!\Mjarestad\DHL\QuotePrice\EnumType\TCombiterms_PC::valueIsValid($combiterm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Mjarestad\DHL\QuotePrice\EnumType\TCombiterms_PC', is_array($combiterm) ? implode(', ', $combiterm) : var_export($combiterm, true), implode(', ', \Mjarestad\DHL\QuotePrice\EnumType\TCombiterms_PC::getValidValues())), __LINE__);
        }
        if (is_null($combiterm) || (is_array($combiterm) && empty($combiterm))) {
            unset($this->Combiterm);
        } else {
            $this->Combiterm = $combiterm;
        }
        return $this;
    }
    /**
     * Get DeliveryAdvice value
     * @return bool|null
     */
    public function getDeliveryAdvice()
    {
        return $this->DeliveryAdvice;
    }
    /**
     * Set DeliveryAdvice value
     * @param bool $deliveryAdvice
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions_PC
     */
    public function setDeliveryAdvice($deliveryAdvice = false)
    {
        // validation for constraint: boolean
        if (!is_null($deliveryAdvice) && !is_bool($deliveryAdvice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deliveryAdvice, true), gettype($deliveryAdvice)), __LINE__);
        }
        $this->DeliveryAdvice = $deliveryAdvice;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions_PC
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
     * Get CustomsHandling value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCustomsHandling()
    {
        return isset($this->CustomsHandling) ? $this->CustomsHandling : null;
    }
    /**
     * Set CustomsHandling value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TCustomsHandling_PC::valueIsValid()
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TCustomsHandling_PC::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $customsHandling
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions_PC
     */
    public function setCustomsHandling($customsHandling = null)
    {
        // validation for constraint: enumeration
        if (!\Mjarestad\DHL\QuotePrice\EnumType\TCustomsHandling_PC::valueIsValid($customsHandling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Mjarestad\DHL\QuotePrice\EnumType\TCustomsHandling_PC', is_array($customsHandling) ? implode(', ', $customsHandling) : var_export($customsHandling, true), implode(', ', \Mjarestad\DHL\QuotePrice\EnumType\TCustomsHandling_PC::getValidValues())), __LINE__);
        }
        if (is_null($customsHandling) || (is_array($customsHandling) && empty($customsHandling))) {
            unset($this->CustomsHandling);
        } else {
            $this->CustomsHandling = $customsHandling;
        }
        return $this;
    }
    /**
     * Get NumberOfItems value
     * @return int|null
     */
    public function getNumberOfItems()
    {
        return $this->NumberOfItems;
    }
    /**
     * Set NumberOfItems value
     * @param int $numberOfItems
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions_PC
     */
    public function setNumberOfItems($numberOfItems = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfItems) && !(is_int($numberOfItems) || ctype_digit($numberOfItems))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfItems, true), gettype($numberOfItems)), __LINE__);
        }
        $this->NumberOfItems = $numberOfItems;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions_PC
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
