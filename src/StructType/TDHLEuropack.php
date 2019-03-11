<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tDHLEuropack StructType
 * @subpackage Structs
 */
class TDHLEuropack extends AbstractStructBase
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
     * @var \Mjarestad\DHL\QuotePrice\StructType\TWeight8
     */
    public $Weight;
    /**
     * The SenderReceiver
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver8
     */
    public $SenderReceiver;
    /**
     * The Values
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TValues8
     */
    public $Values;
    /**
     * The Options
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TOptions8
     */
    public $Options;
    /**
     * Constructor method for tDHLEuropack
     * @uses TDHLEuropack::setAgreementNo()
     * @uses TDHLEuropack::setWeight()
     * @uses TDHLEuropack::setSenderReceiver()
     * @uses TDHLEuropack::setValues()
     * @uses TDHLEuropack::setOptions()
     * @param string $agreementNo
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeight8 $weight
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver8 $senderReceiver
     * @param \Mjarestad\DHL\QuotePrice\StructType\TValues8 $values
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOptions8 $options
     */
    public function __construct($agreementNo = null, \Mjarestad\DHL\QuotePrice\StructType\TWeight8 $weight = null, \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver8 $senderReceiver = null, \Mjarestad\DHL\QuotePrice\StructType\TValues8 $values = null, \Mjarestad\DHL\QuotePrice\StructType\TOptions8 $options = null)
    {
        $this
            ->setAgreementNo($agreementNo)
            ->setWeight($weight)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLEuropack
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWeight8|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeight8 $weight
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLEuropack
     */
    public function setWeight(\Mjarestad\DHL\QuotePrice\StructType\TWeight8 $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get SenderReceiver value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver8|null
     */
    public function getSenderReceiver()
    {
        return $this->SenderReceiver;
    }
    /**
     * Set SenderReceiver value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver8 $senderReceiver
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLEuropack
     */
    public function setSenderReceiver(\Mjarestad\DHL\QuotePrice\StructType\TSenderReceiver8 $senderReceiver = null)
    {
        $this->SenderReceiver = $senderReceiver;
        return $this;
    }
    /**
     * Get Values value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TValues8|null
     */
    public function getValues()
    {
        return $this->Values;
    }
    /**
     * Set Values value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TValues8 $values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLEuropack
     */
    public function setValues(\Mjarestad\DHL\QuotePrice\StructType\TValues8 $values = null)
    {
        $this->Values = $values;
        return $this;
    }
    /**
     * Get Options value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions8|null
     */
    public function getOptions()
    {
        return $this->Options;
    }
    /**
     * Set Options value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TOptions8 $options
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLEuropack
     */
    public function setOptions(\Mjarestad\DHL\QuotePrice\StructType\TOptions8 $options = null)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLEuropack
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
