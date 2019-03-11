<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tProduct StructType
 * @subpackage Structs
 */
class TProduct extends AbstractStructBase
{
    /**
     * The ProductCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProductCode;
    /**
     * The ProductDescription
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ProductDescription;
    /**
     * Constructor method for tProduct
     * @uses TProduct::setProductCode()
     * @uses TProduct::setProductDescription()
     * @param string $productCode
     * @param string $productDescription
     */
    public function __construct($productCode = null, $productDescription = null)
    {
        $this
            ->setProductCode($productCode)
            ->setProductDescription($productDescription);
    }
    /**
     * Get ProductCode value
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->ProductCode;
    }
    /**
     * Set ProductCode value
     * @param string $productCode
     * @return \Mjarestad\DHL\QuotePrice\StructType\TProduct
     */
    public function setProductCode($productCode = null)
    {
        // validation for constraint: string
        if (!is_null($productCode) && !is_string($productCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productCode, true), gettype($productCode)), __LINE__);
        }
        $this->ProductCode = $productCode;
        return $this;
    }
    /**
     * Get ProductDescription value
     * @return string|null
     */
    public function getProductDescription()
    {
        return $this->ProductDescription;
    }
    /**
     * Set ProductDescription value
     * @param string $productDescription
     * @return \Mjarestad\DHL\QuotePrice\StructType\TProduct
     */
    public function setProductDescription($productDescription = null)
    {
        // validation for constraint: string
        if (!is_null($productDescription) && !is_string($productDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productDescription, true), gettype($productDescription)), __LINE__);
        }
        $this->ProductDescription = $productDescription;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TProduct
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
