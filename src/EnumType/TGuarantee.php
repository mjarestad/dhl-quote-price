<?php

namespace Mjarestad\DHL\QuotePrice\EnumType;

/**
 * This class stands for tGuarantee EnumType
 * @subpackage Enumerations
 */
class TGuarantee
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value '07'
     * @return string '07'
     */
    const VALUE_07 = '07';
    /**
     * Constant for value '10'
     * @return string '10'
     */
    const VALUE_10 = '10';
    /**
     * Constant for value '12'
     * @return string '12'
     */
    const VALUE_12 = '12';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_07
     * @uses self::VALUE_10
     * @uses self::VALUE_12
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_07,
            self::VALUE_10,
            self::VALUE_12,
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
