<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tSwednet StructType
 * @subpackage Structs
 */
class TSwednet extends AbstractStructBase
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
     * @var \Mjarestad\DHL\QuotePrice\StructType\TWeight5
     */
    public $Weight;
    /**
     * The Volume
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TVolume5
     */
    public $Volume;
    /**
     * The Loadingmeter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeter5
     */
    public $Loadingmeter;
    /**
     * The LongGoods
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TLongGoods5
     */
    public $LongGoods;
    /**
     * The SenderReceiver
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver5
     */
    public $SenderReceiver;
    /**
     * The Values
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TValues5
     */
    public $Values;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TOptions5
     */
    public $Options;
    /**
     * Constructor method for tSwednet
     * @uses TSwednet::setAgreementNo()
     * @uses TSwednet::setWeight()
     * @uses TSwednet::setVolume()
     * @uses TSwednet::setLoadingmeter()
     * @uses TSwednet::setLongGoods()
     * @uses TSwednet::setSenderReceiver()
     * @uses TSwednet::setValues()
     * @uses TSwednet::setOptions()
     * @param string $agreementNo
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeight5 $weight
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolume5 $volume
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeter5 $loadingmeter
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLongGoods5 $longGoods
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver5 $senderReceiver
     * @param \Mjarestad\DHL\QuotePrice\StructType\TValues5 $values
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOptions5 $options
     */
    public function __construct($agreementNo = null, \Mjarestad\DHL\QuotePrice\StructType\TWeight5 $weight = null, \Mjarestad\DHL\QuotePrice\StructType\TVolume5 $volume = null, \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeter5 $loadingmeter = null, \Mjarestad\DHL\QuotePrice\StructType\TLongGoods5 $longGoods = null, \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver5 $senderReceiver = null, \Mjarestad\DHL\QuotePrice\StructType\TValues5 $values = null, \Mjarestad\DHL\QuotePrice\StructType\TOptions5 $options = null)
    {
        $this
            ->setAgreementNo($agreementNo)
            ->setWeight($weight)
            ->setVolume($volume)
            ->setLoadingmeter($loadingmeter)
            ->setLongGoods($longGoods)
            ->setSenderReceiver($senderReceiver)
            ->setValues($values)
            ->setOptions($options);
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSwednet
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWeight5|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeight5 $weight
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSwednet
     */
    public function setWeight(\Mjarestad\DHL\QuotePrice\StructType\TWeight5 $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Volume value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TVolume5|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    /**
     * Set Volume value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolume5 $volume
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSwednet
     */
    public function setVolume(\Mjarestad\DHL\QuotePrice\StructType\TVolume5 $volume = null)
    {
        $this->Volume = $volume;
        return $this;
    }
    /**
     * Get Loadingmeter value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeter5|null
     */
    public function getLoadingmeter()
    {
        return $this->Loadingmeter;
    }
    /**
     * Set Loadingmeter value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeter5 $loadingmeter
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSwednet
     */
    public function setLoadingmeter(\Mjarestad\DHL\QuotePrice\StructType\TLoadingmeter5 $loadingmeter = null)
    {
        $this->Loadingmeter = $loadingmeter;
        return $this;
    }
    /**
     * Get LongGoods value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLongGoods5|null
     */
    public function getLongGoods()
    {
        return $this->LongGoods;
    }
    /**
     * Set LongGoods value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLongGoods5 $longGoods
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSwednet
     */
    public function setLongGoods(\Mjarestad\DHL\QuotePrice\StructType\TLongGoods5 $longGoods = null)
    {
        $this->LongGoods = $longGoods;
        return $this;
    }
    /**
     * Get SenderReceiver value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver5|null
     */
    public function getSenderReceiver()
    {
        return $this->SenderReceiver;
    }
    /**
     * Set SenderReceiver value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver5 $senderReceiver
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSwednet
     */
    public function setSenderReceiver(\Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver5 $senderReceiver = null)
    {
        $this->SenderReceiver = $senderReceiver;
        return $this;
    }
    /**
     * Get Values value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues5|null
     */
    public function getValues()
    {
        return $this->Values;
    }
    /**
     * Set Values value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TValues5 $values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSwednet
     */
    public function setValues(\Mjarestad\DHL\QuotePrice\StructType\TValues5 $values = null)
    {
        $this->Values = $values;
        return $this;
    }
    /**
     * Get Options value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions5|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOptions5 $options
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSwednet
     */
    public function setOptions(\Mjarestad\DHL\QuotePrice\StructType\TOptions5 $options = null)
    {
        $this->Options = $options;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSwednet
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
