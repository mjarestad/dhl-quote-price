<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuoteForPriceResponse StructType
 * @subpackage Structs
 */
class QuoteForPriceResponse extends AbstractStructBase
{
    /**
     * The QuoteForPriceResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s21:QuoteForPriceResult
     * @var \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceResult
     */
    public $QuoteForPriceResult;
    /**
     * Constructor method for QuoteForPriceResponse
     * @uses QuoteForPriceResponse::setQuoteForPriceResult()
     * @param \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceResult $quoteForPriceResult
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceResult $quoteForPriceResult = null)
    {
        $this
            ->setQuoteForPriceResult($quoteForPriceResult);
    }
    /**
     * Get QuoteForPriceResult value
     * @return \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceResult|null
     */
    public function getQuoteForPriceResult()
    {
        return $this->QuoteForPriceResult;
    }
    /**
     * Set QuoteForPriceResult value
     * @param \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceResult $quoteForPriceResult
     * @return \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceResponse
     */
    public function setQuoteForPriceResult(\Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceResult $quoteForPriceResult = null)
    {
        $this->QuoteForPriceResult = $quoteForPriceResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceResponse
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
