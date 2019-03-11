<?php

namespace Mjarestad\DHL\QuotePrice\EnumType;

/**
 * This class stands for tCombiterms_PE EnumType
 * @subpackage Enumerations
 */
class TCombiterms_PE
{
    /**
     * Constant for value '022'
     * @return string '022'
     */
    const VALUE_022 = '022';
    /**
     * Constant for value '023'
     * @return string '023'
     */
    const VALUE_023 = '023';
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
     * @uses self::VALUE_022
     * @uses self::VALUE_023
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_022,
            self::VALUE_023,
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
