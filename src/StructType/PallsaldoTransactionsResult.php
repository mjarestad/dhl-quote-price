<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PallsaldoTransactionsResult StructType
 * @subpackage Structs
 */
class PallsaldoTransactionsResult extends AbstractStructBase
{
    /**
     * The schema
     * Meta informations extracted from the WSDL
     * - ref: s:schema
     * @var \DOMDocument
     */
    public $schema;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PallsaldoTransactionsResult
     * @uses PallsaldoTransactionsResult::setSchema()
     * @uses PallsaldoTransactionsResult::setAny()
     * @param \DOMDocument $schema
     * @param \DOMDocument $any
     */
    public function __construct(\DOMDocument $schema = null, \DOMDocument $any = null)
    {
        $this
            ->setSchema($schema)
            ->setAny($any);
    }
    /**
     * Get schema value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getSchema($asString = true)
    {
        $domDocument = null;
        if (!empty($this->schema) && !$asString) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->schema);
        }
        return $asString ? $this->schema : $domDocument;
    }
    /**
     * Set schema value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument $schema
     * @return \Mjarestad\DHL\QuotePrice\StructType\PallsaldoTransactionsResult
     */
    public function setSchema(\DOMDocument $schema = null)
    {
        $this->schema = ($schema instanceof \DOMDocument) && $schema->hasChildNodes() ? $schema->saveXML($schema->childNodes->item(0)) : $schema;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        $domDocument = null;
        if (!empty($this->any) && !$asString) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asString ? $this->any : $domDocument;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument $any
     * @return \Mjarestad\DHL\QuotePrice\StructType\PallsaldoTransactionsResult
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\PallsaldoTransactionsResult
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
