<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tLongGoods2 StructType
 * @subpackage Structs
 */
class TLongGoods2 extends AbstractStructBase
{
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TWeight2
     */
    public $Weight;
    /**
     * The Length
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TLength2
     */
    public $Length;
    /**
     * The Width
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TWidth2
     */
    public $Width;
    /**
     * Constructor method for tLongGoods2
     * @uses TLongGoods2::setWeight()
     * @uses TLongGoods2::setLength()
     * @uses TLongGoods2::setWidth()
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeight2 $weight
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLength2 $length
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWidth2 $width
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\TWeight2 $weight = null, \Mjarestad\DHL\QuotePrice\StructType\TLength2 $length = null, \Mjarestad\DHL\QuotePrice\StructType\TWidth2 $width = null)
    {
        $this
            ->setWeight($weight)
            ->setLength($length)
            ->setWidth($width);
    }
    /**
     * Get Weight value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWeight2|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWeight2 $weight
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLongGoods2
     */
    public function setWeight(\Mjarestad\DHL\QuotePrice\StructType\TWeight2 $weight = null)
    {
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Get Length value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLength2|null
     */
    public function getLength()
    {
        return $this->Length;
    }
    /**
     * Set Length value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TLength2 $length
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLongGoods2
     */
    public function setLength(\Mjarestad\DHL\QuotePrice\StructType\TLength2 $length = null)
    {
        $this->Length = $length;
        return $this;
    }
    /**
     * Get Width value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TWidth2|null
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param \Mjarestad\DHL\QuotePrice\StructType\TWidth2 $width
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLongGoods2
     */
    public function setWidth(\Mjarestad\DHL\QuotePrice\StructType\TWidth2 $width = null)
    {
        $this->Width = $width;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TLongGoods2
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
