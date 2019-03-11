<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tOptions2 StructType
 * @subpackage Structs
 */
class TOptions2 extends AbstractStructBase
{
    /**
     * The Dangerous
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Dangerous;
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
     * The DeliveryAdvice
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $DeliveryAdvice;
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
     * The Cold
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Cold;
    /**
     * The Warm
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Warm;
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
     * The TailLiftLoading
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $TailLiftLoading;
    /**
     * The TailLiftUnloading
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $TailLiftUnloading;
    /**
     * The PartiPrivate
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $PartiPrivate;
    /**
     * Constructor method for tOptions2
     * @uses TOptions2::setDangerous()
     * @uses TOptions2::setPreAdvice()
     * @uses TOptions2::setDeliveryAdvice()
     * @uses TOptions2::setRecPays()
     * @uses TOptions2::setThirdPtyPays()
     * @uses TOptions2::setCOD()
     * @uses TOptions2::setCold()
     * @uses TOptions2::setWarm()
     * @uses TOptions2::setInsurance()
     * @uses TOptions2::setLQ_DangerousGoods()
     * @uses TOptions2::setDeliveryWithoutPOD()
     * @uses TOptions2::setPickupAtTerminal()
     * @uses TOptions2::setTailLiftLoading()
     * @uses TOptions2::setTailLiftUnloading()
     * @uses TOptions2::setPartiPrivate()
     * @param bool $dangerous
     * @param bool $preAdvice
     * @param bool $deliveryAdvice
     * @param bool $recPays
     * @param bool $thirdPtyPays
     * @param bool $cOD
     * @param bool $cold
     * @param bool $warm
     * @param bool $insurance
     * @param bool $lQ_DangerousGoods
     * @param bool $deliveryWithoutPOD
     * @param bool $pickupAtTerminal
     * @param bool $tailLiftLoading
     * @param bool $tailLiftUnloading
     * @param bool $partiPrivate
     */
    public function __construct($dangerous = false, $preAdvice = false, $deliveryAdvice = false, $recPays = false, $thirdPtyPays = false, $cOD = false, $cold = false, $warm = false, $insurance = false, $lQ_DangerousGoods = false, $deliveryWithoutPOD = false, $pickupAtTerminal = false, $tailLiftLoading = false, $tailLiftUnloading = false, $partiPrivate = false)
    {
        $this
            ->setDangerous($dangerous)
            ->setPreAdvice($preAdvice)
            ->setDeliveryAdvice($deliveryAdvice)
            ->setRecPays($recPays)
            ->setThirdPtyPays($thirdPtyPays)
            ->setCOD($cOD)
            ->setCold($cold)
            ->setWarm($warm)
            ->setInsurance($insurance)
            ->setLQ_DangerousGoods($lQ_DangerousGoods)
            ->setDeliveryWithoutPOD($deliveryWithoutPOD)
            ->setPickupAtTerminal($pickupAtTerminal)
            ->setTailLiftLoading($tailLiftLoading)
            ->setTailLiftUnloading($tailLiftUnloading)
            ->setPartiPrivate($partiPrivate);
    }
    /**
     * Get Dangerous value
     * @return bool|null
     */
    public function getDangerous()
    {
        return $this->Dangerous;
    }
    /**
     * Set Dangerous value
     * @param bool $dangerous
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions2
     */
    public function setDangerous($dangerous = false)
    {
        // validation for constraint: boolean
        if (!is_null($dangerous) && !is_bool($dangerous)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dangerous, true), gettype($dangerous)), __LINE__);
        }
        $this->Dangerous = $dangerous;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions2
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions2
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions2
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions2
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions2
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
     * Get Cold value
     * @return bool|null
     */
    public function getCold()
    {
        return $this->Cold;
    }
    /**
     * Set Cold value
     * @param bool $cold
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions2
     */
    public function setCold($cold = false)
    {
        // validation for constraint: boolean
        if (!is_null($cold) && !is_bool($cold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cold, true), gettype($cold)), __LINE__);
        }
        $this->Cold = $cold;
        return $this;
    }
    /**
     * Get Warm value
     * @return bool|null
     */
    public function getWarm()
    {
        return $this->Warm;
    }
    /**
     * Set Warm value
     * @param bool $warm
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions2
     */
    public function setWarm($warm = false)
    {
        // validation for constraint: boolean
        if (!is_null($warm) && !is_bool($warm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($warm, true), gettype($warm)), __LINE__);
        }
        $this->Warm = $warm;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions2
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions2
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions2
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions2
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
     * Get TailLiftLoading value
     * @return bool|null
     */
    public function getTailLiftLoading()
    {
        return $this->TailLiftLoading;
    }
    /**
     * Set TailLiftLoading value
     * @param bool $tailLiftLoading
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions2
     */
    public function setTailLiftLoading($tailLiftLoading = false)
    {
        // validation for constraint: boolean
        if (!is_null($tailLiftLoading) && !is_bool($tailLiftLoading)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tailLiftLoading, true), gettype($tailLiftLoading)), __LINE__);
        }
        $this->TailLiftLoading = $tailLiftLoading;
        return $this;
    }
    /**
     * Get TailLiftUnloading value
     * @return bool|null
     */
    public function getTailLiftUnloading()
    {
        return $this->TailLiftUnloading;
    }
    /**
     * Set TailLiftUnloading value
     * @param bool $tailLiftUnloading
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions2
     */
    public function setTailLiftUnloading($tailLiftUnloading = false)
    {
        // validation for constraint: boolean
        if (!is_null($tailLiftUnloading) && !is_bool($tailLiftUnloading)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tailLiftUnloading, true), gettype($tailLiftUnloading)), __LINE__);
        }
        $this->TailLiftUnloading = $tailLiftUnloading;
        return $this;
    }
    /**
     * Get PartiPrivate value
     * @return bool|null
     */
    public function getPartiPrivate()
    {
        return $this->PartiPrivate;
    }
    /**
     * Set PartiPrivate value
     * @param bool $partiPrivate
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions2
     */
    public function setPartiPrivate($partiPrivate = false)
    {
        // validation for constraint: boolean
        if (!is_null($partiPrivate) && !is_bool($partiPrivate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($partiPrivate, true), gettype($partiPrivate)), __LINE__);
        }
        $this->PartiPrivate = $partiPrivate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions2
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
