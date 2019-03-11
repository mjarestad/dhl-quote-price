<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetQuotableAccountForModuleCountryResponse StructType
 * @subpackage Structs
 */
class GetQuotableAccountForModuleCountryResponse extends AbstractStructBase
{
    /**
     * The GetQuotableAccountForModuleCountryResult
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s22:GetQuotableAccountForModuleCountryResult
     * @var \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountForModuleCountryResult
     */
    public $GetQuotableAccountForModuleCountryResult;
    /**
     * Constructor method for GetQuotableAccountForModuleCountryResponse
     * @uses GetQuotableAccountForModuleCountryResponse::setGetQuotableAccountForModuleCountryResult()
     * @param \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountForModuleCountryResult $getQuotableAccountForModuleCountryResult
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountForModuleCountryResult $getQuotableAccountForModuleCountryResult = null)
    {
        $this
            ->setGetQuotableAccountForModuleCountryResult($getQuotableAccountForModuleCountryResult);
    }
    /**
     * Get GetQuotableAccountForModuleCountryResult value
     * @return \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountForModuleCountryResult|null
     */
    public function getGetQuotableAccountForModuleCountryResult()
    {
        return $this->GetQuotableAccountForModuleCountryResult;
    }
    /**
     * Set GetQuotableAccountForModuleCountryResult value
     * @param \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountForModuleCountryResult $getQuotableAccountForModuleCountryResult
     * @return \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountForModuleCountryResponse
     */
    public function setGetQuotableAccountForModuleCountryResult(\Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountForModuleCountryResult $getQuotableAccountForModuleCountryResult = null)
    {
        $this->GetQuotableAccountForModuleCountryResult = $getQuotableAccountForModuleCountryResult;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountForModuleCountryResponse
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
