<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuoteForPriceForModuleCountry StructType
 * @subpackage Structs
 */
class QuoteForPriceForModuleCountry extends AbstractStructBase
{
    /**
     * The Credentials
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s1:Credentials
     * @var \Mjarestad\DHL\QuotePrice\StructType\Credentials
     */
    public $Credentials;
    /**
     * The Quote
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s2:Quote
     * @var \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public $Quote;
    /**
     * The strCountryCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $strCountryCode;
    /**
     * Constructor method for QuoteForPriceForModuleCountry
     * @uses QuoteForPriceForModuleCountry::setCredentials()
     * @uses QuoteForPriceForModuleCountry::setQuote()
     * @uses QuoteForPriceForModuleCountry::setStrCountryCode()
     * @param \Mjarestad\DHL\QuotePrice\StructType\Credentials $credentials
     * @param \Mjarestad\DHL\QuotePrice\StructType\TQuote $quote
     * @param string $strCountryCode
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\Credentials $credentials = null, \Mjarestad\DHL\QuotePrice\StructType\TQuote $quote = null, $strCountryCode = null)
    {
        $this
            ->setCredentials($credentials)
            ->setQuote($quote)
            ->setStrCountryCode($strCountryCode);
    }
    /**
     * Get Credentials value
     * @return \Mjarestad\DHL\QuotePrice\StructType\Credentials|null
     */
    public function getCredentials()
    {
        return $this->Credentials;
    }
    /**
     * Set Credentials value
     * @param \Mjarestad\DHL\QuotePrice\StructType\Credentials $credentials
     * @return \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountry
     */
    public function setCredentials(\Mjarestad\DHL\QuotePrice\StructType\Credentials $credentials = null)
    {
        $this->Credentials = $credentials;
        return $this;
    }
    /**
     * Get Quote value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote|null
     */
    public function getQuote()
    {
        return $this->Quote;
    }
    /**
     * Set Quote value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TQuote $quote
     * @return \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountry
     */
    public function setQuote(\Mjarestad\DHL\QuotePrice\StructType\TQuote $quote = null)
    {
        $this->Quote = $quote;
        return $this;
    }
    /**
     * Get strCountryCode value
     * @return string|null
     */
    public function getStrCountryCode()
    {
        return $this->strCountryCode;
    }
    /**
     * Set strCountryCode value
     * @param string $strCountryCode
     * @return \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountry
     */
    public function setStrCountryCode($strCountryCode = null)
    {
        // validation for constraint: string
        if (!is_null($strCountryCode) && !is_string($strCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($strCountryCode, true), gettype($strCountryCode)), __LINE__);
        }
        $this->strCountryCode = $strCountryCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountry
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
