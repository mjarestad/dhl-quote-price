<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseRow StructType
 * @subpackage Structs
 */
class ResponseRow extends AbstractStructBase
{
    /**
     * The SortOrder
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $SortOrder;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Id;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The DescriptionEng
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DescriptionEng;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Value;
    /**
     * The Unit
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Unit;
    /**
     * Constructor method for ResponseRow
     * @uses ResponseRow::setSortOrder()
     * @uses ResponseRow::setId()
     * @uses ResponseRow::setDescription()
     * @uses ResponseRow::setDescriptionEng()
     * @uses ResponseRow::setValue()
     * @uses ResponseRow::setUnit()
     * @param int $sortOrder
     * @param string $id
     * @param string $description
     * @param string $descriptionEng
     * @param string $value
     * @param string $unit
     */
    public function __construct($sortOrder = null, $id = null, $description = null, $descriptionEng = null, $value = null, $unit = null)
    {
        $this
            ->setSortOrder($sortOrder)
            ->setId($id)
            ->setDescription($description)
            ->setDescriptionEng($descriptionEng)
            ->setValue($value)
            ->setUnit($unit);
    }
    /**
     * Get SortOrder value
     * @return int
     */
    public function getSortOrder()
    {
        return $this->SortOrder;
    }
    /**
     * Set SortOrder value
     * @param int $sortOrder
     * @return \Mjarestad\DHL\QuotePrice\StructType\ResponseRow
     */
    public function setSortOrder($sortOrder = null)
    {
        // validation for constraint: int
        if (!is_null($sortOrder) && !(is_int($sortOrder) || ctype_digit($sortOrder))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sortOrder, true), gettype($sortOrder)), __LINE__);
        }
        $this->SortOrder = $sortOrder;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Mjarestad\DHL\QuotePrice\StructType\ResponseRow
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Mjarestad\DHL\QuotePrice\StructType\ResponseRow
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get DescriptionEng value
     * @return string|null
     */
    public function getDescriptionEng()
    {
        return $this->DescriptionEng;
    }
    /**
     * Set DescriptionEng value
     * @param string $descriptionEng
     * @return \Mjarestad\DHL\QuotePrice\StructType\ResponseRow
     */
    public function setDescriptionEng($descriptionEng = null)
    {
        // validation for constraint: string
        if (!is_null($descriptionEng) && !is_string($descriptionEng)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descriptionEng, true), gettype($descriptionEng)), __LINE__);
        }
        $this->DescriptionEng = $descriptionEng;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Mjarestad\DHL\QuotePrice\StructType\ResponseRow
     */
    public function setValue($value = null)
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Get Unit value
     * @return string|null
     */
    public function getUnit()
    {
        return $this->Unit;
    }
    /**
     * Set Unit value
     * @param string $unit
     * @return \Mjarestad\DHL\QuotePrice\StructType\ResponseRow
     */
    public function setUnit($unit = null)
    {
        // validation for constraint: string
        if (!is_null($unit) && !is_string($unit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unit, true), gettype($unit)), __LINE__);
        }
        $this->Unit = $unit;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\ResponseRow
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
