<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetQuotableAccountForModuleCountryResult StructType
 * @subpackage Structs
 */
class GetQuotableAccountForModuleCountryResult extends AbstractStructBase
{
    /**
     * The QAResponseRow
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\QAResponseRow[]
     */
    public $QAResponseRow;
    /**
     * Constructor method for GetQuotableAccountForModuleCountryResult
     * @uses GetQuotableAccountForModuleCountryResult::setQAResponseRow()
     * @param \Mjarestad\DHL\QuotePrice\StructType\QAResponseRow[] $qAResponseRow
     */
    public function __construct(array $qAResponseRow = array())
    {
        $this
            ->setQAResponseRow($qAResponseRow);
    }
    /**
     * Get QAResponseRow value
     * @return \Mjarestad\DHL\QuotePrice\StructType\QAResponseRow[]|null
     */
    public function getQAResponseRow()
    {
        return $this->QAResponseRow;
    }
    /**
     * This method is responsible for validating the values passed to the setQAResponseRow method
     * This method is willingly generated in order to preserve the one-line inline validation within the setQAResponseRow method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateQAResponseRowForArrayConstraintsFromSetQAResponseRow(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getQuotableAccountForModuleCountryResultQAResponseRowItem) {
            // validation for constraint: itemType
            if (!$getQuotableAccountForModuleCountryResultQAResponseRowItem instanceof \Mjarestad\DHL\QuotePrice\StructType\QAResponseRow) {
                $invalidValues[] = is_object($getQuotableAccountForModuleCountryResultQAResponseRowItem) ? get_class($getQuotableAccountForModuleCountryResultQAResponseRowItem) : sprintf('%s(%s)', gettype($getQuotableAccountForModuleCountryResultQAResponseRowItem), var_export($getQuotableAccountForModuleCountryResultQAResponseRowItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The QAResponseRow property can only contain items of type \Mjarestad\DHL\QuotePrice\StructType\QAResponseRow, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set QAResponseRow value
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\QAResponseRow[] $qAResponseRow
     * @return \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountForModuleCountryResult
     */
    public function setQAResponseRow(array $qAResponseRow = array())
    {
        // validation for constraint: array
        if ('' !== ($qAResponseRowArrayErrorMessage = self::validateQAResponseRowForArrayConstraintsFromSetQAResponseRow($qAResponseRow))) {
            throw new \InvalidArgumentException($qAResponseRowArrayErrorMessage, __LINE__);
        }
        $this->QAResponseRow = $qAResponseRow;
        return $this;
    }
    /**
     * Add item to QAResponseRow value
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\QAResponseRow $item
     * @return \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountForModuleCountryResult
     */
    public function addToQAResponseRow(\Mjarestad\DHL\QuotePrice\StructType\QAResponseRow $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mjarestad\DHL\QuotePrice\StructType\QAResponseRow) {
            throw new \InvalidArgumentException(sprintf('The QAResponseRow property can only contain items of type \Mjarestad\DHL\QuotePrice\StructType\QAResponseRow, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->QAResponseRow[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountForModuleCountryResult
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
