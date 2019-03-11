<?php

namespace Mjarestad\DHL\QuotePrice\EnumType;

/**
 * This class stands for tVolumeUnit_PC EnumType
 * @subpackage Enumerations
 */
class TVolumeUnit_PC
{
    /**
     * Constant for value 'm3'
     * @return string 'm3'
     */
    const VALUE_M_3 = 'm3';
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
     * @uses self::VALUE_M_3
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_M_3,
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
