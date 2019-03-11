<?php

namespace Mjarestad\DHL\QuotePrice\EnumType;

/**
 * This class stands for tCustomsHandling_PC EnumType
 * @subpackage Enumerations
 */
class TCustomsHandling_PC
{
    /**
     * Constant for value 'Full'
     * @return string 'Full'
     */
    const VALUE_FULL = 'Full';
    /**
     * Constant for value 'Standard'
     * @return string 'Standard'
     */
    const VALUE_STANDARD = 'Standard';
    /**
     * Constant for value 'Own'
     * @return string 'Own'
     */
    const VALUE_OWN = 'Own';
    /**
     * Constant for value 'Joint'
     * @return string 'Joint'
     */
    const VALUE_JOINT = 'Joint';
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
     * @uses self::VALUE_FULL
     * @uses self::VALUE_STANDARD
     * @uses self::VALUE_OWN
     * @uses self::VALUE_JOINT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FULL,
            self::VALUE_STANDARD,
            self::VALUE_OWN,
            self::VALUE_JOINT,
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
