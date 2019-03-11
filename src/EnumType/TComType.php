<?php

namespace Mjarestad\DHL\QuotePrice\EnumType;

/**
 * This class stands for tComType EnumType
 * @subpackage Enumerations
 */
class TComType
{
    /**
     * Constant for value 'Phone'
     * @return string 'Phone'
     */
    const VALUE_PHONE = 'Phone';
    /**
     * Constant for value 'SMS'
     * @return string 'SMS'
     */
    const VALUE_SMS = 'SMS';
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
     * @uses self::VALUE_PHONE
     * @uses self::VALUE_SMS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PHONE,
            self::VALUE_SMS,
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
