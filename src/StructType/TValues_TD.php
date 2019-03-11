<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tValues_TD StructType
 * @subpackage Structs
 */
class TValues_TD extends AbstractStructBase
{
    /**
     * The PickupDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $PickupDate;
    /**
     * The ReadyTime
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ReadyTime;
    /**
     * The ServiceOpCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $ServiceOpCode;
    /**
     * The RTGMTOffset
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $RTGMTOffset;
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
     * @var \Mjarestad\DHL\QuotePrice\StructType\TCODAmountTD
     */
    public $CODAmount;
    /**
     * The CODCurCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $CODCurCode;
    /**
     * Constructor method for tValues_TD
     * @uses TValues_TD::setPickupDate()
     * @uses TValues_TD::setReadyTime()
     * @uses TValues_TD::setServiceOpCode()
     * @uses TValues_TD::setRTGMTOffset()
     * @uses TValues_TD::setNoOfItems()
     * @uses TValues_TD::setCODAmount()
     * @uses TValues_TD::setCODCurCode()
     * @param string $pickupDate
     * @param string $readyTime
     * @param string $serviceOpCode
     * @param string $rTGMTOffset
     * @param int $noOfItems
     * @param \Mjarestad\DHL\QuotePrice\StructType\TCODAmountTD $cODAmount
     * @param string $cODCurCode
     */
    public function __construct($pickupDate = null, $readyTime = null, $serviceOpCode = null, $rTGMTOffset = null, $noOfItems = null, \Mjarestad\DHL\QuotePrice\StructType\TCODAmountTD $cODAmount = null, $cODCurCode = null)
    {
        $this
            ->setPickupDate($pickupDate)
            ->setReadyTime($readyTime)
            ->setServiceOpCode($serviceOpCode)
            ->setRTGMTOffset($rTGMTOffset)
            ->setNoOfItems($noOfItems)
            ->setCODAmount($cODAmount)
            ->setCODCurCode($cODCurCode);
    }
    /**
     * Get PickupDate value
     * @return string
     */
    public function getPickupDate()
    {
        return $this->PickupDate;
    }
    /**
     * Set PickupDate value
     * @param string $pickupDate
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues_TD
     */
    public function setPickupDate($pickupDate = null)
    {
        // validation for constraint: string
        if (!is_null($pickupDate) && !is_string($pickupDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickupDate, true), gettype($pickupDate)), __LINE__);
        }
        $this->PickupDate = $pickupDate;
        return $this;
    }
    /**
     * Get ReadyTime value
     * @return string
     */
    public function getReadyTime()
    {
        return $this->ReadyTime;
    }
    /**
     * Set ReadyTime value
     * @param string $readyTime
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues_TD
     */
    public function setReadyTime($readyTime = null)
    {
        // validation for constraint: string
        if (!is_null($readyTime) && !is_string($readyTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($readyTime, true), gettype($readyTime)), __LINE__);
        }
        $this->ReadyTime = $readyTime;
        return $this;
    }
    /**
     * Get ServiceOpCode value
     * @return string
     */
    public function getServiceOpCode()
    {
        return $this->ServiceOpCode;
    }
    /**
     * Set ServiceOpCode value
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TServiceOpCode::valueIsValid()
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TServiceOpCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $serviceOpCode
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues_TD
     */
    public function setServiceOpCode($serviceOpCode = null)
    {
        // validation for constraint: enumeration
        if (!\Mjarestad\DHL\QuotePrice\EnumType\TServiceOpCode::valueIsValid($serviceOpCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Mjarestad\DHL\QuotePrice\EnumType\TServiceOpCode', is_array($serviceOpCode) ? implode(', ', $serviceOpCode) : var_export($serviceOpCode, true), implode(', ', \Mjarestad\DHL\QuotePrice\EnumType\TServiceOpCode::getValidValues())), __LINE__);
        }
        $this->ServiceOpCode = $serviceOpCode;
        return $this;
    }
    /**
     * Get RTGMTOffset value
     * @return string|null
     */
    public function getRTGMTOffset()
    {
        return $this->RTGMTOffset;
    }
    /**
     * Set RTGMTOffset value
     * @param string $rTGMTOffset
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues_TD
     */
    public function setRTGMTOffset($rTGMTOffset = null)
    {
        // validation for constraint: string
        if (!is_null($rTGMTOffset) && !is_string($rTGMTOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rTGMTOffset, true), gettype($rTGMTOffset)), __LINE__);
        }
        $this->RTGMTOffset = $rTGMTOffset;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues_TD
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TCODAmountTD|null
     */
    public function getCODAmount()
    {
        return $this->CODAmount;
    }
    /**
     * Set CODAmount value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TCODAmountTD $cODAmount
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues_TD
     */
    public function setCODAmount(\Mjarestad\DHL\QuotePrice\StructType\TCODAmountTD $cODAmount = null)
    {
        $this->CODAmount = $cODAmount;
        return $this;
    }
    /**
     * Get CODCurCode value
     * @return string|null
     */
    public function getCODCurCode()
    {
        return $this->CODCurCode;
    }
    /**
     * Set CODCurCode value
     * @param string $cODCurCode
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues_TD
     */
    public function setCODCurCode($cODCurCode = null)
    {
        // validation for constraint: string
        if (!is_null($cODCurCode) && !is_string($cODCurCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cODCurCode, true), gettype($cODCurCode)), __LINE__);
        }
        $this->CODCurCode = $cODCurCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues_TD
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
