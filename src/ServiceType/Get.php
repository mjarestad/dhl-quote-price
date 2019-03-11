<?php

namespace Mjarestad\DHL\QuotePrice\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetQuotableAccount
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccount $parameters
     * @return \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountResponse|bool
     */
    public function GetQuotableAccount(\Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccount $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetQuotableAccount($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetQuotableAccountForModuleCountry
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountForModuleCountry $parameters
     * @return \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountForModuleCountryResponse|bool
     */
    public function GetQuotableAccountForModuleCountry(\Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountForModuleCountry $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetQuotableAccountForModuleCountry($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountForModuleCountryResponse|\Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountResponse
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
