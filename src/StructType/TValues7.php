<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tValues7 StructType
 * @subpackage Structs
 */
class TValues7 extends AbstractStructBase
{
    /**
     * The NoOfItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NoOfItems;
    /**
     * The CODAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE
     */
    public $CODAmount;
    /**
     * The CountryCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CountryCode;
    /**
     * The ToPostCodeInt
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ToPostCodeInt;
    /**
     * The GoodsValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $GoodsValue;
    /**
     * Constructor method for tValues7
     * @uses TValues7::setNoOfItems()
     * @uses TValues7::setCODAmount()
     * @uses TValues7::setCountryCode()
     * @uses TValues7::setToPostCodeInt()
     * @uses TValues7::setGoodsValue()
     * @param int $noOfItems
     * @param \Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE $cODAmount
     * @param string $countryCode
     * @param string $toPostCodeInt
     * @param int $goodsValue
     */
    public function __construct($noOfItems = null, \Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE $cODAmount = null, $countryCode = null, $toPostCodeInt = null, $goodsValue = null)
    {
        $this
            ->setNoOfItems($noOfItems)
            ->setCODAmount($cODAmount)
            ->setCountryCode($countryCode)
            ->setToPostCodeInt($toPostCodeInt)
            ->setGoodsValue($goodsValue);
    }
    /**
     * Get NoOfItems value
     * @return int|null
     */
    public function getNoOfItems()
    {
        return $this->NoOfItems;
    }
    /**
     * Set NoOfItems value
     * @param int $noOfItems
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues7
     */
    public function setNoOfItems($noOfItems = null)
    {
        // validation for constraint: int
        if (!is_null($noOfItems) && !(is_int($noOfItems) || ctype_digit($noOfItems))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfItems, true), gettype($noOfItems)), __LINE__);
        }
        $this->NoOfItems = $noOfItems;
        return $this;
    }
    /**
     * Get CODAmount value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE|null
     */
    public function getCODAmount()
    {
        return $this->CODAmount;
    }
    /**
     * Set CODAmount value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE $cODAmount
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues7
     */
    public function setCODAmount(\Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE $cODAmount = null)
    {
        $this->CODAmount = $cODAmount;
        return $this;
    }
    /**
     * Get CountryCode value
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }
    /**
     * Set CountryCode value
     * @param string $countryCode
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues7
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;
        return $this;
    }
    /**
     * Get ToPostCodeInt value
     * @return string|null
     */
    public function getToPostCodeInt()
    {
        return $this->ToPostCodeInt;
    }
    /**
     * Set ToPostCodeInt value
     * @param string $toPostCodeInt
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues7
     */
    public function setToPostCodeInt($toPostCodeInt = null)
    {
        // validation for constraint: string
        if (!is_null($toPostCodeInt) && !is_string($toPostCodeInt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toPostCodeInt, true), gettype($toPostCodeInt)), __LINE__);
        }
        $this->ToPostCodeInt = $toPostCodeInt;
        return $this;
    }
    /**
     * Get GoodsValue value
     * @return int|null
     */
    public function getGoodsValue()
    {
        return $this->GoodsValue;
    }
    /**
     * Set GoodsValue value
     * @param int $goodsValue
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues7
     */
    public function setGoodsValue($goodsValue = null)
    {
        // validation for constraint: int
        if (!is_null($goodsValue) && !(is_int($goodsValue) || ctype_digit($goodsValue))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($goodsValue, true), gettype($goodsValue)), __LINE__);
        }
        $this->GoodsValue = $goodsValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues7
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
