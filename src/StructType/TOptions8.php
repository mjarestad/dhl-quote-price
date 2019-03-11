<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tOptions8 StructType
 * @subpackage Structs
 */
class TOptions8 extends AbstractStructBase
{
    /**
     * The ImportClearance
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $ImportClearance;
    /**
     * Constructor method for tOptions8
     * @uses TOptions8::setImportClearance()
     * @param bool $importClearance
     */
    public function __construct($importClearance = false)
    {
        $this
            ->setImportClearance($importClearance);
    }
    /**
     * Get ImportClearance value
     * @return bool|null
     */
    public function getImportClearance()
    {
        return $this->ImportClearance;
    }
    /**
     * Set ImportClearance value
     * @param bool $importClearance
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions8
     */
    public function setImportClearance($importClearance = false)
    {
        // validation for constraint: boolean
        if (!is_null($importClearance) && !is_bool($importClearance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($importClearance, true), gettype($importClearance)), __LINE__);
        }
        $this->ImportClearance = $importClearance;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions8
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
