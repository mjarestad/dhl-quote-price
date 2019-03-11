<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tValues8 StructType
 * @subpackage Structs
 */
class TValues8 extends AbstractStructBase
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
     * Constructor method for tValues8
     * @uses TValues8::setNoOfItems()
     * @uses TValues8::setCountryCode()
     * @uses TValues8::setToPostCodeInt()
     * @param int $noOfItems
     * @param string $countryCode
     * @param string $toPostCodeInt
     */
    public function __construct($noOfItems = null, $countryCode = null, $toPostCodeInt = null)
    {
        $this
            ->setNoOfItems($noOfItems)
            ->setCountryCode($countryCode)
            ->setToPostCodeInt($toPostCodeInt);
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues8
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues8
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues8
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues8
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
