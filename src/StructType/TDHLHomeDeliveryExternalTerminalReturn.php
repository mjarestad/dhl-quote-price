<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tDHLHomeDeliveryExternalTerminalReturn StructType
 * @subpackage Structs
 */
class TDHLHomeDeliveryExternalTerminalReturn extends AbstractStructBase
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
     * @var \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDeliveryExternalReturn
     */
    public $Weight;
    /**
     * The Volume
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDeliveryExternalReturn
     */
    public $Volume;
    /**
     * The Loadingmeter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryExternalReturn
     */
    public $Loadingmeter;
    /**
     * The SenderReceiver
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDeliveryExternalReturn
     */
    public $SenderReceiver;
    /**
     * The Values
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryExternalReturn
     */
    public $Values;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn
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
     * Constructor method for tDHLHomeDeliveryExternalTerminalReturn
     * @uses TDHLHomeDeliveryExternalTerminalReturn::setAgreementNo()
     * @uses TDHLHomeDeliveryExternalTerminalReturn::setWeight()
     * @uses TDHLHomeDeliveryExternalTerminalReturn::setVolume()
     * @uses TDHLHomeDeliveryExternalTerminalReturn::setLoadingmeter()
     * @uses TDHLHomeDeliveryExternalTerminalReturn::setSenderReceiver()
     * @uses TDHLHomeDeliveryExternalTerminalReturn::setValues()
     * @uses TDHLHomeDeliveryExternalTerminalReturn::setOptions()
     * @uses TDHLHomeDeliveryExternalTerminalReturn::setOwnSurCharge()
     * @param string $agreementNo
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDeliveryExternalReturn $weight
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDeliveryExternalReturn $volume
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryExternalReturn $loadingmeter
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDeliveryExternalReturn $senderReceiver
     * @param \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryExternalReturn $values
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn $options
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge $ownSurCharge
     */
    public function __construct($agreementNo = null, \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDeliveryExternalReturn $weight = null, \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDeliveryExternalReturn $volume = null, \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryExternalReturn $loadingmeter = null, \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDeliveryExternalReturn $senderReceiver = null, \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryExternalReturn $values = null, \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn $options = null, \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge $ownSurCharge = null)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminalReturn
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDeliveryExternalReturn|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDeliveryExternalReturn $weight
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminalReturn
     */
    public function setWeight(\Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDeliveryExternalReturn $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Volume value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDeliveryExternalReturn|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    /**
     * Set Volume value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDeliveryExternalReturn $volume
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminalReturn
     */
    public function setVolume(\Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDeliveryExternalReturn $volume = null)
    {
        $this->Volume = $volume;
        return $this;
    }
    /**
     * Get Loadingmeter value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryExternalReturn|null
     */
    public function getLoadingmeter()
    {
        return $this->Loadingmeter;
    }
    /**
     * Set Loadingmeter value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryExternalReturn $loadingmeter
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminalReturn
     */
    public function setLoadingmeter(\Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryExternalReturn $loadingmeter = null)
    {
        $this->Loadingmeter = $loadingmeter;
        return $this;
    }
    /**
     * Get SenderReceiver value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDeliveryExternalReturn|null
     */
    public function getSenderReceiver()
    {
        return $this->SenderReceiver;
    }
    /**
     * Set SenderReceiver value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDeliveryExternalReturn $senderReceiver
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminalReturn
     */
    public function setSenderReceiver(\Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDeliveryExternalReturn $senderReceiver = null)
    {
        $this->SenderReceiver = $senderReceiver;
        return $this;
    }
    /**
     * Get Values value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryExternalReturn|null
     */
    public function getValues()
    {
        return $this->Values;
    }
    /**
     * Set Values value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryExternalReturn $values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminalReturn
     */
    public function setValues(\Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryExternalReturn $values = null)
    {
        $this->Values = $values;
        return $this;
    }
    /**
     * Get Options value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn $options
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminalReturn
     */
    public function setOptions(\Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryExternalReturn $options = null)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminalReturn
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminalReturn
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
