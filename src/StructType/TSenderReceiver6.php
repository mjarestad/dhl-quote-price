<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tSenderReceiver6 StructType
 * @subpackage Structs
 */
class TSenderReceiver6 extends AbstractStructBase
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
     * The ToPostCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ToPostCode;
    /**
     * The ToCity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ToCity;
    /**
     * Constructor method for tSenderReceiver6
     * @uses TSenderReceiver6::setFromPostCode()
     * @uses TSenderReceiver6::setFromCity()
     * @uses TSenderReceiver6::setToPostCode()
     * @uses TSenderReceiver6::setToCity()
     * @param string $fromPostCode
     * @param string $fromCity
     * @param string $toPostCode
     * @param string $toCity
     */
    public function __construct($fromPostCode = null, $fromCity = null, $toPostCode = null, $toCity = null)
    {
        $this
            ->setFromPostCode($fromPostCode)
            ->setFromCity($fromCity)
            ->setToPostCode($toPostCode)
            ->setToCity($toCity);
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver6
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver6
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
     * Get ToPostCode value
     * @return string|null
     */
    public function getToPostCode()
    {
        return $this->ToPostCode;
    }
    /**
     * Set ToPostCode value
     * @param string $toPostCode
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver6
     */
    public function setToPostCode($toPostCode = null)
    {
        // validation for constraint: string
        if (!is_null($toPostCode) && !is_string($toPostCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toPostCode, true), gettype($toPostCode)), __LINE__);
        }
        $this->ToPostCode = $toPostCode;
        return $this;
    }
    /**
     * Get ToCity value
     * @return string|null
     */
    public function getToCity()
    {
        return $this->ToCity;
    }
    /**
     * Set ToCity value
     * @param string $toCity
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver6
     */
    public function setToCity($toCity = null)
    {
        // validation for constraint: string
        if (!is_null($toCity) && !is_string($toCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toCity, true), gettype($toCity)), __LINE__);
        }
        $this->ToCity = $toCity;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver6
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
