<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tDHLExpress StructType
 * @subpackage Structs
 */
class TDHLExpress extends AbstractStructBase
{
    /**
     * The AgreementNo
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AgreementNo;
    /**
     * The SenderReceiver
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_TD
     */
    public $SenderReceiver;
    /**
     * The Dimensions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TDimensions_TD
     */
    public $Dimensions;
    /**
     * The Values
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TValues_TD
     */
    public $Values;
    /**
     * Constructor method for tDHLExpress
     * @uses TDHLExpress::setAgreementNo()
     * @uses TDHLExpress::setSenderReceiver()
     * @uses TDHLExpress::setDimensions()
     * @uses TDHLExpress::setValues()
     * @param string $agreementNo
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_TD $senderReceiver
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDimensions_TD $dimensions
     * @param \Mjarestad\DHL\QuotePrice\StructType\TValues_TD $values
     */
    public function __construct($agreementNo = null, \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_TD $senderReceiver = null, \Mjarestad\DHL\QuotePrice\StructType\TDimensions_TD $dimensions = null, \Mjarestad\DHL\QuotePrice\StructType\TValues_TD $values = null)
    {
        $this
            ->setAgreementNo($agreementNo)
            ->setSenderReceiver($senderReceiver)
            ->setDimensions($dimensions)
            ->setValues($values);
    }
    /**
     * Get AgreementNo value
     * @return string|null
     */
    public function getAgreementNo()
    {
        return $this->AgreementNo;
    }
    /**
     * Set AgreementNo value
     * @param string $agreementNo
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLExpress
     */
    public function setAgreementNo($agreementNo = null)
    {
        // validation for constraint: string
        if (!is_null($agreementNo) && !is_string($agreementNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agreementNo, true), gettype($agreementNo)), __LINE__);
        }
        $this->AgreementNo = $agreementNo;
        return $this;
    }
    /**
     * Get SenderReceiver value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_TD|null
     */
    public function getSenderReceiver()
    {
        return $this->SenderReceiver;
    }
    /**
     * Set SenderReceiver value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_TD $senderReceiver
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLExpress
     */
    public function setSenderReceiver(\Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_TD $senderReceiver = null)
    {
        $this->SenderReceiver = $senderReceiver;
        return $this;
    }
    /**
     * Get Dimensions value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDimensions_TD|null
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    /**
     * Set Dimensions value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDimensions_TD $dimensions
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLExpress
     */
    public function setDimensions(\Mjarestad\DHL\QuotePrice\StructType\TDimensions_TD $dimensions = null)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    /**
     * Get Values value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues_TD|null
     */
    public function getValues()
    {
        return $this->Values;
    }
    /**
     * Set Values value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TValues_TD $values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLExpress
     */
    public function setValues(\Mjarestad\DHL\QuotePrice\StructType\TValues_TD $values = null)
    {
        $this->Values = $values;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLExpress
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
