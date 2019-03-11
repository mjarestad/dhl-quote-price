<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tSenderReceiver_TD StructType
 * @subpackage Structs
 */
class TSenderReceiver_TD extends AbstractStructBase
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
     * The FromCity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FromCity;
    /**
     * The FromSuburb
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FromSuburb;
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
     * The ToCity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ToCity;
    /**
     * The ToSuburb
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ToSuburb;
    /**
     * Constructor method for tSenderReceiver_TD
     * @uses TSenderReceiver_TD::setFromCountryCode()
     * @uses TSenderReceiver_TD::setFromPostCode()
     * @uses TSenderReceiver_TD::setFromCity()
     * @uses TSenderReceiver_TD::setFromSuburb()
     * @uses TSenderReceiver_TD::setToCountryCode()
     * @uses TSenderReceiver_TD::setToPostCode()
     * @uses TSenderReceiver_TD::setToCity()
     * @uses TSenderReceiver_TD::setToSuburb()
     * @param string $fromCountryCode
     * @param string $fromPostCode
     * @param string $fromCity
     * @param string $fromSuburb
     * @param string $toCountryCode
     * @param string $toPostCode
     * @param string $toCity
     * @param string $toSuburb
     */
    public function __construct($fromCountryCode = null, $fromPostCode = null, $fromCity = null, $fromSuburb = null, $toCountryCode = null, $toPostCode = null, $toCity = null, $toSuburb = null)
    {
        $this
            ->setFromCountryCode($fromCountryCode)
            ->setFromPostCode($fromPostCode)
            ->setFromCity($fromCity)
            ->setFromSuburb($fromSuburb)
            ->setToCountryCode($toCountryCode)
            ->setToPostCode($toPostCode)
            ->setToCity($toCity)
            ->setToSuburb($toSuburb);
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_TD
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_TD
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_TD
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
     * Get FromSuburb value
     * @return string|null
     */
    public function getFromSuburb()
    {
        return $this->FromSuburb;
    }
    /**
     * Set FromSuburb value
     * @param string $fromSuburb
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_TD
     */
    public function setFromSuburb($fromSuburb = null)
    {
        // validation for constraint: string
        if (!is_null($fromSuburb) && !is_string($fromSuburb)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromSuburb, true), gettype($fromSuburb)), __LINE__);
        }
        $this->FromSuburb = $fromSuburb;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_TD
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_TD
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_TD
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
     * Get ToSuburb value
     * @return string|null
     */
    public function getToSuburb()
    {
        return $this->ToSuburb;
    }
    /**
     * Set ToSuburb value
     * @param string $toSuburb
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_TD
     */
    public function setToSuburb($toSuburb = null)
    {
        // validation for constraint: string
        if (!is_null($toSuburb) && !is_string($toSuburb)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toSuburb, true), gettype($toSuburb)), __LINE__);
        }
        $this->ToSuburb = $toSuburb;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_TD
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
