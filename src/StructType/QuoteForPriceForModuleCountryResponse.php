<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuoteForPriceForModuleCountryResponse StructType
 * @subpackage Structs
 */
class QuoteForPriceForModuleCountryResponse extends AbstractStructBase
{
    /**
     * The QuoteForPriceForModuleCountryResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s21:QuoteForPriceForModuleCountryResult
     * @var \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountryResult
     */
    public $QuoteForPriceForModuleCountryResult;
    /**
     * Constructor method for QuoteForPriceForModuleCountryResponse
     * @uses QuoteForPriceForModuleCountryResponse::setQuoteForPriceForModuleCountryResult()
     * @param \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountryResult $quoteForPriceForModuleCountryResult
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountryResult $quoteForPriceForModuleCountryResult = null)
    {
        $this
            ->setQuoteForPriceForModuleCountryResult($quoteForPriceForModuleCountryResult);
    }
    /**
     * Get QuoteForPriceForModuleCountryResult value
     * @return \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountryResult|null
     */
    public function getQuoteForPriceForModuleCountryResult()
    {
        return $this->QuoteForPriceForModuleCountryResult;
    }
    /**
     * Set QuoteForPriceForModuleCountryResult value
     * @param \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountryResult $quoteForPriceForModuleCountryResult
     * @return \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountryResponse
     */
    public function setQuoteForPriceForModuleCountryResult(\Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountryResult $quoteForPriceForModuleCountryResult = null)
    {
        $this->QuoteForPriceForModuleCountryResult = $quoteForPriceForModuleCountryResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountryResponse
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
