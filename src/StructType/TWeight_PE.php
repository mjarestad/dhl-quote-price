<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tWeight_PE StructType
 * @subpackage Structs
 */
class TWeight_PE extends AbstractStructBase
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
     * @var int
     */
    public $_;
    /**
     * Constructor method for tWeight_PE
     * @uses TWeight_PE::setUnit()
     * @uses TWeight_PE::set_()
     * @param string $unit
     * @param int $_
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
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TWeightUnit_PE::valueIsValid()
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TWeightUnit_PE::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $unit
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWeight_PE
     */
    public function setUnit($unit = null)
    {
        // validation for constraint: enumeration
        if (!\Mjarestad\DHL\QuotePrice\EnumType\TWeightUnit_PE::valueIsValid($unit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Mjarestad\DHL\QuotePrice\EnumType\TWeightUnit_PE', is_array($unit) ? implode(', ', $unit) : var_export($unit, true), implode(', ', \Mjarestad\DHL\QuotePrice\EnumType\TWeightUnit_PE::getValidValues())), __LINE__);
        }
        $this->unit = $unit;
        return $this;
    }
    /**
     * Get _ value
     * @return int|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param int $_
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWeight_PE
     */
    public function set_($_ = null)
    {
        // validation for constraint: int
        if (!is_null($_) && !(is_int($_) || ctype_digit($_))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($_, true), gettype($_)), __LINE__);
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWeight_PE
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
