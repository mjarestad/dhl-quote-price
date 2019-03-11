<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tNorskInnland StructType
 * @subpackage Structs
 */
class TNorskInnland extends AbstractStructBase
{
    /**
     * The FreightPayer
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $FreightPayer;
    /**
     * The RegistrationDate
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $RegistrationDate;
    /**
     * The DangerousOrWarm
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $DangerousOrWarm;
    /**
     * The FromPostCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $FromPostCode;
    /**
     * The ToPostCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ToPostCode;
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
     * @var \Mjarestad\DHL\QuotePrice\StructType\TWeightNO
     */
    public $Weight;
    /**
     * The Volume
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TVolumeNO
     */
    public $Volume;
    /**
     * The Loadingmeter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterNO
     */
    public $Loadingmeter;
    /**
     * The NoItems
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NoItems;
    /**
     * The NoPallets
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $NoPallets;
    /**
     * The CODAmount
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TCODAmount
     */
    public $CODAmount;
    /**
     * Constructor method for tNorskInnland
     * @uses TNorskInnland::setFreightPayer()
     * @uses TNorskInnland::setRegistrationDate()
     * @uses TNorskInnland::setDangerousOrWarm()
     * @uses TNorskInnland::setFromPostCode()
     * @uses TNorskInnland::setToPostCode()
     * @uses TNorskInnland::setAgreementNo()
     * @uses TNorskInnland::setWeight()
     * @uses TNorskInnland::setVolume()
     * @uses TNorskInnland::setLoadingmeter()
     * @uses TNorskInnland::setNoItems()
     * @uses TNorskInnland::setNoPallets()
     * @uses TNorskInnland::setCODAmount()
     * @param string $freightPayer
     * @param string $registrationDate
     * @param string $dangerousOrWarm
     * @param string $fromPostCode
     * @param string $toPostCode
     * @param string $agreementNo
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeightNO $weight
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolumeNO $volume
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterNO $loadingmeter
     * @param int $noItems
     * @param int $noPallets
     * @param \Mjarestad\DHL\QuotePrice\StructType\TCODAmount $cODAmount
     */
    public function __construct($freightPayer = null, $registrationDate = null, $dangerousOrWarm = null, $fromPostCode = null, $toPostCode = null, $agreementNo = null, \Mjarestad\DHL\QuotePrice\StructType\TWeightNO $weight = null, \Mjarestad\DHL\QuotePrice\StructType\TVolumeNO $volume = null, \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterNO $loadingmeter = null, $noItems = null, $noPallets = null, \Mjarestad\DHL\QuotePrice\StructType\TCODAmount $cODAmount = null)
    {
        $this
            ->setFreightPayer($freightPayer)
            ->setRegistrationDate($registrationDate)
            ->setDangerousOrWarm($dangerousOrWarm)
            ->setFromPostCode($fromPostCode)
            ->setToPostCode($toPostCode)
            ->setAgreementNo($agreementNo)
            ->setWeight($weight)
            ->setVolume($volume)
            ->setLoadingmeter($loadingmeter)
            ->setNoItems($noItems)
            ->setNoPallets($noPallets)
            ->setCODAmount($cODAmount);
    }
    /**
     * Get FreightPayer value
     * @return string
     */
    public function getFreightPayer()
    {
        return $this->FreightPayer;
    }
    /**
     * Set FreightPayer value
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TFreightPayer::valueIsValid()
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TFreightPayer::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $freightPayer
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNorskInnland
     */
    public function setFreightPayer($freightPayer = null)
    {
        // validation for constraint: enumeration
        if (!\Mjarestad\DHL\QuotePrice\EnumType\TFreightPayer::valueIsValid($freightPayer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Mjarestad\DHL\QuotePrice\EnumType\TFreightPayer', is_array($freightPayer) ? implode(', ', $freightPayer) : var_export($freightPayer, true), implode(', ', \Mjarestad\DHL\QuotePrice\EnumType\TFreightPayer::getValidValues())), __LINE__);
        }
        $this->FreightPayer = $freightPayer;
        return $this;
    }
    /**
     * Get RegistrationDate value
     * @return string
     */
    public function getRegistrationDate()
    {
        return $this->RegistrationDate;
    }
    /**
     * Set RegistrationDate value
     * @param string $registrationDate
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNorskInnland
     */
    public function setRegistrationDate($registrationDate = null)
    {
        // validation for constraint: string
        if (!is_null($registrationDate) && !is_string($registrationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($registrationDate, true), gettype($registrationDate)), __LINE__);
        }
        $this->RegistrationDate = $registrationDate;
        return $this;
    }
    /**
     * Get DangerousOrWarm value
     * @return string
     */
    public function getDangerousOrWarm()
    {
        return $this->DangerousOrWarm;
    }
    /**
     * Set DangerousOrWarm value
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TDangerousOrWarm::valueIsValid()
     * @uses \Mjarestad\DHL\QuotePrice\EnumType\TDangerousOrWarm::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $dangerousOrWarm
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNorskInnland
     */
    public function setDangerousOrWarm($dangerousOrWarm = null)
    {
        // validation for constraint: enumeration
        if (!\Mjarestad\DHL\QuotePrice\EnumType\TDangerousOrWarm::valueIsValid($dangerousOrWarm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Mjarestad\DHL\QuotePrice\EnumType\TDangerousOrWarm', is_array($dangerousOrWarm) ? implode(', ', $dangerousOrWarm) : var_export($dangerousOrWarm, true), implode(', ', \Mjarestad\DHL\QuotePrice\EnumType\TDangerousOrWarm::getValidValues())), __LINE__);
        }
        $this->DangerousOrWarm = $dangerousOrWarm;
        return $this;
    }
    /**
     * Get FromPostCode value
     * @return string|null
     */
    public function getFromPostCode()
    {
        return $this->FromPostCode;
    }
    /**
     * Set FromPostCode value
     * @param string $fromPostCode
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNorskInnland
     */
    public function setFromPostCode($fromPostCode = null)
    {
        // validation for constraint: string
        if (!is_null($fromPostCode) && !is_string($fromPostCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromPostCode, true), gettype($fromPostCode)), __LINE__);
        }
        $this->FromPostCode = $fromPostCode;
        return $this;
    }
    /**
     * Get ToPostCode value
     * @return string|null
     */
    public function getToPostCode()
    {
        return $this->ToPostCode;
    }
    /**
     * Set ToPostCode value
     * @param string $toPostCode
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNorskInnland
     */
    public function setToPostCode($toPostCode = null)
    {
        // validation for constraint: string
        if (!is_null($toPostCode) && !is_string($toPostCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toPostCode, true), gettype($toPostCode)), __LINE__);
        }
        $this->ToPostCode = $toPostCode;
        return $this;
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNorskInnland
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWeightNO|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeightNO $weight
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNorskInnland
     */
    public function setWeight(\Mjarestad\DHL\QuotePrice\StructType\TWeightNO $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Volume value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TVolumeNO|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    /**
     * Set Volume value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolumeNO $volume
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNorskInnland
     */
    public function setVolume(\Mjarestad\DHL\QuotePrice\StructType\TVolumeNO $volume = null)
    {
        $this->Volume = $volume;
        return $this;
    }
    /**
     * Get Loadingmeter value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterNO|null
     */
    public function getLoadingmeter()
    {
        return $this->Loadingmeter;
    }
    /**
     * Set Loadingmeter value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterNO $loadingmeter
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNorskInnland
     */
    public function setLoadingmeter(\Mjarestad\DHL\QuotePrice\StructType\TLoadingmeterNO $loadingmeter = null)
    {
        $this->Loadingmeter = $loadingmeter;
        return $this;
    }
    /**
     * Get NoItems value
     * @return int|null
     */
    public function getNoItems()
    {
        return $this->NoItems;
    }
    /**
     * Set NoItems value
     * @param int $noItems
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNorskInnland
     */
    public function setNoItems($noItems = null)
    {
        // validation for constraint: int
        if (!is_null($noItems) && !(is_int($noItems) || ctype_digit($noItems))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noItems, true), gettype($noItems)), __LINE__);
        }
        $this->NoItems = $noItems;
        return $this;
    }
    /**
     * Get NoPallets value
     * @return int|null
     */
    public function getNoPallets()
    {
        return $this->NoPallets;
    }
    /**
     * Set NoPallets value
     * @param int $noPallets
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNorskInnland
     */
    public function setNoPallets($noPallets = null)
    {
        // validation for constraint: int
        if (!is_null($noPallets) && !(is_int($noPallets) || ctype_digit($noPallets))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noPallets, true), gettype($noPallets)), __LINE__);
        }
        $this->NoPallets = $noPallets;
        return $this;
    }
    /**
     * Get CODAmount value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TCODAmount|null
     */
    public function getCODAmount()
    {
        return $this->CODAmount;
    }
    /**
     * Set CODAmount value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TCODAmount $cODAmount
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNorskInnland
     */
    public function setCODAmount(\Mjarestad\DHL\QuotePrice\StructType\TCODAmount $cODAmount = null)
    {
        $this->CODAmount = $cODAmount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNorskInnland
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
