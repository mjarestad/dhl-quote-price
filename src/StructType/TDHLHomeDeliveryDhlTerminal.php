<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tDHLHomeDeliveryDhlTerminal StructType
 * @subpackage Structs
 */
class TDHLHomeDeliveryDhlTerminal extends AbstractStructBase
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
     * @var \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDelivery
     */
    public $Weight;
    /**
     * The Volume
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDelivery
     */
    public $Volume;
    /**
     * The Loadingmeter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDelivery
     */
    public $Loadingmeter;
    /**
     * The SenderReceiver
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDelivery
     */
    public $SenderReceiver;
    /**
     * The Values
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDelivery
     */
    public $Values;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDelivery
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
     * Constructor method for tDHLHomeDeliveryDhlTerminal
     * @uses TDHLHomeDeliveryDhlTerminal::setAgreementNo()
     * @uses TDHLHomeDeliveryDhlTerminal::setWeight()
     * @uses TDHLHomeDeliveryDhlTerminal::setVolume()
     * @uses TDHLHomeDeliveryDhlTerminal::setLoadingmeter()
     * @uses TDHLHomeDeliveryDhlTerminal::setSenderReceiver()
     * @uses TDHLHomeDeliveryDhlTerminal::setValues()
     * @uses TDHLHomeDeliveryDhlTerminal::setOptions()
     * @uses TDHLHomeDeliveryDhlTerminal::setOwnSurCharge()
     * @param string $agreementNo
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDelivery $weight
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDelivery $volume
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDelivery $loadingmeter
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDelivery $senderReceiver
     * @param \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDelivery $values
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDelivery $options
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge $ownSurCharge
     */
    public function __construct($agreementNo = null, \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDelivery $weight = null, \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDelivery $volume = null, \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDelivery $loadingmeter = null, \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDelivery $senderReceiver = null, \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDelivery $values = null, \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDelivery $options = null, \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge $ownSurCharge = null)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminal
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDelivery|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDelivery $weight
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminal
     */
    public function setWeight(\Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDelivery $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Volume value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDelivery|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    /**
     * Set Volume value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDelivery $volume
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminal
     */
    public function setVolume(\Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDelivery $volume = null)
    {
        $this->Volume = $volume;
        return $this;
    }
    /**
     * Get Loadingmeter value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDelivery|null
     */
    public function getLoadingmeter()
    {
        return $this->Loadingmeter;
    }
    /**
     * Set Loadingmeter value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDelivery $loadingmeter
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminal
     */
    public function setLoadingmeter(\Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDelivery $loadingmeter = null)
    {
        $this->Loadingmeter = $loadingmeter;
        return $this;
    }
    /**
     * Get SenderReceiver value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDelivery|null
     */
    public function getSenderReceiver()
    {
        return $this->SenderReceiver;
    }
    /**
     * Set SenderReceiver value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDelivery $senderReceiver
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminal
     */
    public function setSenderReceiver(\Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDelivery $senderReceiver = null)
    {
        $this->SenderReceiver = $senderReceiver;
        return $this;
    }
    /**
     * Get Values value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDelivery|null
     */
    public function getValues()
    {
        return $this->Values;
    }
    /**
     * Set Values value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDelivery $values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminal
     */
    public function setValues(\Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDelivery $values = null)
    {
        $this->Values = $values;
        return $this;
    }
    /**
     * Get Options value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDelivery|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDelivery $options
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminal
     */
    public function setOptions(\Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDelivery $options = null)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminal
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminal
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
