<?php

namespace Mjarestad\DHL\QuotePrice\EnumType;

/**
 * This class stands for tFreightPayer EnumType
 * @subpackage Enumerations
 */
class TFreightPayer
{
    /**
     * Constant for value 'Sender'
     * @return string 'Sender'
     */
    const VALUE_SENDER = 'Sender';
    /**
     * Constant for value 'Receiver'
     * @return string 'Receiver'
     */
    const VALUE_RECEIVER = 'Receiver';
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
     * @uses self::VALUE_SENDER
     * @uses self::VALUE_RECEIVER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SENDER,
            self::VALUE_RECEIVER,
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
