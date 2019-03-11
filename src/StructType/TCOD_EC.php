<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tCOD_EC StructType
 * @subpackage Structs
 */
class TCOD_EC extends AbstractStructBase
{
    /**
     * The _
     * @var float
     */
    public $_;
    /**
     * The currency
     * @var string
     */
    public $currency;
    /**
     * Constructor method for tCOD_EC
     * @uses TCOD_EC::set_()
     * @uses TCOD_EC::setCurrency()
     * @param float $_
     * @param string $currency
     */
    public function __construct($_ = null, $currency = null)
    {
        $this
            ->set_($_)
            ->setCurrency($currency);
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TCOD_EC
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
     * Get currency value
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Mjarestad\DHL\QuotePrice\StructType\TCOD_EC
     */
    public function setCurrency($currency = null)
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TCOD_EC
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
