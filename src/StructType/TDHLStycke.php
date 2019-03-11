<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tDHLStycke StructType
 * @subpackage Structs
 */
class TDHLStycke extends AbstractStructBase
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
     * @var \Mjarestad\DHL\QuotePrice\StructType\TWeight1
     */
    public $Weight;
    /**
     * The Volume
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TVolume1
     */
    public $Volume;
    /**
     * The Loadingmeter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeter1
     */
    public $Loadingmeter;
    /**
     * The LongGoods
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TLongGoods1
     */
    public $LongGoods;
    /**
     * The SenderReceiver
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver1
     */
    public $SenderReceiver;
    /**
     * The Values
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TValues1
     */
    public $Values;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TOptions1
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
     * Constructor method for tDHLStycke
     * @uses TDHLStycke::setAgreementNo()
     * @uses TDHLStycke::setWeight()
     * @uses TDHLStycke::setVolume()
     * @uses TDHLStycke::setLoadingmeter()
     * @uses TDHLStycke::setLongGoods()
     * @uses TDHLStycke::setSenderReceiver()
     * @uses TDHLStycke::setValues()
     * @uses TDHLStycke::setOptions()
     * @uses TDHLStycke::setOwnSurCharge()
     * @param string $agreementNo
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeight1 $weight
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolume1 $volume
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeter1 $loadingmeter
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLongGoods1 $longGoods
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver1 $senderReceiver
     * @param \Mjarestad\DHL\QuotePrice\StructType\TValues1 $values
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOptions1 $options
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge $ownSurCharge
     */
    public function __construct($agreementNo = null, \Mjarestad\DHL\QuotePrice\StructType\TWeight1 $weight = null, \Mjarestad\DHL\QuotePrice\StructType\TVolume1 $volume = null, \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeter1 $loadingmeter = null, \Mjarestad\DHL\QuotePrice\StructType\TLongGoods1 $longGoods = null, \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver1 $senderReceiver = null, \Mjarestad\DHL\QuotePrice\StructType\TValues1 $values = null, \Mjarestad\DHL\QuotePrice\StructType\TOptions1 $options = null, \Mjarestad\DHL\QuotePrice\StructType\TOwnSurCharge $ownSurCharge = null)
    {
        $this
            ->setAgreementNo($agreementNo)
            ->setWeight($weight)
            ->setVolume($volume)
            ->setLoadingmeter($loadingmeter)
            ->setLongGoods($longGoods)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLStycke
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWeight1|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeight1 $weight
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLStycke
     */
    public function setWeight(\Mjarestad\DHL\QuotePrice\StructType\TWeight1 $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Volume value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TVolume1|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    /**
     * Set Volume value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolume1 $volume
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLStycke
     */
    public function setVolume(\Mjarestad\DHL\QuotePrice\StructType\TVolume1 $volume = null)
    {
        $this->Volume = $volume;
        return $this;
    }
    /**
     * Get Loadingmeter value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeter1|null
     */
    public function getLoadingmeter()
    {
        return $this->Loadingmeter;
    }
    /**
     * Set Loadingmeter value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeter1 $loadingmeter
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLStycke
     */
    public function setLoadingmeter(\Mjarestad\DHL\QuotePrice\StructType\TLoadingmeter1 $loadingmeter = null)
    {
        $this->Loadingmeter = $loadingmeter;
        return $this;
    }
    /**
     * Get LongGoods value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLongGoods1|null
     */
    public function getLongGoods()
    {
        return $this->LongGoods;
    }
    /**
     * Set LongGoods value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLongGoods1 $longGoods
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLStycke
     */
    public function setLongGoods(\Mjarestad\DHL\QuotePrice\StructType\TLongGoods1 $longGoods = null)
    {
        $this->LongGoods = $longGoods;
        return $this;
    }
    /**
     * Get SenderReceiver value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver1|null
     */
    public function getSenderReceiver()
    {
        return $this->SenderReceiver;
    }
    /**
     * Set SenderReceiver value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver1 $senderReceiver
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLStycke
     */
    public function setSenderReceiver(\Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver1 $senderReceiver = null)
    {
        $this->SenderReceiver = $senderReceiver;
        return $this;
    }
    /**
     * Get Values value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues1|null
     */
    public function getValues()
    {
        return $this->Values;
    }
    /**
     * Set Values value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TValues1 $values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLStycke
     */
    public function setValues(\Mjarestad\DHL\QuotePrice\StructType\TValues1 $values = null)
    {
        $this->Values = $values;
        return $this;
    }
    /**
     * Get Options value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions1|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOptions1 $options
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLStycke
     */
    public function setOptions(\Mjarestad\DHL\QuotePrice\StructType\TOptions1 $options = null)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLStycke
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLStycke
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
