<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tValues6 StructType
 * @subpackage Structs
 */
class TValues6 extends AbstractStructBase
{
    /**
     * The NoOfPallets
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $NoOfPallets;
    /**
     * The NoOfItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NoOfItems;
    /**
     * The NoOfEURPallets
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NoOfEURPallets;
    /**
     * The CODAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE
     */
    public $CODAmount;
    /**
     * The GoodsValue
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $GoodsValue;
    /**
     * Constructor method for tValues6
     * @uses TValues6::setNoOfPallets()
     * @uses TValues6::setNoOfItems()
     * @uses TValues6::setNoOfEURPallets()
     * @uses TValues6::setCODAmount()
     * @uses TValues6::setGoodsValue()
     * @param string $noOfPallets
     * @param int $noOfItems
     * @param int $noOfEURPallets
     * @param \Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE $cODAmount
     * @param int $goodsValue
     */
    public function __construct($noOfPallets = null, $noOfItems = null, $noOfEURPallets = null, \Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE $cODAmount = null, $goodsValue = null)
    {
        $this
            ->setNoOfPallets($noOfPallets)
            ->setNoOfItems($noOfItems)
            ->setNoOfEURPallets($noOfEURPallets)
            ->setCODAmount($cODAmount)
            ->setGoodsValue($goodsValue);
    }
    /**
     * Get NoOfPallets value
     * @return string
     */
    public function getNoOfPallets()
    {
        return $this->NoOfPallets;
    }
    /**
     * Set NoOfPallets value
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TNoOfPallets::valueIsValid()
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TNoOfPallets::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $noOfPallets
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues6
     */
    public function setNoOfPallets($noOfPallets = null)
    {
        // validation for constraint: enumeration
        if (!\Mjarestad\DHL\QuotePrice\EnumType\TNoOfPallets::valueIsValid($noOfPallets)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Mjarestad\DHL\QuotePrice\EnumType\TNoOfPallets', is_array($noOfPallets) ? implode(', ', $noOfPallets) : var_export($noOfPallets, true), implode(', ', \Mjarestad\DHL\QuotePrice\EnumType\TNoOfPallets::getValidValues())), __LINE__);
        }
        $this->NoOfPallets = $noOfPallets;
        return $this;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues6
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
     * Get NoOfEURPallets value
     * @return int|null
     */
    public function getNoOfEURPallets()
    {
        return $this->NoOfEURPallets;
    }
    /**
     * Set NoOfEURPallets value
     * @param int $noOfEURPallets
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues6
     */
    public function setNoOfEURPallets($noOfEURPallets = null)
    {
        // validation for constraint: int
        if (!is_null($noOfEURPallets) && !(is_int($noOfEURPallets) || ctype_digit($noOfEURPallets))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfEURPallets, true), gettype($noOfEURPallets)), __LINE__);
        }
        $this->NoOfEURPallets = $noOfEURPallets;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues6
     */
    public function setCODAmount(\Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE $cODAmount = null)
    {
        $this->CODAmount = $cODAmount;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues6
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues6
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
