<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QAResponseRow StructType
 * @subpackage Structs
 */
class QAResponseRow extends AbstractStructBase
{
    /**
     * The AgreementNo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AgreementNo;
    /**
     * The Product
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TProduct[]
     */
    public $Product;
    /**
     * Constructor method for QAResponseRow
     * @uses QAResponseRow::setAgreementNo()
     * @uses QAResponseRow::setProduct()
     * @param string $agreementNo
     * @param \Mjarestad\DHL\QuotePrice\StructType\TProduct[] $product
     */
    public function __construct($agreementNo = null, array $product = array())
    {
        $this
            ->setAgreementNo($agreementNo)
            ->setProduct($product);
    }
    /**
     * Get AgreementNo value
     * @return string|null
     */
    public function getAgreementNo()
    {
        return $this->AgreementNo;
    }
    /**
     * Set AgreementNo value
     * @param string $agreementNo
     * @return \Mjarestad\DHL\QuotePrice\StructType\QAResponseRow
     */
    public function setAgreementNo($agreementNo = null)
    {
        // validation for constraint: string
        if (!is_null($agreementNo) && !is_string($agreementNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agreementNo, true), gettype($agreementNo)), __LINE__);
        }
        $this->AgreementNo = $agreementNo;
        return $this;
    }
    /**
     * Get Product value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TProduct[]|null
     */
    public function getProduct()
    {
        return $this->Product;
    }
    /**
     * This method is responsible for validating the values passed to the setProduct method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProduct method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductForArrayConstraintsFromSetProduct(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $qAResponseRowProductItem) {
            // validation for constraint: itemType
            if (!$qAResponseRowProductItem instanceof \Mjarestad\DHL\QuotePrice\StructType\TProduct) {
                $invalidValues[] = is_object($qAResponseRowProductItem) ? get_class($qAResponseRowProductItem) : sprintf('%s(%s)', gettype($qAResponseRowProductItem), var_export($qAResponseRowProductItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Product property can only contain items of type \Mjarestad\DHL\QuotePrice\StructType\TProduct, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Product value
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TProduct[] $product
     * @return \Mjarestad\DHL\QuotePrice\StructType\QAResponseRow
     */
    public function setProduct(array $product = array())
    {
        // validation for constraint: array
        if ('' !== ($productArrayErrorMessage = self::validateProductForArrayConstraintsFromSetProduct($product))) {
            throw new \InvalidArgumentException($productArrayErrorMessage, __LINE__);
        }
        $this->Product = $product;
        return $this;
    }
    /**
     * Add item to Product value
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TProduct $item
     * @return \Mjarestad\DHL\QuotePrice\StructType\QAResponseRow
     */
    public function addToProduct(\Mjarestad\DHL\QuotePrice\StructType\TProduct $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mjarestad\DHL\QuotePrice\StructType\TProduct) {
            throw new \InvalidArgumentException(sprintf('The Product property can only contain items of type \Mjarestad\DHL\QuotePrice\StructType\TProduct, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Product[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\QAResponseRow
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
