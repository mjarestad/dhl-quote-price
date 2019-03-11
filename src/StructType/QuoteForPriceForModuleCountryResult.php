<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuoteForPriceForModuleCountryResult StructType
 * @subpackage Structs
 */
class QuoteForPriceForModuleCountryResult extends AbstractStructBase
{
    /**
     * The ResponseRow
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\ResponseRow[]
     */
    public $ResponseRow;
    /**
     * Constructor method for QuoteForPriceForModuleCountryResult
     * @uses QuoteForPriceForModuleCountryResult::setResponseRow()
     * @param \Mjarestad\DHL\QuotePrice\StructType\ResponseRow[] $responseRow
     */
    public function __construct(array $responseRow = array())
    {
        $this
            ->setResponseRow($responseRow);
    }
    /**
     * Get ResponseRow value
     * @return \Mjarestad\DHL\QuotePrice\StructType\ResponseRow[]|null
     */
    public function getResponseRow()
    {
        return $this->ResponseRow;
    }
    /**
     * This method is responsible for validating the values passed to the setResponseRow method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResponseRow method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResponseRowForArrayConstraintsFromSetResponseRow(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $quoteForPriceForModuleCountryResultResponseRowItem) {
            // validation for constraint: itemType
            if (!$quoteForPriceForModuleCountryResultResponseRowItem instanceof \Mjarestad\DHL\QuotePrice\StructType\ResponseRow) {
                $invalidValues[] = is_object($quoteForPriceForModuleCountryResultResponseRowItem) ? get_class($quoteForPriceForModuleCountryResultResponseRowItem) : sprintf('%s(%s)', gettype($quoteForPriceForModuleCountryResultResponseRowItem), var_export($quoteForPriceForModuleCountryResultResponseRowItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ResponseRow property can only contain items of type \Mjarestad\DHL\QuotePrice\StructType\ResponseRow, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ResponseRow value
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\ResponseRow[] $responseRow
     * @return \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountryResult
     */
    public function setResponseRow(array $responseRow = array())
    {
        // validation for constraint: array
        if ('' !== ($responseRowArrayErrorMessage = self::validateResponseRowForArrayConstraintsFromSetResponseRow($responseRow))) {
            throw new \InvalidArgumentException($responseRowArrayErrorMessage, __LINE__);
        }
        $this->ResponseRow = $responseRow;
        return $this;
    }
    /**
     * Add item to ResponseRow value
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\ResponseRow $item
     * @return \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountryResult
     */
    public function addToResponseRow(\Mjarestad\DHL\QuotePrice\StructType\ResponseRow $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mjarestad\DHL\QuotePrice\StructType\ResponseRow) {
            throw new \InvalidArgumentException(sprintf('The ResponseRow property can only contain items of type \Mjarestad\DHL\QuotePrice\StructType\ResponseRow, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ResponseRow[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountryResult
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
