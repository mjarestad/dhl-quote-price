<?php

namespace Mjarestad\DHL\QuotePrice\EnumType;

/**
 * This class stands for tDangerousOrWarm EnumType
 * @subpackage Enumerations
 */
class TDangerousOrWarm
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Dangerous'
     * @return string 'Dangerous'
     */
    const VALUE_DANGEROUS = 'Dangerous';
    /**
     * Constant for value 'Warm'
     * @return string 'Warm'
     */
    const VALUE_WARM = 'Warm';
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
     * @uses self::VALUE_DANGEROUS
     * @uses self::VALUE_WARM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_DANGEROUS,
            self::VALUE_WARM,
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
