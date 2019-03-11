<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tNumberOfRepetisionsOption StructType
 * @subpackage Structs
 */
class TNumberOfRepetisionsOption extends AbstractStructBase
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
     * The Repetitions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $Repetitions;
    /**
     * Constructor method for tNumberOfRepetisionsOption
     * @uses TNumberOfRepetisionsOption::setChecked()
     * @uses TNumberOfRepetisionsOption::setRepetitions()
     * @param bool $checked
     * @param int $repetitions
     */
    public function __construct($checked = null, $repetitions = null)
    {
        $this
            ->setChecked($checked)
            ->setRepetitions($repetitions);
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption
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
     * Get Repetitions value
     * @return int|null
     */
    public function getRepetitions()
    {
        return $this->Repetitions;
    }
    /**
     * Set Repetitions value
     * @param int $repetitions
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption
     */
    public function setRepetitions($repetitions = null)
    {
        // validation for constraint: int
        if (!is_null($repetitions) && !(is_int($repetitions) || ctype_digit($repetitions))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repetitions, true), gettype($repetitions)), __LINE__);
        }
        $this->Repetitions = $repetitions;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNumberOfRepetisionsOption
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
