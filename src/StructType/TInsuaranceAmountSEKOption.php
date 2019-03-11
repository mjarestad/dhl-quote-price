<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tInsuaranceAmountSEKOption StructType
 * @subpackage Structs
 */
class TInsuaranceAmountSEKOption extends AbstractStructBase
{
    /**
     * The Checked
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Checked;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $Amount;
    /**
     * Constructor method for tInsuaranceAmountSEKOption
     * @uses TInsuaranceAmountSEKOption::setChecked()
     * @uses TInsuaranceAmountSEKOption::setAmount()
     * @param bool $checked
     * @param float $amount
     */
    public function __construct($checked = null, $amount = null)
    {
        $this
            ->setChecked($checked)
            ->setAmount($amount);
    }
    /**
     * Get Checked value
     * @return bool|null
     */
    public function getChecked()
    {
        return $this->Checked;
    }
    /**
     * Set Checked value
     * @param bool $checked
     * @return \Mjarestad\DHL\QuotePrice\StructType\TInsuaranceAmountSEKOption
     */
    public function setChecked($checked = null)
    {
        // validation for constraint: boolean
        if (!is_null($checked) && !is_bool($checked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($checked, true), gettype($checked)), __LINE__);
        }
        $this->Checked = $checked;
        return $this;
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Mjarestad\DHL\QuotePrice\StructType\TInsuaranceAmountSEKOption
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TInsuaranceAmountSEKOption
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
