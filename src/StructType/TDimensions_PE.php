<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tDimensions_PE StructType
 * @subpackage Structs
 */
class TDimensions_PE extends AbstractStructBase
{
    /**
     * The Length
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TLength_PE
     */
    public $Length;
    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TWidth_PE
     */
    public $Width;
    /**
     * The Height
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\THeight_PE
     */
    public $Height;
    /**
     * Constructor method for tDimensions_PE
     * @uses TDimensions_PE::setLength()
     * @uses TDimensions_PE::setWidth()
     * @uses TDimensions_PE::setHeight()
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLength_PE $length
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWidth_PE $width
     * @param \Mjarestad\DHL\QuotePrice\StructType\THeight_PE $height
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\TLength_PE $length = null, \Mjarestad\DHL\QuotePrice\StructType\TWidth_PE $width = null, \Mjarestad\DHL\QuotePrice\StructType\THeight_PE $height = null)
    {
        $this
            ->setLength($length)
            ->setWidth($width)
            ->setHeight($height);
    }
    /**
     * Get Length value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLength_PE|null
     */
    public function getLength()
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLength_PE $length
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDimensions_PE
     */
    public function setLength(\Mjarestad\DHL\QuotePrice\StructType\TLength_PE $length = null)
    {
        $this->Length = $length;
        return $this;
    }
    /**
     * Get Width value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWidth_PE|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWidth_PE $width
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDimensions_PE
     */
    public function setWidth(\Mjarestad\DHL\QuotePrice\StructType\TWidth_PE $width = null)
    {
        $this->Width = $width;
        return $this;
    }
    /**
     * Get Height value
     * @return \Mjarestad\DHL\QuotePrice\StructType\THeight_PE|null
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param \Mjarestad\DHL\QuotePrice\StructType\THeight_PE $height
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDimensions_PE
     */
    public function setHeight(\Mjarestad\DHL\QuotePrice\StructType\THeight_PE $height = null)
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
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDimensions_PE
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
