<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tParcelConnect StructType
 * @subpackage Structs
 */
class TParcelConnect extends AbstractStructBase
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
     * The Weight
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TWeight_PC
     */
    public $Weight;
    /**
     * The Volume
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TVolume_PC
     */
    public $Volume;
    /**
     * The SenderReceiver
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_PC
     */
    public $SenderReceiver;
    /**
     * The Dimensions
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TDimensions_PC
     */
    public $Dimensions;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TOptions_PC
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
     * Constructor method for tParcelConnect
     * @uses TParcelConnect::setAgreementNo()
     * @uses TParcelConnect::setWeight()
     * @uses TParcelConnect::setVolume()
     * @uses TParcelConnect::setSenderReceiver()
     * @uses TParcelConnect::setDimensions()
     * @uses TParcelConnect::setOptions()
     * @uses TParcelConnect::setOwnSurCharge()
     * @param string $agreementNo
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeight_PC $weight
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolume_PC $volume
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_PC $senderReceiver
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDimensions_PC $dimensions
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOptions_PC $options
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge $ownSurCharge
     */
    public function __construct($agreementNo = null, \Mjarestad\DHL\QuotePrice\StructType\TWeight_PC $weight = null, \Mjarestad\DHL\QuotePrice\StructType\TVolume_PC $volume = null, \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_PC $senderReceiver = null, \Mjarestad\DHL\QuotePrice\StructType\TDimensions_PC $dimensions = null, \Mjarestad\DHL\QuotePrice\StructType\TOptions_PC $options = null, \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge $ownSurCharge = null)
    {
        $this
            ->setAgreementNo($agreementNo)
            ->setWeight($weight)
            ->setVolume($volume)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TParcelConnect
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
     * Get Weight value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWeight_PC|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeight_PC $weight
     * @return \Mjarestad\DHL\QuotePrice\StructType\TParcelConnect
     */
    public function setWeight(\Mjarestad\DHL\QuotePrice\StructType\TWeight_PC $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Volume value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TVolume_PC|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    /**
     * Set Volume value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolume_PC $volume
     * @return \Mjarestad\DHL\QuotePrice\StructType\TParcelConnect
     */
    public function setVolume(\Mjarestad\DHL\QuotePrice\StructType\TVolume_PC $volume = null)
    {
        $this->Volume = $volume;
        return $this;
    }
    /**
     * Get SenderReceiver value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_PC|null
     */
    public function getSenderReceiver()
    {
        return $this->SenderReceiver;
    }
    /**
     * Set SenderReceiver value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_PC $senderReceiver
     * @return \Mjarestad\DHL\QuotePrice\StructType\TParcelConnect
     */
    public function setSenderReceiver(\Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver_PC $senderReceiver = null)
    {
        $this->SenderReceiver = $senderReceiver;
        return $this;
    }
    /**
     * Get Dimensions value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDimensions_PC|null
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    /**
     * Set Dimensions value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDimensions_PC $dimensions
     * @return \Mjarestad\DHL\QuotePrice\StructType\TParcelConnect
     */
    public function setDimensions(\Mjarestad\DHL\QuotePrice\StructType\TDimensions_PC $dimensions = null)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    /**
     * Get Options value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions_PC|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOptions_PC $options
     * @return \Mjarestad\DHL\QuotePrice\StructType\TParcelConnect
     */
    public function setOptions(\Mjarestad\DHL\QuotePrice\StructType\TOptions_PC $options = null)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TParcelConnect
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TParcelConnect
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
