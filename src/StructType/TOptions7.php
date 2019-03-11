<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tOptions7 StructType
 * @subpackage Structs
 */
class TOptions7 extends AbstractStructBase
{
    /**
     * The RecPays
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $RecPays;
    /**
     * The COD
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $COD;
    /**
     * The ProdStretch
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $ProdStretch;
    /**
     * The Insurance
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $Insurance;
    /**
     * The ImportClearance
     * Meta informations extracted from the WSDL
     * - default: false
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $ImportClearance;
    /**
     * Constructor method for tOptions7
     * @uses TOptions7::setRecPays()
     * @uses TOptions7::setCOD()
     * @uses TOptions7::setProdStretch()
     * @uses TOptions7::setInsurance()
     * @uses TOptions7::setImportClearance()
     * @param bool $recPays
     * @param bool $cOD
     * @param bool $prodStretch
     * @param bool $insurance
     * @param bool $importClearance
     */
    public function __construct($recPays = false, $cOD = false, $prodStretch = false, $insurance = false, $importClearance = false)
    {
        $this
            ->setRecPays($recPays)
            ->setCOD($cOD)
            ->setProdStretch($prodStretch)
            ->setInsurance($insurance)
            ->setImportClearance($importClearance);
    }
    /**
     * Get RecPays value
     * @return bool|null
     */
    public function getRecPays()
    {
        return $this->RecPays;
    }
    /**
     * Set RecPays value
     * @param bool $recPays
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions7
     */
    public function setRecPays($recPays = false)
    {
        // validation for constraint: boolean
        if (!is_null($recPays) && !is_bool($recPays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($recPays, true), gettype($recPays)), __LINE__);
        }
        $this->RecPays = $recPays;
        return $this;
    }
    /**
     * Get COD value
     * @return bool|null
     */
    public function getCOD()
    {
        return $this->COD;
    }
    /**
     * Set COD value
     * @param bool $cOD
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions7
     */
    public function setCOD($cOD = false)
    {
        // validation for constraint: boolean
        if (!is_null($cOD) && !is_bool($cOD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($cOD, true), gettype($cOD)), __LINE__);
        }
        $this->COD = $cOD;
        return $this;
    }
    /**
     * Get ProdStretch value
     * @return bool|null
     */
    public function getProdStretch()
    {
        return $this->ProdStretch;
    }
    /**
     * Set ProdStretch value
     * @param bool $prodStretch
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions7
     */
    public function setProdStretch($prodStretch = false)
    {
        // validation for constraint: boolean
        if (!is_null($prodStretch) && !is_bool($prodStretch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prodStretch, true), gettype($prodStretch)), __LINE__);
        }
        $this->ProdStretch = $prodStretch;
        return $this;
    }
    /**
     * Get Insurance value
     * @return bool|null
     */
    public function getInsurance()
    {
        return $this->Insurance;
    }
    /**
     * Set Insurance value
     * @param bool $insurance
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions7
     */
    public function setInsurance($insurance = false)
    {
        // validation for constraint: boolean
        if (!is_null($insurance) && !is_bool($insurance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($insurance, true), gettype($insurance)), __LINE__);
        }
        $this->Insurance = $insurance;
        return $this;
    }
    /**
     * Get ImportClearance value
     * @return bool|null
     */
    public function getImportClearance()
    {
        return $this->ImportClearance;
    }
    /**
     * Set ImportClearance value
     * @param bool $importClearance
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions7
     */
    public function setImportClearance($importClearance = false)
    {
        // validation for constraint: boolean
        if (!is_null($importClearance) && !is_bool($importClearance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($importClearance, true), gettype($importClearance)), __LINE__);
        }
        $this->ImportClearance = $importClearance;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TOptions7
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
