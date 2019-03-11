<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tValues3 StructType
 * @subpackage Structs
 */
class TValues3 extends AbstractStructBase
{
    /**
     * The NoOfFullPallets
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NoOfFullPallets;
    /**
     * The NoOfHalfPallets
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NoOfHalfPallets;
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
     * Constructor method for tValues3
     * @uses TValues3::setNoOfFullPallets()
     * @uses TValues3::setNoOfHalfPallets()
     * @uses TValues3::setNoOfItems()
     * @uses TValues3::setNoOfEURPallets()
     * @uses TValues3::setCODAmount()
     * @uses TValues3::setGoodsValue()
     * @param int $noOfFullPallets
     * @param int $noOfHalfPallets
     * @param int $noOfItems
     * @param int $noOfEURPallets
     * @param \Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE $cODAmount
     * @param int $goodsValue
     */
    public function __construct($noOfFullPallets = null, $noOfHalfPallets = null, $noOfItems = null, $noOfEURPallets = null, \Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE $cODAmount = null, $goodsValue = null)
    {
        $this
            ->setNoOfFullPallets($noOfFullPallets)
            ->setNoOfHalfPallets($noOfHalfPallets)
            ->setNoOfItems($noOfItems)
            ->setNoOfEURPallets($noOfEURPallets)
            ->setCODAmount($cODAmount)
            ->setGoodsValue($goodsValue);
    }
    /**
     * Get NoOfFullPallets value
     * @return int|null
     */
    public function getNoOfFullPallets()
    {
        return $this->NoOfFullPallets;
    }
    /**
     * Set NoOfFullPallets value
     * @param int $noOfFullPallets
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues3
     */
    public function setNoOfFullPallets($noOfFullPallets = null)
    {
        // validation for constraint: int
        if (!is_null($noOfFullPallets) && !(is_int($noOfFullPallets) || ctype_digit($noOfFullPallets))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfFullPallets, true), gettype($noOfFullPallets)), __LINE__);
        }
        $this->NoOfFullPallets = $noOfFullPallets;
        return $this;
    }
    /**
     * Get NoOfHalfPallets value
     * @return int|null
     */
    public function getNoOfHalfPallets()
    {
        return $this->NoOfHalfPallets;
    }
    /**
     * Set NoOfHalfPallets value
     * @param int $noOfHalfPallets
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues3
     */
    public function setNoOfHalfPallets($noOfHalfPallets = null)
    {
        // validation for constraint: int
        if (!is_null($noOfHalfPallets) && !(is_int($noOfHalfPallets) || ctype_digit($noOfHalfPallets))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfHalfPallets, true), gettype($noOfHalfPallets)), __LINE__);
        }
        $this->NoOfHalfPallets = $noOfHalfPallets;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues3
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues3
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues3
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues3
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues3
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
