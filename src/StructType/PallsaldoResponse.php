<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PallsaldoResponse StructType
 * @subpackage Structs
 */
class PallsaldoResponse extends AbstractStructBase
{
    /**
     * The PallsaldoResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\PallsaldoResult
     */
    public $PallsaldoResult;
    /**
     * Constructor method for PallsaldoResponse
     * @uses PallsaldoResponse::setPallsaldoResult()
     * @param \Mjarestad\DHL\QuotePrice\StructType\PallsaldoResult $pallsaldoResult
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\PallsaldoResult $pallsaldoResult = null)
    {
        $this
            ->setPallsaldoResult($pallsaldoResult);
    }
    /**
     * Get PallsaldoResult value
     * @return \Mjarestad\DHL\QuotePrice\StructType\PallsaldoResult|null
     */
    public function getPallsaldoResult()
    {
        return $this->PallsaldoResult;
    }
    /**
     * Set PallsaldoResult value
     * @param \Mjarestad\DHL\QuotePrice\StructType\PallsaldoResult $pallsaldoResult
     * @return \Mjarestad\DHL\QuotePrice\StructType\PallsaldoResponse
     */
    public function setPallsaldoResult(\Mjarestad\DHL\QuotePrice\StructType\PallsaldoResult $pallsaldoResult = null)
    {
        $this->PallsaldoResult = $pallsaldoResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\PallsaldoResponse
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
