<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tLoadingmeterHomeDeliveryReturn StructType
 * @subpackage Structs
 */
class TLoadingmeterHomeDeliveryReturn extends AbstractStructBase
{
    /**
     * The _
     * @var float
     */
    public $_;
    /**
     * Constructor method for tLoadingmeterHomeDeliveryReturn
     * @uses TLoadingmeterHomeDeliveryReturn::set_()
     * @param float $_
     */
    public function __construct($_ = null)
    {
        $this
            ->set_($_);
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryReturn
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryReturn
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
