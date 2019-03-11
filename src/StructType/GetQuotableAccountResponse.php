<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetQuotableAccountResponse StructType
 * @subpackage Structs
 */
class GetQuotableAccountResponse extends AbstractStructBase
{
    /**
     * The GetQuotableAccountResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s22:GetQuotableAccountResult
     * @var \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountResult
     */
    public $GetQuotableAccountResult;
    /**
     * Constructor method for GetQuotableAccountResponse
     * @uses GetQuotableAccountResponse::setGetQuotableAccountResult()
     * @param \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountResult $getQuotableAccountResult
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountResult $getQuotableAccountResult = null)
    {
        $this
            ->setGetQuotableAccountResult($getQuotableAccountResult);
    }
    /**
     * Get GetQuotableAccountResult value
     * @return \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountResult|null
     */
    public function getGetQuotableAccountResult()
    {
        return $this->GetQuotableAccountResult;
    }
    /**
     * Set GetQuotableAccountResult value
     * @param \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountResult $getQuotableAccountResult
     * @return \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountResponse
     */
    public function setGetQuotableAccountResult(\Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountResult $getQuotableAccountResult = null)
    {
        $this->GetQuotableAccountResult = $getQuotableAccountResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountResponse
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
