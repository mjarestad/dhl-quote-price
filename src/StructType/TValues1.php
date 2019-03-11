<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tValues1 StructType
 * @subpackage Structs
 */
class TValues1 extends AbstractStructBase
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
     * The PalletPlace
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $PalletPlace;
    /**
     * Constructor method for tValues1
     * @uses TValues1::setNoOfItems()
     * @uses TValues1::setNoOfEURPallets()
     * @uses TValues1::setCODAmount()
     * @uses TValues1::setGoodsValue()
     * @uses TValues1::setPalletPlace()
     * @param int $noOfItems
     * @param int $noOfEURPallets
     * @param \Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE $cODAmount
     * @param int $goodsValue
     * @param float $palletPlace
     */
    public function __construct($noOfItems = null, $noOfEURPallets = null, \Mjarestad\DHL\QuotePrice\StructType\TCODAmountSE $cODAmount = null, $goodsValue = null, $palletPlace = null)
    {
        $this
            ->setNoOfItems($noOfItems)
            ->setNoOfEURPallets($noOfEURPallets)
            ->setCODAmount($cODAmount)
            ->setGoodsValue($goodsValue)
            ->setPalletPlace($palletPlace);
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues1
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues1
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues1
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues1
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
     * Get PalletPlace value
     * @return float|null
     */
    public function getPalletPlace()
    {
        return $this->PalletPlace;
    }
    /**
     * Set PalletPlace value
     * @param float $palletPlace
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues1
     */
    public function setPalletPlace($palletPlace = null)
    {
        // validation for constraint: float
        if (!is_null($palletPlace) && !(is_float($palletPlace) || is_numeric($palletPlace))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($palletPlace, true), gettype($palletPlace)), __LINE__);
        }
        $this->PalletPlace = $palletPlace;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues1
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
