<?php

namespace Mjarestad\DHL\QuotePrice\EnumType;

/**
 * This class stands for tWidthUnit EnumType
 * @subpackage Enumerations
 */
class TWidthUnit
{
    /**
     * Constant for value 'cm'
     * @return string 'cm'
     */
    const VALUE_CM = 'cm';
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
     * @uses self::VALUE_CM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CM,
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
