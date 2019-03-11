<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tCODAmountSE StructType
 * @subpackage Structs
 */
class TCODAmountSE extends AbstractStructBase
{
    /**
     * The currency
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $currency;
    /**
     * The _
     * @var float
     */
    public $_;
    /**
     * Constructor method for tCODAmountSE
     * @uses TCODAmountSE::setCurrency()
     * @uses TCODAmountSE::set_()
     * @param string $currency
     * @param float $_
     */
    public function __construct($currency = null, $_ = null)
    {
        $this
            ->setCurrency($currency)
            ->set_($_);
    }
    /**
     * Get currency value
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE
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
