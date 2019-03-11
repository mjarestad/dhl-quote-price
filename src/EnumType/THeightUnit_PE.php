<?php

namespace Mjarestad\DHL\QuotePrice\EnumType;

/**
 * This class stands for tHeightUnit_PE EnumType
 * @subpackage Enumerations
 */
class THeightUnit_PE
{
    /**
     * Constant for value 'm'
     * @return string 'm'
     */
    const VALUE_M = 'm';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_M
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_M,
        );
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
