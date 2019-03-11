<?php

namespace Mjarestad\DHL\QuotePrice\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Quote ServiceType
 * @subpackage Services
 */
class Quote extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named QuoteForPriceForModuleCountry
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountry $parameters
     * @return \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountryResponse|bool
     */
    public function QuoteForPriceForModuleCountry(\Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountry $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->QuoteForPriceForModuleCountry($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named QuoteForPrice
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Mjarestad\DHL\QuotePrice\StructType\QuoteForPrice $parameters
     * @return \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceResponse|bool
     */
    public function QuoteForPrice(\Mjarestad\DHL\QuotePrice\StructType\QuoteForPrice $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->QuoteForPrice($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountryResponse|\Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
