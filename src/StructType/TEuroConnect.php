<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tEuroConnect StructType
 * @subpackage Structs
 */
class TEuroConnect extends AbstractStructBase
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
     * @var \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_EC
     */
    public $SenderReceiver;
    /**
     * The Dimensions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TDimensions
     */
    public $Dimensions;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TOptions9
     */
    public $Options;
    /**
     * The OwnSurCharge
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge
     */
    public $OwnSurCharge;
    /**
     * Constructor method for tEuroConnect
     * @uses TEuroConnect::setAgreementNo()
     * @uses TEuroConnect::setSenderReceiver()
     * @uses TEuroConnect::setDimensions()
     * @uses TEuroConnect::setOptions()
     * @uses TEuroConnect::setOwnSurCharge()
     * @param string $agreementNo
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_EC $senderReceiver
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDimensions $dimensions
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOptions9 $options
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge $ownSurCharge
     */
    public function __construct($agreementNo = null, \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_EC $senderReceiver = null, \Mjarestad\DHL\QuotePrice\StructType\TDimensions $dimensions = null, \Mjarestad\DHL\QuotePrice\StructType\TOptions9 $options = null, \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge $ownSurCharge = null)
    {
        $this
            ->setAgreementNo($agreementNo)
            ->setSenderReceiver($senderReceiver)
            ->setDimensions($dimensions)
            ->setOptions($options)
            ->setOwnSurCharge($ownSurCharge);
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TEuroConnect
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_EC|null
     */
    public function getSenderReceiver()
    {
        return $this->SenderReceiver;
    }
    /**
     * Set SenderReceiver value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_EC $senderReceiver
     * @return \Mjarestad\DHL\QuotePrice\StructType\TEuroConnect
     */
    public function setSenderReceiver(\Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_EC $senderReceiver = null)
    {
        $this->SenderReceiver = $senderReceiver;
        return $this;
    }
    /**
     * Get Dimensions value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDimensions|null
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    /**
     * Set Dimensions value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDimensions $dimensions
     * @return \Mjarestad\DHL\QuotePrice\StructType\TEuroConnect
     */
    public function setDimensions(\Mjarestad\DHL\QuotePrice\StructType\TDimensions $dimensions = null)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    /**
     * Get Options value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions9|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOptions9 $options
     * @return \Mjarestad\DHL\QuotePrice\StructType\TEuroConnect
     */
    public function setOptions(\Mjarestad\DHL\QuotePrice\StructType\TOptions9 $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Get OwnSurCharge value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge|null
     */
    public function getOwnSurCharge()
    {
        return $this->OwnSurCharge;
    }
    /**
     * Set OwnSurCharge value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge $ownSurCharge
     * @return \Mjarestad\DHL\QuotePrice\StructType\TEuroConnect
     */
    public function setOwnSurCharge(\Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge $ownSurCharge = null)
    {
        $this->OwnSurCharge = $ownSurCharge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TEuroConnect
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
