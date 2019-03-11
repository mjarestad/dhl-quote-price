<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Pallsaldo StructType
 * @subpackage Structs
 */
class Pallsaldo extends AbstractStructBase
{
    /**
     * The Customer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Customer;
    /**
     * The PalletType
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $PalletType;
    /**
     * Constructor method for Pallsaldo
     * @uses Pallsaldo::setCustomer()
     * @uses Pallsaldo::setPalletType()
     * @param string $customer
     * @param string $palletType
     */
    public function __construct($customer = null, $palletType = null)
    {
        $this
            ->setCustomer($customer)
            ->setPalletType($palletType);
    }
    /**
     * Get Customer value
     * @return string|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param string $customer
     * @return \Mjarestad\DHL\QuotePrice\StructType\Pallsaldo
     */
    public function setCustomer($customer = null)
    {
        // validation for constraint: string
        if (!is_null($customer) && !is_string($customer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer, true), gettype($customer)), __LINE__);
        }
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get PalletType value
     * @return string|null
     */
    public function getPalletType()
    {
        return $this->PalletType;
    }
    /**
     * Set PalletType value
     * @param string $palletType
     * @return \Mjarestad\DHL\QuotePrice\StructType\Pallsaldo
     */
    public function setPalletType($palletType = null)
    {
        // validation for constraint: string
        if (!is_null($palletType) && !is_string($palletType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($palletType, true), gettype($palletType)), __LINE__);
        }
        $this->PalletType = $palletType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\Pallsaldo
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
