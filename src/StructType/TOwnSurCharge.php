<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tOwnSurCharge StructType
 * @subpackage Structs
 */
class TOwnSurCharge extends AbstractStructBase
{
    /**
     * The OwnSurChargePerc
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TOwnSurChargePerc
     */
    public $OwnSurChargePerc;
    /**
     * The OwnSurChargeAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $OwnSurChargeAmount;
    /**
     * Constructor method for tOwnSurCharge
     * @uses TOwnSurCharge::setOwnSurChargePerc()
     * @uses TOwnSurCharge::setOwnSurChargeAmount()
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOwnSurChargePerc $ownSurChargePerc
     * @param int $ownSurChargeAmount
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\TOwnSurChargePerc $ownSurChargePerc = null, $ownSurChargeAmount = null)
    {
        $this
            ->setOwnSurChargePerc($ownSurChargePerc)
            ->setOwnSurChargeAmount($ownSurChargeAmount);
    }
    /**
     * Get OwnSurChargePerc value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOwnSurChargePerc|null
     */
    public function getOwnSurChargePerc()
    {
        return $this->OwnSurChargePerc;
    }
    /**
     * Set OwnSurChargePerc value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOwnSurChargePerc $ownSurChargePerc
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge
     */
    public function setOwnSurChargePerc(\Mjarestad\DHL\QuotePrice\StructType\TOwnSurChargePerc $ownSurChargePerc = null)
    {
        $this->OwnSurChargePerc = $ownSurChargePerc;
        return $this;
    }
    /**
     * Get OwnSurChargeAmount value
     * @return int|null
     */
    public function getOwnSurChargeAmount()
    {
        return $this->OwnSurChargeAmount;
    }
    /**
     * Set OwnSurChargeAmount value
     * @param int $ownSurChargeAmount
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge
     */
    public function setOwnSurChargeAmount($ownSurChargeAmount = null)
    {
        // validation for constraint: int
        if (!is_null($ownSurChargeAmount) && !(is_int($ownSurChargeAmount) || ctype_digit($ownSurChargeAmount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ownSurChargeAmount, true), gettype($ownSurChargeAmount)), __LINE__);
        }
        $this->OwnSurChargeAmount = $ownSurChargeAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge
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
