<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tOptionsHomeDeliveryExternal StructType
 * @subpackage Structs
 */
class TOptionsHomeDeliveryExternal extends AbstractStructBase
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
     * The TwoManDelivery
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $TwoManDelivery;
    /**
     * The CarryingHelp
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $CarryingHelp;
    /**
     * The PackagingRemoval
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $PackagingRemoval;
    /**
     * The DisposalOfReplacedGoods
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption
     */
    public $DisposalOfReplacedGoods;
    /**
     * The InstallationLight
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption
     */
    public $InstallationLight;
    /**
     * The InstallationAdvanced
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption
     */
    public $InstallationAdvanced;
    /**
     * The Assembly20
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption
     */
    public $Assembly20;
    /**
     * The Assembly40
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption
     */
    public $Assembly40;
    /**
     * The Assembly60
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption
     */
    public $Assembly60;
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
     * Constructor method for tOptionsHomeDeliveryExternal
     * @uses TOptionsHomeDeliveryExternal::setInsurance()
     * @uses TOptionsHomeDeliveryExternal::setAllocatedTimeSlot()
     * @uses TOptionsHomeDeliveryExternal::setIndoorDelivery()
     * @uses TOptionsHomeDeliveryExternal::setPreAdviceByDriver()
     * @uses TOptionsHomeDeliveryExternal::setTwoManDelivery()
     * @uses TOptionsHomeDeliveryExternal::setCarryingHelp()
     * @uses TOptionsHomeDeliveryExternal::setPackagingRemoval()
     * @uses TOptionsHomeDeliveryExternal::setDisposalOfReplacedGoods()
     * @uses TOptionsHomeDeliveryExternal::setInstallationLight()
     * @uses TOptionsHomeDeliveryExternal::setInstallationAdvanced()
     * @uses TOptionsHomeDeliveryExternal::setAssembly20()
     * @uses TOptionsHomeDeliveryExternal::setAssembly40()
     * @uses TOptionsHomeDeliveryExternal::setAssembly60()
     * @uses TOptionsHomeDeliveryExternal::setEveningDelivery()
     * @uses TOptionsHomeDeliveryExternal::setEveningDeliveryB()
     * @uses TOptionsHomeDeliveryExternal::setEveningDeliveryC()
     * @uses TOptionsHomeDeliveryExternal::setEveningDeliveryD()
     * @uses TOptionsHomeDeliveryExternal::setEveningDeliveryE()
     * @uses TOptionsHomeDeliveryExternal::setWeekendDelivery()
     * @uses TOptionsHomeDeliveryExternal::setShipmentMonitoring()
     * @uses TOptionsHomeDeliveryExternal::setCO2ClimateCompensation()
     * @param \Mjarestad\DHL\QuotePrice\StructType\TInsuaranceAmountSEKOption $insurance
     * @param bool $allocatedTimeSlot
     * @param bool $indoorDelivery
     * @param bool $preAdviceByDriver
     * @param bool $twoManDelivery
     * @param bool $carryingHelp
     * @param bool $packagingRemoval
     * @param \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $disposalOfReplacedGoods
     * @param \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $installationLight
     * @param \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $installationAdvanced
     * @param \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $assembly20
     * @param \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $assembly40
     * @param \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $assembly60
     * @param bool $eveningDelivery
     * @param bool $eveningDeliveryB
     * @param bool $eveningDeliveryC
     * @param bool $eveningDeliveryD
     * @param bool $eveningDeliveryE
     * @param bool $weekendDelivery
     * @param bool $shipmentMonitoring
     * @param bool $cO2ClimateCompensation
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\TInsuaranceAmountSEKOption $insurance = null, $allocatedTimeSlot = false, $indoorDelivery = false, $preAdviceByDriver = false, $twoManDelivery = false, $carryingHelp = false, $packagingRemoval = false, \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $disposalOfReplacedGoods = null, \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $installationLight = null, \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $installationAdvanced = null, \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $assembly20 = null, \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $assembly40 = null, \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $assembly60 = null, $eveningDelivery = false, $eveningDeliveryB = false, $eveningDeliveryC = false, $eveningDeliveryD = false, $eveningDeliveryE = false, $weekendDelivery = false, $shipmentMonitoring = false, $cO2ClimateCompensation = false)
    {
        $this
            ->setInsurance($insurance)
            ->setAllocatedTimeSlot($allocatedTimeSlot)
            ->setIndoorDelivery($indoorDelivery)
            ->setPreAdviceByDriver($preAdviceByDriver)
            ->setTwoManDelivery($twoManDelivery)
            ->setCarryingHelp($carryingHelp)
            ->setPackagingRemoval($packagingRemoval)
            ->setDisposalOfReplacedGoods($disposalOfReplacedGoods)
            ->setInstallationLight($installationLight)
            ->setInstallationAdvanced($installationAdvanced)
            ->setAssembly20($assembly20)
            ->setAssembly40($assembly40)
            ->setAssembly60($assembly60)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
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
     * Get CarryingHelp value
     * @return bool|null
     */
    public function getCarryingHelp()
    {
        return $this->CarryingHelp;
    }
    /**
     * Set CarryingHelp value
     * @param bool $carryingHelp
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
     */
    public function setCarryingHelp($carryingHelp = false)
    {
        // validation for constraint: boolean
        if (!is_null($carryingHelp) && !is_bool($carryingHelp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($carryingHelp, true), gettype($carryingHelp)), __LINE__);
        }
        $this->CarryingHelp = $carryingHelp;
        return $this;
    }
    /**
     * Get PackagingRemoval value
     * @return bool|null
     */
    public function getPackagingRemoval()
    {
        return $this->PackagingRemoval;
    }
    /**
     * Set PackagingRemoval value
     * @param bool $packagingRemoval
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
     */
    public function setPackagingRemoval($packagingRemoval = false)
    {
        // validation for constraint: boolean
        if (!is_null($packagingRemoval) && !is_bool($packagingRemoval)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($packagingRemoval, true), gettype($packagingRemoval)), __LINE__);
        }
        $this->PackagingRemoval = $packagingRemoval;
        return $this;
    }
    /**
     * Get DisposalOfReplacedGoods value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption|null
     */
    public function getDisposalOfReplacedGoods()
    {
        return $this->DisposalOfReplacedGoods;
    }
    /**
     * Set DisposalOfReplacedGoods value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $disposalOfReplacedGoods
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
     */
    public function setDisposalOfReplacedGoods(\Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $disposalOfReplacedGoods = null)
    {
        $this->DisposalOfReplacedGoods = $disposalOfReplacedGoods;
        return $this;
    }
    /**
     * Get InstallationLight value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption|null
     */
    public function getInstallationLight()
    {
        return $this->InstallationLight;
    }
    /**
     * Set InstallationLight value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $installationLight
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
     */
    public function setInstallationLight(\Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $installationLight = null)
    {
        $this->InstallationLight = $installationLight;
        return $this;
    }
    /**
     * Get InstallationAdvanced value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption|null
     */
    public function getInstallationAdvanced()
    {
        return $this->InstallationAdvanced;
    }
    /**
     * Set InstallationAdvanced value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $installationAdvanced
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
     */
    public function setInstallationAdvanced(\Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $installationAdvanced = null)
    {
        $this->InstallationAdvanced = $installationAdvanced;
        return $this;
    }
    /**
     * Get Assembly20 value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption|null
     */
    public function getAssembly20()
    {
        return $this->Assembly20;
    }
    /**
     * Set Assembly20 value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $assembly20
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
     */
    public function setAssembly20(\Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $assembly20 = null)
    {
        $this->Assembly20 = $assembly20;
        return $this;
    }
    /**
     * Get Assembly40 value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption|null
     */
    public function getAssembly40()
    {
        return $this->Assembly40;
    }
    /**
     * Set Assembly40 value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $assembly40
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
     */
    public function setAssembly40(\Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $assembly40 = null)
    {
        $this->Assembly40 = $assembly40;
        return $this;
    }
    /**
     * Get Assembly60 value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption|null
     */
    public function getAssembly60()
    {
        return $this->Assembly60;
    }
    /**
     * Set Assembly60 value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $assembly60
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
     */
    public function setAssembly60(\Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption $assembly60 = null)
    {
        $this->Assembly60 = $assembly60;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
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
