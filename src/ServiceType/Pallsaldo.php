<?php

namespace Mjarestad\DHL\QuotePrice\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Pallsaldo ServiceType
 * @subpackage Services
 */
class Pallsaldo extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named PallsaldoTransactions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Mjarestad\DHL\QuotePrice\StructType\PallsaldoTransactions $parameters
     * @return \Mjarestad\DHL\QuotePrice\StructType\PallsaldoTransactionsResponse|bool
     */
    public function PallsaldoTransactions(\Mjarestad\DHL\QuotePrice\StructType\PallsaldoTransactions $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->PallsaldoTransactions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Pallsaldo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Mjarestad\DHL\QuotePrice\StructType\Pallsaldo $parameters
     * @return \Mjarestad\DHL\QuotePrice\StructType\PallsaldoResponse|bool
     */
    public function Pallsaldo(\Mjarestad\DHL\QuotePrice\StructType\Pallsaldo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Pallsaldo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Mjarestad\DHL\QuotePrice\StructType\PallsaldoResponse|\Mjarestad\DHL\QuotePrice\StructType\PallsaldoTransactionsResponse
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
