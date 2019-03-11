<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tSenderReceiver8 StructType
 * @subpackage Structs
 */
class TSenderReceiver8 extends AbstractStructBase
{
    /**
     * The FromPostCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FromPostCode;
    /**
     * The FromCity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FromCity;
    /**
     * Constructor method for tSenderReceiver8
     * @uses TSenderReceiver8::setFromPostCode()
     * @uses TSenderReceiver8::setFromCity()
     * @param string $fromPostCode
     * @param string $fromCity
     */
    public function __construct($fromPostCode = null, $fromCity = null)
    {
        $this
            ->setFromPostCode($fromPostCode)
            ->setFromCity($fromCity);
    }
    /**
     * Get FromPostCode value
     * @return string|null
     */
    public function getFromPostCode()
    {
        return $this->FromPostCode;
    }
    /**
     * Set FromPostCode value
     * @param string $fromPostCode
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver8
     */
    public function setFromPostCode($fromPostCode = null)
    {
        // validation for constraint: string
        if (!is_null($fromPostCode) && !is_string($fromPostCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromPostCode, true), gettype($fromPostCode)), __LINE__);
        }
        $this->FromPostCode = $fromPostCode;
        return $this;
    }
    /**
     * Get FromCity value
     * @return string|null
     */
    public function getFromCity()
    {
        return $this->FromCity;
    }
    /**
     * Set FromCity value
     * @param string $fromCity
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver8
     */
    public function setFromCity($fromCity = null)
    {
        // validation for constraint: string
        if (!is_null($fromCity) && !is_string($fromCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromCity, true), gettype($fromCity)), __LINE__);
        }
        $this->FromCity = $fromCity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver8
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
