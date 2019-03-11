<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tDHLHomeDeliveryExternalTerminal StructType
 * @subpackage Structs
 */
class TDHLHomeDeliveryExternalTerminal extends AbstractStructBase
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
     * @var \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDeliveryExternal
     */
    public $Weight;
    /**
     * The Volume
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDeliveryExternal
     */
    public $Volume;
    /**
     * The Loadingmeter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryExternal
     */
    public $Loadingmeter;
    /**
     * The SenderReceiver
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDeliveryExternal
     */
    public $SenderReceiver;
    /**
     * The Values
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryExternal
     */
    public $Values;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal
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
     * Constructor method for tDHLHomeDeliveryExternalTerminal
     * @uses TDHLHomeDeliveryExternalTerminal::setAgreementNo()
     * @uses TDHLHomeDeliveryExternalTerminal::setWeight()
     * @uses TDHLHomeDeliveryExternalTerminal::setVolume()
     * @uses TDHLHomeDeliveryExternalTerminal::setLoadingmeter()
     * @uses TDHLHomeDeliveryExternalTerminal::setSenderReceiver()
     * @uses TDHLHomeDeliveryExternalTerminal::setValues()
     * @uses TDHLHomeDeliveryExternalTerminal::setOptions()
     * @uses TDHLHomeDeliveryExternalTerminal::setOwnSurCharge()
     * @param string $agreementNo
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDeliveryExternal $weight
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDeliveryExternal $volume
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryExternal $loadingmeter
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDeliveryExternal $senderReceiver
     * @param \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryExternal $values
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal $options
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge $ownSurCharge
     */
    public function __construct($agreementNo = null, \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDeliveryExternal $weight = null, \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDeliveryExternal $volume = null, \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryExternal $loadingmeter = null, \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDeliveryExternal $senderReceiver = null, \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryExternal $values = null, \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal $options = null, \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge $ownSurCharge = null)
    {
        $this
            ->setAgreementNo($agreementNo)
            ->setWeight($weight)
            ->setVolume($volume)
            ->setLoadingmeter($loadingmeter)
            ->setSenderReceiver($senderReceiver)
            ->setValues($values)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminal
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDeliveryExternal|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDeliveryExternal $weight
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminal
     */
    public function setWeight(\Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDeliveryExternal $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Volume value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDeliveryExternal|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    /**
     * Set Volume value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDeliveryExternal $volume
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminal
     */
    public function setVolume(\Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDeliveryExternal $volume = null)
    {
        $this->Volume = $volume;
        return $this;
    }
    /**
     * Get Loadingmeter value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryExternal|null
     */
    public function getLoadingmeter()
    {
        return $this->Loadingmeter;
    }
    /**
     * Set Loadingmeter value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryExternal $loadingmeter
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminal
     */
    public function setLoadingmeter(\Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryExternal $loadingmeter = null)
    {
        $this->Loadingmeter = $loadingmeter;
        return $this;
    }
    /**
     * Get SenderReceiver value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDeliveryExternal|null
     */
    public function getSenderReceiver()
    {
        return $this->SenderReceiver;
    }
    /**
     * Set SenderReceiver value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDeliveryExternal $senderReceiver
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminal
     */
    public function setSenderReceiver(\Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDeliveryExternal $senderReceiver = null)
    {
        $this->SenderReceiver = $senderReceiver;
        return $this;
    }
    /**
     * Get Values value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryExternal|null
     */
    public function getValues()
    {
        return $this->Values;
    }
    /**
     * Set Values value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryExternal $values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminal
     */
    public function setValues(\Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryExternal $values = null)
    {
        $this->Values = $values;
        return $this;
    }
    /**
     * Get Options value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal $options
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminal
     */
    public function setOptions(\Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternal $options = null)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminal
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminal
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
