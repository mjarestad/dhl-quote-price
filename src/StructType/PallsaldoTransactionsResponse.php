<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PallsaldoTransactionsResponse StructType
 * @subpackage Structs
 */
class PallsaldoTransactionsResponse extends AbstractStructBase
{
    /**
     * The PallsaldoTransactionsResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\PallsaldoTransactionsResult
     */
    public $PallsaldoTransactionsResult;
    /**
     * Constructor method for PallsaldoTransactionsResponse
     * @uses PallsaldoTransactionsResponse::setPallsaldoTransactionsResult()
     * @param \Mjarestad\DHL\QuotePrice\StructType\PallsaldoTransactionsResult $pallsaldoTransactionsResult
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\PallsaldoTransactionsResult $pallsaldoTransactionsResult = null)
    {
        $this
            ->setPallsaldoTransactionsResult($pallsaldoTransactionsResult);
    }
    /**
     * Get PallsaldoTransactionsResult value
     * @return \Mjarestad\DHL\QuotePrice\StructType\PallsaldoTransactionsResult|null
     */
    public function getPallsaldoTransactionsResult()
    {
        return $this->PallsaldoTransactionsResult;
    }
    /**
     * Set PallsaldoTransactionsResult value
     * @param \Mjarestad\DHL\QuotePrice\StructType\PallsaldoTransactionsResult $pallsaldoTransactionsResult
     * @return \Mjarestad\DHL\QuotePrice\StructType\PallsaldoTransactionsResponse
     */
    public function setPallsaldoTransactionsResult(\Mjarestad\DHL\QuotePrice\StructType\PallsaldoTransactionsResult $pallsaldoTransactionsResult = null)
    {
        $this->PallsaldoTransactionsResult = $pallsaldoTransactionsResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\PallsaldoTransactionsResponse
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
