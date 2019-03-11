<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tWidth_ER StructType
 * @subpackage Structs
 */
class TWidth_ER extends AbstractStructBase
{
    /**
     * The unit
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $unit;
    /**
     * The _
     * @var float
     */
    public $_;
    /**
     * Constructor method for tWidth_ER
     * @uses TWidth_ER::setUnit()
     * @uses TWidth_ER::set_()
     * @param string $unit
     * @param float $_
     */
    public function __construct($unit = null, $_ = null)
    {
        $this
            ->setUnit($unit)
            ->set_($_);
    }
    /**
     * Get unit value
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }
    /**
     * Set unit value
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TWidthUnit_ER::valueIsValid()
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TWidthUnit_ER::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $unit
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWidth_ER
     */
    public function setUnit($unit = null)
    {
        // validation for constraint: enumeration
        if (!\Mjarestad\DHL\QuotePrice\EnumType\TWidthUnit_ER::valueIsValid($unit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Mjarestad\DHL\QuotePrice\EnumType\TWidthUnit_ER', is_array($unit) ? implode(', ', $unit) : var_export($unit, true), implode(', ', \Mjarestad\DHL\QuotePrice\EnumType\TWidthUnit_ER::getValidValues())), __LINE__);
        }
        $this->unit = $unit;
        return $this;
    }
    /**
     * Get _ value
     * @return float|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param float $_
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWidth_ER
     */
    public function set_($_ = null)
    {
        // validation for constraint: float
        if (!is_null($_) && !(is_float($_) || is_numeric($_))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWidth_ER
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
