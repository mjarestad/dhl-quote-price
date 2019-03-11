<?php

namespace Mjarestad\DHL\QuotePrice\EnumType;

/**
 * This class stands for tImportExport EnumType
 * @subpackage Enumerations
 */
class TImportExport
{
    /**
     * Constant for value 'I'
     * @return string 'I'
     */
    const VALUE_I = 'I';
    /**
     * Constant for value 'E'
     * @return string 'E'
     */
    const VALUE_E = 'E';
    /**
     * Constant for value 'D'
     * @return string 'D'
     */
    const VALUE_D = 'D';
    /**
     * Constant for value 'ED'
     * @return string 'ED'
     */
    const VALUE_ED = 'ED';
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
     * @uses self::VALUE_I
     * @uses self::VALUE_E
     * @uses self::VALUE_D
     * @uses self::VALUE_ED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_I,
            self::VALUE_E,
            self::VALUE_D,
            self::VALUE_ED,
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
