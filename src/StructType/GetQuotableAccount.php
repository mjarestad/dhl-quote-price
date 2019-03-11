<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetQuotableAccount StructType
 * @subpackage Structs
 */
class GetQuotableAccount extends AbstractStructBase
{
    /**
     * The Credentials
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: s1:Credentials
     * @var \Mjarestad\DHL\QuotePrice\StructType\Credentials
     */
    public $Credentials;
    /**
     * The strUser
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $strUser;
    /**
     * Constructor method for GetQuotableAccount
     * @uses GetQuotableAccount::setCredentials()
     * @uses GetQuotableAccount::setStrUser()
     * @param \Mjarestad\DHL\QuotePrice\StructType\Credentials $credentials
     * @param string $strUser
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\Credentials $credentials = null, $strUser = null)
    {
        $this
            ->setCredentials($credentials)
            ->setStrUser($strUser);
    }
    /**
     * Get Credentials value
     * @return \Mjarestad\DHL\QuotePrice\StructType\Credentials|null
     */
    public function getCredentials()
    {
        return $this->Credentials;
    }
    /**
     * Set Credentials value
     * @param \Mjarestad\DHL\QuotePrice\StructType\Credentials $credentials
     * @return \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccount
     */
    public function setCredentials(\Mjarestad\DHL\QuotePrice\StructType\Credentials $credentials = null)
    {
        $this->Credentials = $credentials;
        return $this;
    }
    /**
     * Get strUser value
     * @return string|null
     */
    public function getStrUser()
    {
        return $this->strUser;
    }
    /**
     * Set strUser value
     * @param string $strUser
     * @return \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccount
     */
    public function setStrUser($strUser = null)
    {
        // validation for constraint: string
        if (!is_null($strUser) && !is_string($strUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($strUser, true), gettype($strUser)), __LINE__);
        }
        $this->strUser = $strUser;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\GetQuotableAccount
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
