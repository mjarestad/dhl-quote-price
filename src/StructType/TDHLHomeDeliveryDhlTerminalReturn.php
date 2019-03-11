<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tDHLHomeDeliveryDhlTerminalReturn StructType
 * @subpackage Structs
 */
class TDHLHomeDeliveryDhlTerminalReturn extends AbstractStructBase
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
     * @var \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDeliveryReturn
     */
    public $Weight;
    /**
     * The Volume
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDeliveryReturn
     */
    public $Volume;
    /**
     * The Loadingmeter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryReturn
     */
    public $Loadingmeter;
    /**
     * The SenderReceiver
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDeliveryReturn
     */
    public $SenderReceiver;
    /**
     * The Values
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryReturn
     */
    public $Values;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryReturn
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
     * Constructor method for tDHLHomeDeliveryDhlTerminalReturn
     * @uses TDHLHomeDeliveryDhlTerminalReturn::setAgreementNo()
     * @uses TDHLHomeDeliveryDhlTerminalReturn::setWeight()
     * @uses TDHLHomeDeliveryDhlTerminalReturn::setVolume()
     * @uses TDHLHomeDeliveryDhlTerminalReturn::setLoadingmeter()
     * @uses TDHLHomeDeliveryDhlTerminalReturn::setSenderReceiver()
     * @uses TDHLHomeDeliveryDhlTerminalReturn::setValues()
     * @uses TDHLHomeDeliveryDhlTerminalReturn::setOptions()
     * @uses TDHLHomeDeliveryDhlTerminalReturn::setOwnSurCharge()
     * @param string $agreementNo
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDeliveryReturn $weight
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDeliveryReturn $volume
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryReturn $loadingmeter
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDeliveryReturn $senderReceiver
     * @param \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryReturn $values
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryReturn $options
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge $ownSurCharge
     */
    public function __construct($agreementNo = null, \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDeliveryReturn $weight = null, \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDeliveryReturn $volume = null, \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryReturn $loadingmeter = null, \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDeliveryReturn $senderReceiver = null, \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryReturn $values = null, \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryReturn $options = null, \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge $ownSurCharge = null)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminalReturn
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDeliveryReturn|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDeliveryReturn $weight
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminalReturn
     */
    public function setWeight(\Mjarestad\DHL\QuotePrice\StructType\TWeightHomeDeliveryReturn $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Volume value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDeliveryReturn|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    /**
     * Set Volume value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDeliveryReturn $volume
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminalReturn
     */
    public function setVolume(\Mjarestad\DHL\QuotePrice\StructType\TVolumeHomeDeliveryReturn $volume = null)
    {
        $this->Volume = $volume;
        return $this;
    }
    /**
     * Get Loadingmeter value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryReturn|null
     */
    public function getLoadingmeter()
    {
        return $this->Loadingmeter;
    }
    /**
     * Set Loadingmeter value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryReturn $loadingmeter
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminalReturn
     */
    public function setLoadingmeter(\Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterHomeDeliveryReturn $loadingmeter = null)
    {
        $this->Loadingmeter = $loadingmeter;
        return $this;
    }
    /**
     * Get SenderReceiver value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDeliveryReturn|null
     */
    public function getSenderReceiver()
    {
        return $this->SenderReceiver;
    }
    /**
     * Set SenderReceiver value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDeliveryReturn $senderReceiver
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminalReturn
     */
    public function setSenderReceiver(\Mjarestad\DHL\QuotePrice\StructType\TSenderReceiverHomeDeliveryReturn $senderReceiver = null)
    {
        $this->SenderReceiver = $senderReceiver;
        return $this;
    }
    /**
     * Get Values value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryReturn|null
     */
    public function getValues()
    {
        return $this->Values;
    }
    /**
     * Set Values value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryReturn $values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminalReturn
     */
    public function setValues(\Mjarestad\DHL\QuotePrice\StructType\TValuesHomeDeliveryReturn $values = null)
    {
        $this->Values = $values;
        return $this;
    }
    /**
     * Get Options value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryReturn|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryReturn $options
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminalReturn
     */
    public function setOptions(\Mjarestad\DHL\QuotePrice\StructType\TOptionsHomeDeliveryReturn $options = null)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminalReturn
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminalReturn
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
