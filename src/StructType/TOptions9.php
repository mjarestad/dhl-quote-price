<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tOptions9 StructType
 * @subpackage Structs
 */
class TOptions9 extends AbstractStructBase
{
    /**
     * The Combiterm
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Combiterm;
    /**
     * The COD
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TCOD_EC
     */
    public $COD;
    /**
     * The DangerousGoods
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $DangerousGoods;
    /**
     * The Insurance
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TInsurance_EC
     */
    public $Insurance;
    /**
     * The NumberOfPallets
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPallets;
    /**
     * The NumberOfItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfItems;
    /**
     * Constructor method for tOptions9
     * @uses TOptions9::setCombiterm()
     * @uses TOptions9::setCOD()
     * @uses TOptions9::setDangerousGoods()
     * @uses TOptions9::setInsurance()
     * @uses TOptions9::setNumberOfPallets()
     * @uses TOptions9::setNumberOfItems()
     * @param string $combiterm
     * @param \Mjarestad\DHL\QuotePrice\StructType\TCOD_EC $cOD
     * @param bool $dangerousGoods
     * @param \Mjarestad\DHL\QuotePrice\StructType\TInsurance_EC $insurance
     * @param int $numberOfPallets
     * @param int $numberOfItems
     */
    public function __construct($combiterm = null, \Mjarestad\DHL\QuotePrice\StructType\TCOD_EC $cOD = null, $dangerousGoods = false, \Mjarestad\DHL\QuotePrice\StructType\TInsurance_EC $insurance = null, $numberOfPallets = null, $numberOfItems = null)
    {
        $this
            ->setCombiterm($combiterm)
            ->setCOD($cOD)
            ->setDangerousGoods($dangerousGoods)
            ->setInsurance($insurance)
            ->setNumberOfPallets($numberOfPallets)
            ->setNumberOfItems($numberOfItems);
    }
    /**
     * Get Combiterm value
     * @return string|null
     */
    public function getCombiterm()
    {
        return $this->Combiterm;
    }
    /**
     * Set Combiterm value
     * @param string $combiterm
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions9
     */
    public function setCombiterm($combiterm = null)
    {
        // validation for constraint: string
        if (!is_null($combiterm) && !is_string($combiterm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($combiterm, true), gettype($combiterm)), __LINE__);
        }
        $this->Combiterm = $combiterm;
        return $this;
    }
    /**
     * Get COD value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TCOD_EC|null
     */
    public function getCOD()
    {
        return $this->COD;
    }
    /**
     * Set COD value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TCOD_EC $cOD
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions9
     */
    public function setCOD(\Mjarestad\DHL\QuotePrice\StructType\TCOD_EC $cOD = null)
    {
        $this->COD = $cOD;
        return $this;
    }
    /**
     * Get DangerousGoods value
     * @return bool|null
     */
    public function getDangerousGoods()
    {
        return $this->DangerousGoods;
    }
    /**
     * Set DangerousGoods value
     * @param bool $dangerousGoods
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions9
     */
    public function setDangerousGoods($dangerousGoods = false)
    {
        // validation for constraint: boolean
        if (!is_null($dangerousGoods) && !is_bool($dangerousGoods)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dangerousGoods, true), gettype($dangerousGoods)), __LINE__);
        }
        $this->DangerousGoods = $dangerousGoods;
        return $this;
    }
    /**
     * Get Insurance value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TInsurance_EC|null
     */
    public function getInsurance()
    {
        return $this->Insurance;
    }
    /**
     * Set Insurance value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TInsurance_EC $insurance
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions9
     */
    public function setInsurance(\Mjarestad\DHL\QuotePrice\StructType\TInsurance_EC $insurance = null)
    {
        $this->Insurance = $insurance;
        return $this;
    }
    /**
     * Get NumberOfPallets value
     * @return int|null
     */
    public function getNumberOfPallets()
    {
        return $this->NumberOfPallets;
    }
    /**
     * Set NumberOfPallets value
     * @param int $numberOfPallets
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions9
     */
    public function setNumberOfPallets($numberOfPallets = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPallets) && !(is_int($numberOfPallets) || ctype_digit($numberOfPallets))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfPallets, true), gettype($numberOfPallets)), __LINE__);
        }
        $this->NumberOfPallets = $numberOfPallets;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions9
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions9
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
