<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tValues5 StructType
 * @subpackage Structs
 */
class TValues5 extends AbstractStructBase
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
     * The NoOfEURPallets
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NoOfEURPallets;
    /**
     * The Sort
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Sort;
    /**
     * The Quantity
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Quantity;
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
     * Constructor method for tValues5
     * @uses TValues5::setNoOfItems()
     * @uses TValues5::setNoOfEURPallets()
     * @uses TValues5::setSort()
     * @uses TValues5::setQuantity()
     * @uses TValues5::setCODAmount()
     * @uses TValues5::setGoodsValue()
     * @param int $noOfItems
     * @param int $noOfEURPallets
     * @param int $sort
     * @param int $quantity
     * @param \Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE $cODAmount
     * @param int $goodsValue
     */
    public function __construct($noOfItems = null, $noOfEURPallets = null, $sort = null, $quantity = null, \Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE $cODAmount = null, $goodsValue = null)
    {
        $this
            ->setNoOfItems($noOfItems)
            ->setNoOfEURPallets($noOfEURPallets)
            ->setSort($sort)
            ->setQuantity($quantity)
            ->setCODAmount($cODAmount)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues5
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues5
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
     * Get Sort value
     * @return int|null
     */
    public function getSort()
    {
        return $this->Sort;
    }
    /**
     * Set Sort value
     * @param int $sort
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues5
     */
    public function setSort($sort = null)
    {
        // validation for constraint: int
        if (!is_null($sort) && !(is_int($sort) || ctype_digit($sort))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sort, true), gettype($sort)), __LINE__);
        }
        $this->Sort = $sort;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues5
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues5
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues5
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues5
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
