<?php

namespace Mjarestad\DHL\QuotePrice\EnumType;

/**
 * This class stands for tServiceOpCode EnumType
 * @subpackage Enumerations
 */
class TServiceOpCode
{
    /**
     * Constant for value 'WPX'
     * @return string 'WPX'
     */
    const VALUE_WPX = 'WPX';
    /**
     * Constant for value 'DOX'
     * @return string 'DOX'
     */
    const VALUE_DOX = 'DOX';
    /**
     * Constant for value 'TDK'
     * @return string 'TDK'
     */
    const VALUE_TDK = 'TDK';
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
     * @uses self::VALUE_WPX
     * @uses self::VALUE_DOX
     * @uses self::VALUE_TDK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WPX,
            self::VALUE_DOX,
            self::VALUE_TDK,
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
