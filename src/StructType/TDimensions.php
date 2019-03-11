<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tDimensions StructType
 * @subpackage Structs
 */
class TDimensions extends AbstractStructBase
{
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TWeight_EC
     */
    public $Weight;
    /**
     * The Volume
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TVolume_EC
     */
    public $Volume;
    /**
     * The Loadingmeter
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeter_EC
     */
    public $Loadingmeter;
    /**
     * The Length
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TLength_EC
     */
    public $Length;
    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TWidth_EC
     */
    public $Width;
    /**
     * The Height
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\THeight_EC
     */
    public $Height;
    /**
     * Constructor method for tDimensions
     * @uses TDimensions::setWeight()
     * @uses TDimensions::setVolume()
     * @uses TDimensions::setLoadingmeter()
     * @uses TDimensions::setLength()
     * @uses TDimensions::setWidth()
     * @uses TDimensions::setHeight()
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeight_EC $weight
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolume_EC $volume
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeter_EC $loadingmeter
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLength_EC $length
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWidth_EC $width
     * @param \Mjarestad\DHL\QuotePrice\StructType\THeight_EC $height
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\TWeight_EC $weight = null, \Mjarestad\DHL\QuotePrice\StructType\TVolume_EC $volume = null, \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeter_EC $loadingmeter = null, \Mjarestad\DHL\QuotePrice\StructType\TLength_EC $length = null, \Mjarestad\DHL\QuotePrice\StructType\TWidth_EC $width = null, \Mjarestad\DHL\QuotePrice\StructType\THeight_EC $height = null)
    {
        $this
            ->setWeight($weight)
            ->setVolume($volume)
            ->setLoadingmeter($loadingmeter)
            ->setLength($length)
            ->setWidth($width)
            ->setHeight($height);
    }
    /**
     * Get Weight value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWeight_EC|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeight_EC $weight
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDimensions
     */
    public function setWeight(\Mjarestad\DHL\QuotePrice\StructType\TWeight_EC $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Volume value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TVolume_EC|null
     */
    public function getVolume()
    {
        return $this->Volume;
    }
    /**
     * Set Volume value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TVolume_EC $volume
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDimensions
     */
    public function setVolume(\Mjarestad\DHL\QuotePrice\StructType\TVolume_EC $volume = null)
    {
        $this->Volume = $volume;
        return $this;
    }
    /**
     * Get Loadingmeter value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeter_EC|null
     */
    public function getLoadingmeter()
    {
        return $this->Loadingmeter;
    }
    /**
     * Set Loadingmeter value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLoadingmeter_EC $loadingmeter
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDimensions
     */
    public function setLoadingmeter(\Mjarestad\DHL\QuotePrice\StructType\TLoadingmeter_EC $loadingmeter = null)
    {
        $this->Loadingmeter = $loadingmeter;
        return $this;
    }
    /**
     * Get Length value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLength_EC|null
     */
    public function getLength()
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLength_EC $length
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDimensions
     */
    public function setLength(\Mjarestad\DHL\QuotePrice\StructType\TLength_EC $length = null)
    {
        $this->Length = $length;
        return $this;
    }
    /**
     * Get Width value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWidth_EC|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWidth_EC $width
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDimensions
     */
    public function setWidth(\Mjarestad\DHL\QuotePrice\StructType\TWidth_EC $width = null)
    {
        $this->Width = $width;
        return $this;
    }
    /**
     * Get Height value
     * @return \Mjarestad\DHL\QuotePrice\StructType\THeight_EC|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param \Mjarestad\DHL\QuotePrice\StructType\THeight_EC $height
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDimensions
     */
    public function setHeight(\Mjarestad\DHL\QuotePrice\StructType\THeight_EC $height = null)
    {
        $this->Height = $height;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDimensions
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
