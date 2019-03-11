<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://www.dhltoolbox.se/DHLQuotePriceWS/QuotePrice.asmx?WSDL',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://www.dhltoolbox.se/DHLQuotePriceWS/QuotePrice.asmx?WSDL',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Mjarestad\DHL\QuotePrice\ClassMap::get(),
);
/**
 * Samples for Pallsaldo ServiceType
 */
$pallsaldo = new \Mjarestad\DHL\QuotePrice\ServiceType\Pallsaldo($options);
/**
 * Sample call for PallsaldoTransactions operation/method
 */
if ($pallsaldo->PallsaldoTransactions(new \Mjarestad\DHL\QuotePrice\StructType\PallsaldoTransactions()) !== false) {
    print_r($pallsaldo->getResult());
} else {
    print_r($pallsaldo->getLastError());
}
/**
 * Sample call for Pallsaldo operation/method
 */
if ($pallsaldo->Pallsaldo(new \Mjarestad\DHL\QuotePrice\StructType\Pallsaldo()) !== false) {
    print_r($pallsaldo->getResult());
} else {
    print_r($pallsaldo->getLastError());
}
/**
 * Samples for Quote ServiceType
 */
$quote = new \Mjarestad\DHL\QuotePrice\ServiceType\Quote($options);
/**
 * Sample call for QuoteForPriceForModuleCountry operation/method
 */
if ($quote->QuoteForPriceForModuleCountry(new \Mjarestad\DHL\QuotePrice\StructType\QuoteForPriceForModuleCountry()) !== false) {
    print_r($quote->getResult());
} else {
    print_r($quote->getLastError());
}
/**
 * Sample call for QuoteForPrice operation/method
 */
if ($quote->QuoteForPrice(new \Mjarestad\DHL\QuotePrice\StructType\QuoteForPrice()) !== false) {
    print_r($quote->getResult());
} else {
    print_r($quote->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Mjarestad\DHL\QuotePrice\ServiceType\Get($options);
/**
 * Sample call for GetQuotableAccount operation/method
 */
if ($get->GetQuotableAccount(new \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccount()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetQuotableAccountForModuleCountry operation/method
 */
if ($get->GetQuotableAccountForModuleCountry(new \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccountForModuleCountry()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
