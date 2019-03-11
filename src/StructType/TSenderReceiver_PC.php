<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tSenderReceiver_PC StructType
 * @subpackage Structs
 */
class TSenderReceiver_PC extends AbstractStructBase
{
    /**
     * The FromCountryCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FromCountryCode;
    /**
     * The FromPostCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FromPostCode;
    /**
     * The ToCountryCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ToCountryCode;
    /**
     * The ToPostCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ToPostCode;
    /**
     * Constructor method for tSenderReceiver_PC
     * @uses TSenderReceiver_PC::setFromCountryCode()
     * @uses TSenderReceiver_PC::setFromPostCode()
     * @uses TSenderReceiver_PC::setToCountryCode()
     * @uses TSenderReceiver_PC::setToPostCode()
     * @param string $fromCountryCode
     * @param string $fromPostCode
     * @param string $toCountryCode
     * @param string $toPostCode
     */
    public function __construct($fromCountryCode = null, $fromPostCode = null, $toCountryCode = null, $toPostCode = null)
    {
        $this
            ->setFromCountryCode($fromCountryCode)
            ->setFromPostCode($fromPostCode)
            ->setToCountryCode($toCountryCode)
            ->setToPostCode($toPostCode);
    }
    /**
     * Get FromCountryCode value
     * @return string|null
     */
    public function getFromCountryCode()
    {
        return $this->FromCountryCode;
    }
    /**
     * Set FromCountryCode value
     * @param string $fromCountryCode
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_PC
     */
    public function setFromCountryCode($fromCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($fromCountryCode) && !is_string($fromCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromCountryCode, true), gettype($fromCountryCode)), __LINE__);
        }
        $this->FromCountryCode = $fromCountryCode;
        return $this;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_PC
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
     * Get ToCountryCode value
     * @return string|null
     */
    public function getToCountryCode()
    {
        return $this->ToCountryCode;
    }
    /**
     * Set ToCountryCode value
     * @param string $toCountryCode
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_PC
     */
    public function setToCountryCode($toCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($toCountryCode) && !is_string($toCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toCountryCode, true), gettype($toCountryCode)), __LINE__);
        }
        $this->ToCountryCode = $toCountryCode;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_PC
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_PC
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
