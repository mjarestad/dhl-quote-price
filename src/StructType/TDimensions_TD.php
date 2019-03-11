<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tDimensions_TD StructType
 * @subpackage Structs
 */
class TDimensions_TD extends AbstractStructBase
{
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TWeight_TD
     */
    public $Weight;
    /**
     * The Volume
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TVolume_TD
     */
    public $Volume;
    /**
     * Constructor method for tDimensions_TD
     * @uses TDimensions_TD::setWeight()
     * @uses TDimensions_TD::setVolume()
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeight_TD $weight
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolume_TD $volume
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\TWeight_TD $weight = null, \Mjarestad\DHL\QuotePrice\StructType\TVolume_TD $volume = null)
    {
        $this
            ->setWeight($weight)
            ->setVolume($volume);
    }
    /**
     * Get Weight value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWeight_TD|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeight_TD $weight
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDimensions_TD
     */
    public function setWeight(\Mjarestad\DHL\QuotePrice\StructType\TWeight_TD $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Volume value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TVolume_TD|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    /**
     * Set Volume value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolume_TD $volume
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDimensions_TD
     */
    public function setVolume(\Mjarestad\DHL\QuotePrice\StructType\TVolume_TD $volume = null)
    {
        $this->Volume = $volume;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDimensions_TD
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
