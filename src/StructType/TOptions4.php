<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tOptions4 StructType
 * @subpackage Structs
 */
class TOptions4 extends AbstractStructBase
{
    /**
     * The Guarantee
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Guarantee;
    /**
     * The PreAdvice
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $PreAdvice;
    /**
     * The PreAdviceComType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PreAdviceComType;
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
     * The InCarriage
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $InCarriage;
    /**
     * The RecPays
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $RecPays;
    /**
     * The ThirdPtyPays
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $ThirdPtyPays;
    /**
     * The COD
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $COD;
    /**
     * The Insurance
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Insurance;
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
     * The LQ_DangerousGoods
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $LQ_DangerousGoods;
    /**
     * The DeliveryWithoutPOD
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $DeliveryWithoutPOD;
    /**
     * The PickupAtTerminal
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $PickupAtTerminal;
    /**
     * Constructor method for tOptions4
     * @uses TOptions4::setGuarantee()
     * @uses TOptions4::setPreAdvice()
     * @uses TOptions4::setPreAdviceComType()
     * @uses TOptions4::setDeliveryAdvice()
     * @uses TOptions4::setInCarriage()
     * @uses TOptions4::setRecPays()
     * @uses TOptions4::setThirdPtyPays()
     * @uses TOptions4::setCOD()
     * @uses TOptions4::setInsurance()
     * @uses TOptions4::setCO2ClimateCompensation()
     * @uses TOptions4::setLQ_DangerousGoods()
     * @uses TOptions4::setDeliveryWithoutPOD()
     * @uses TOptions4::setPickupAtTerminal()
     * @param string $guarantee
     * @param bool $preAdvice
     * @param string $preAdviceComType
     * @param bool $deliveryAdvice
     * @param bool $inCarriage
     * @param bool $recPays
     * @param bool $thirdPtyPays
     * @param bool $cOD
     * @param bool $insurance
     * @param bool $cO2ClimateCompensation
     * @param bool $lQ_DangerousGoods
     * @param bool $deliveryWithoutPOD
     * @param bool $pickupAtTerminal
     */
    public function __construct($guarantee = null, $preAdvice = false, $preAdviceComType = null, $deliveryAdvice = false, $inCarriage = false, $recPays = false, $thirdPtyPays = false, $cOD = false, $insurance = false, $cO2ClimateCompensation = false, $lQ_DangerousGoods = false, $deliveryWithoutPOD = false, $pickupAtTerminal = false)
    {
        $this
            ->setGuarantee($guarantee)
            ->setPreAdvice($preAdvice)
            ->setPreAdviceComType($preAdviceComType)
            ->setDeliveryAdvice($deliveryAdvice)
            ->setInCarriage($inCarriage)
            ->setRecPays($recPays)
            ->setThirdPtyPays($thirdPtyPays)
            ->setCOD($cOD)
            ->setInsurance($insurance)
            ->setCO2ClimateCompensation($cO2ClimateCompensation)
            ->setLQ_DangerousGoods($lQ_DangerousGoods)
            ->setDeliveryWithoutPOD($deliveryWithoutPOD)
            ->setPickupAtTerminal($pickupAtTerminal);
    }
    /**
     * Get Guarantee value
     * @return string|null
     */
    public function getGuarantee()
    {
        return $this->Guarantee;
    }
    /**
     * Set Guarantee value
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TGuarantee::valueIsValid()
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TGuarantee::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $guarantee
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions4
     */
    public function setGuarantee($guarantee = null)
    {
        // validation for constraint: enumeration
        if (!\Mjarestad\DHL\QuotePrice\EnumType\TGuarantee::valueIsValid($guarantee)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Mjarestad\DHL\QuotePrice\EnumType\TGuarantee', is_array($guarantee) ? implode(', ', $guarantee) : var_export($guarantee, true), implode(', ', \Mjarestad\DHL\QuotePrice\EnumType\TGuarantee::getValidValues())), __LINE__);
        }
        $this->Guarantee = $guarantee;
        return $this;
    }
    /**
     * Get PreAdvice value
     * @return bool|null
     */
    public function getPreAdvice()
    {
        return $this->PreAdvice;
    }
    /**
     * Set PreAdvice value
     * @param bool $preAdvice
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions4
     */
    public function setPreAdvice($preAdvice = false)
    {
        // validation for constraint: boolean
        if (!is_null($preAdvice) && !is_bool($preAdvice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($preAdvice, true), gettype($preAdvice)), __LINE__);
        }
        $this->PreAdvice = $preAdvice;
        return $this;
    }
    /**
     * Get PreAdviceComType value
     * @return string|null
     */
    public function getPreAdviceComType()
    {
        return $this->PreAdviceComType;
    }
    /**
     * Set PreAdviceComType value
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TComType::valueIsValid()
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TComType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $preAdviceComType
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions4
     */
    public function setPreAdviceComType($preAdviceComType = null)
    {
        // validation for constraint: enumeration
        if (!\Mjarestad\DHL\QuotePrice\EnumType\TComType::valueIsValid($preAdviceComType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Mjarestad\DHL\QuotePrice\EnumType\TComType', is_array($preAdviceComType) ? implode(', ', $preAdviceComType) : var_export($preAdviceComType, true), implode(', ', \Mjarestad\DHL\QuotePrice\EnumType\TComType::getValidValues())), __LINE__);
        }
        $this->PreAdviceComType = $preAdviceComType;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions4
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
     * Get InCarriage value
     * @return bool|null
     */
    public function getInCarriage()
    {
        return $this->InCarriage;
    }
    /**
     * Set InCarriage value
     * @param bool $inCarriage
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions4
     */
    public function setInCarriage($inCarriage = false)
    {
        // validation for constraint: boolean
        if (!is_null($inCarriage) && !is_bool($inCarriage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($inCarriage, true), gettype($inCarriage)), __LINE__);
        }
        $this->InCarriage = $inCarriage;
        return $this;
    }
    /**
     * Get RecPays value
     * @return bool|null
     */
    public function getRecPays()
    {
        return $this->RecPays;
    }
    /**
     * Set RecPays value
     * @param bool $recPays
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions4
     */
    public function setRecPays($recPays = false)
    {
        // validation for constraint: boolean
        if (!is_null($recPays) && !is_bool($recPays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($recPays, true), gettype($recPays)), __LINE__);
        }
        $this->RecPays = $recPays;
        return $this;
    }
    /**
     * Get ThirdPtyPays value
     * @return bool|null
     */
    public function getThirdPtyPays()
    {
        return $this->ThirdPtyPays;
    }
    /**
     * Set ThirdPtyPays value
     * @param bool $thirdPtyPays
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions4
     */
    public function setThirdPtyPays($thirdPtyPays = false)
    {
        // validation for constraint: boolean
        if (!is_null($thirdPtyPays) && !is_bool($thirdPtyPays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($thirdPtyPays, true), gettype($thirdPtyPays)), __LINE__);
        }
        $this->ThirdPtyPays = $thirdPtyPays;
        return $this;
    }
    /**
     * Get COD value
     * @return bool|null
     */
    public function getCOD()
    {
        return $this->COD;
    }
    /**
     * Set COD value
     * @param bool $cOD
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions4
     */
    public function setCOD($cOD = false)
    {
        // validation for constraint: boolean
        if (!is_null($cOD) && !is_bool($cOD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cOD, true), gettype($cOD)), __LINE__);
        }
        $this->COD = $cOD;
        return $this;
    }
    /**
     * Get Insurance value
     * @return bool|null
     */
    public function getInsurance()
    {
        return $this->Insurance;
    }
    /**
     * Set Insurance value
     * @param bool $insurance
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions4
     */
    public function setInsurance($insurance = false)
    {
        // validation for constraint: boolean
        if (!is_null($insurance) && !is_bool($insurance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($insurance, true), gettype($insurance)), __LINE__);
        }
        $this->Insurance = $insurance;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions4
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
     * Get LQ_DangerousGoods value
     * @return bool|null
     */
    public function getLQ_DangerousGoods()
    {
        return $this->LQ_DangerousGoods;
    }
    /**
     * Set LQ_DangerousGoods value
     * @param bool $lQ_DangerousGoods
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions4
     */
    public function setLQ_DangerousGoods($lQ_DangerousGoods = false)
    {
        // validation for constraint: boolean
        if (!is_null($lQ_DangerousGoods) && !is_bool($lQ_DangerousGoods)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lQ_DangerousGoods, true), gettype($lQ_DangerousGoods)), __LINE__);
        }
        $this->LQ_DangerousGoods = $lQ_DangerousGoods;
        return $this;
    }
    /**
     * Get DeliveryWithoutPOD value
     * @return bool|null
     */
    public function getDeliveryWithoutPOD()
    {
        return $this->DeliveryWithoutPOD;
    }
    /**
     * Set DeliveryWithoutPOD value
     * @param bool $deliveryWithoutPOD
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions4
     */
    public function setDeliveryWithoutPOD($deliveryWithoutPOD = false)
    {
        // validation for constraint: boolean
        if (!is_null($deliveryWithoutPOD) && !is_bool($deliveryWithoutPOD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deliveryWithoutPOD, true), gettype($deliveryWithoutPOD)), __LINE__);
        }
        $this->DeliveryWithoutPOD = $deliveryWithoutPOD;
        return $this;
    }
    /**
     * Get PickupAtTerminal value
     * @return bool|null
     */
    public function getPickupAtTerminal()
    {
        return $this->PickupAtTerminal;
    }
    /**
     * Set PickupAtTerminal value
     * @param bool $pickupAtTerminal
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions4
     */
    public function setPickupAtTerminal($pickupAtTerminal = false)
    {
        // validation for constraint: boolean
        if (!is_null($pickupAtTerminal) && !is_bool($pickupAtTerminal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($pickupAtTerminal, true), gettype($pickupAtTerminal)), __LINE__);
        }
        $this->PickupAtTerminal = $pickupAtTerminal;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions4
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
