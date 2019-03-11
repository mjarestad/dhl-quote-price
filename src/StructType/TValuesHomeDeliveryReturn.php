<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tValuesHomeDeliveryReturn StructType
 * @subpackage Structs
 */
class TValuesHomeDeliveryReturn extends AbstractStructBase
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
     * Constructor method for tValuesHomeDeliveryReturn
     * @uses TValuesHomeDeliveryReturn::setNoOfItems()
     * @param int $noOfItems
     */
    public function __construct($noOfItems = null)
    {
        $this
            ->setNoOfItems($noOfItems);
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryReturn
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryReturn
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
