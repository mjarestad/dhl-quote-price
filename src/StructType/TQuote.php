<?php

namespace Mjarestad\DHL\QuotePrice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tQuote StructType
 * @subpackage Structs
 */
class TQuote extends AbstractStructBase
{
    /**
     * The DHLB2C
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TDHLB2C
     */
    public $DHLB2C;
    /**
     * The DHLC2B
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TDHLC2B
     */
    public $DHLC2B;
    /**
     * The DHLEuropack
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TDHLEuropack
     */
    public $DHLEuropack;
    /**
     * The DHLEuroplus
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TDHLEuroplus
     */
    public $DHLEuroplus;
    /**
     * The DHLExpress
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TDHLExpress
     */
    public $DHLExpress;
    /**
     * The DHLHomeDeliveryDhlTerminal
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminal
     */
    public $DHLHomeDeliveryDhlTerminal;
    /**
     * The DHLHomeDeliveryDhlTerminalReturn
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminalReturn
     */
    public $DHLHomeDeliveryDhlTerminalReturn;
    /**
     * The DHLHomeDeliveryExternalTerminal
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminal
     */
    public $DHLHomeDeliveryExternalTerminal;
    /**
     * The DHLHomeDeliveryExternalTerminalReturn
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminalReturn
     */
    public $DHLHomeDeliveryExternalTerminalReturn;
    /**
     * The DHLPall
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TDHLPall
     */
    public $DHLPall;
    /**
     * The DHLParti
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TDHLParti
     */
    public $DHLParti;
    /**
     * The DHLStycke
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TDHLStycke
     */
    public $DHLStycke;
    /**
     * The DkEuroConnect
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TDkEuroConnect
     */
    public $DkEuroConnect;
    /**
     * The DkEuroConnectDomestic
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TDkEuroConnectDomestic
     */
    public $DkEuroConnectDomestic;
    /**
     * The DkEuroLineDomestic
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TDkEuroLineDomestic
     */
    public $DkEuroLineDomestic;
    /**
     * The Eurapid
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TEurapid
     */
    public $Eurapid;
    /**
     * The EuroConnect
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TEuroConnect
     */
    public $EuroConnect;
    /**
     * The EuropremiumSE
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TEuropremiumSE
     */
    public $EuropremiumSE;
    /**
     * The NorskInnland
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TNorskInnland
     */
    public $NorskInnland;
    /**
     * The PaketExport
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TPaketExport
     */
    public $PaketExport;
    /**
     * The ParcelConnect
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TParcelConnect
     */
    public $ParcelConnect;
    /**
     * The SverigePall
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TSverigePall
     */
    public $SverigePall;
    /**
     * The Swednet
     * Meta informations extracted from the WSDL
     * - choice: DHLB2C | DHLC2B | DHLEuropack | DHLEuroplus | DHLExpress | DHLHomeDeliveryDhlTerminal | DHLHomeDeliveryDhlTerminalReturn | DHLHomeDeliveryExternalTerminal | DHLHomeDeliveryExternalTerminalReturn | DHLPall | DHLParti | DHLStycke |
     * DkEuroConnect | DkEuroConnectDomestic | DkEuroLineDomestic | Eurapid | EuroConnect | EuropremiumSE | NorskInnland | PaketExport | ParcelConnect | SverigePall | Swednet
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Mjarestad\DHL\QuotePrice\StructType\TSwednet
     */
    public $Swednet;
    /**
     * Constructor method for tQuote
     * @uses TQuote::setDHLB2C()
     * @uses TQuote::setDHLC2B()
     * @uses TQuote::setDHLEuropack()
     * @uses TQuote::setDHLEuroplus()
     * @uses TQuote::setDHLExpress()
     * @uses TQuote::setDHLHomeDeliveryDhlTerminal()
     * @uses TQuote::setDHLHomeDeliveryDhlTerminalReturn()
     * @uses TQuote::setDHLHomeDeliveryExternalTerminal()
     * @uses TQuote::setDHLHomeDeliveryExternalTerminalReturn()
     * @uses TQuote::setDHLPall()
     * @uses TQuote::setDHLParti()
     * @uses TQuote::setDHLStycke()
     * @uses TQuote::setDkEuroConnect()
     * @uses TQuote::setDkEuroConnectDomestic()
     * @uses TQuote::setDkEuroLineDomestic()
     * @uses TQuote::setEurapid()
     * @uses TQuote::setEuroConnect()
     * @uses TQuote::setEuropremiumSE()
     * @uses TQuote::setNorskInnland()
     * @uses TQuote::setPaketExport()
     * @uses TQuote::setParcelConnect()
     * @uses TQuote::setSverigePall()
     * @uses TQuote::setSwednet()
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLB2C $dHLB2C
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLC2B $dHLC2B
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLEuropack $dHLEuropack
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLEuroplus $dHLEuroplus
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLExpress $dHLExpress
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminal $dHLHomeDeliveryDhlTerminal
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminalReturn $dHLHomeDeliveryDhlTerminalReturn
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminal $dHLHomeDeliveryExternalTerminal
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminalReturn $dHLHomeDeliveryExternalTerminalReturn
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLPall $dHLPall
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLParti $dHLParti
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLStycke $dHLStycke
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDkEuroConnect $dkEuroConnect
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDkEuroConnectDomestic $dkEuroConnectDomestic
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDkEuroLineDomestic $dkEuroLineDomestic
     * @param \Mjarestad\DHL\QuotePrice\StructType\TEurapid $eurapid
     * @param \Mjarestad\DHL\QuotePrice\StructType\TEuroConnect $euroConnect
     * @param \Mjarestad\DHL\QuotePrice\StructType\TEuropremiumSE $europremiumSE
     * @param \Mjarestad\DHL\QuotePrice\StructType\TNorskInnland $norskInnland
     * @param \Mjarestad\DHL\QuotePrice\StructType\TPaketExport $paketExport
     * @param \Mjarestad\DHL\QuotePrice\StructType\TParcelConnect $parcelConnect
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSverigePall $sverigePall
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSwednet $swednet
     */
    public function __construct(\Mjarestad\DHL\QuotePrice\StructType\TDHLB2C $dHLB2C = null, \Mjarestad\DHL\QuotePrice\StructType\TDHLC2B $dHLC2B = null, \Mjarestad\DHL\QuotePrice\StructType\TDHLEuropack $dHLEuropack = null, \Mjarestad\DHL\QuotePrice\StructType\TDHLEuroplus $dHLEuroplus = null, \Mjarestad\DHL\QuotePrice\StructType\TDHLExpress $dHLExpress = null, \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminal $dHLHomeDeliveryDhlTerminal = null, \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminalReturn $dHLHomeDeliveryDhlTerminalReturn = null, \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminal $dHLHomeDeliveryExternalTerminal = null, \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminalReturn $dHLHomeDeliveryExternalTerminalReturn = null, \Mjarestad\DHL\QuotePrice\StructType\TDHLPall $dHLPall = null, \Mjarestad\DHL\QuotePrice\StructType\TDHLParti $dHLParti = null, \Mjarestad\DHL\QuotePrice\StructType\TDHLStycke $dHLStycke = null, \Mjarestad\DHL\QuotePrice\StructType\TDkEuroConnect $dkEuroConnect = null, \Mjarestad\DHL\QuotePrice\StructType\TDkEuroConnectDomestic $dkEuroConnectDomestic = null, \Mjarestad\DHL\QuotePrice\StructType\TDkEuroLineDomestic $dkEuroLineDomestic = null, \Mjarestad\DHL\QuotePrice\StructType\TEurapid $eurapid = null, \Mjarestad\DHL\QuotePrice\StructType\TEuroConnect $euroConnect = null, \Mjarestad\DHL\QuotePrice\StructType\TEuropremiumSE $europremiumSE = null, \Mjarestad\DHL\QuotePrice\StructType\TNorskInnland $norskInnland = null, \Mjarestad\DHL\QuotePrice\StructType\TPaketExport $paketExport = null, \Mjarestad\DHL\QuotePrice\StructType\TParcelConnect $parcelConnect = null, \Mjarestad\DHL\QuotePrice\StructType\TSverigePall $sverigePall = null, \Mjarestad\DHL\QuotePrice\StructType\TSwednet $swednet = null)
    {
        $this
            ->setDHLB2C($dHLB2C)
            ->setDHLC2B($dHLC2B)
            ->setDHLEuropack($dHLEuropack)
            ->setDHLEuroplus($dHLEuroplus)
            ->setDHLExpress($dHLExpress)
            ->setDHLHomeDeliveryDhlTerminal($dHLHomeDeliveryDhlTerminal)
            ->setDHLHomeDeliveryDhlTerminalReturn($dHLHomeDeliveryDhlTerminalReturn)
            ->setDHLHomeDeliveryExternalTerminal($dHLHomeDeliveryExternalTerminal)
            ->setDHLHomeDeliveryExternalTerminalReturn($dHLHomeDeliveryExternalTerminalReturn)
            ->setDHLPall($dHLPall)
            ->setDHLParti($dHLParti)
            ->setDHLStycke($dHLStycke)
            ->setDkEuroConnect($dkEuroConnect)
            ->setDkEuroConnectDomestic($dkEuroConnectDomestic)
            ->setDkEuroLineDomestic($dkEuroLineDomestic)
            ->setEurapid($eurapid)
            ->setEuroConnect($euroConnect)
            ->setEuropremiumSE($europremiumSE)
            ->setNorskInnland($norskInnland)
            ->setPaketExport($paketExport)
            ->setParcelConnect($parcelConnect)
            ->setSverigePall($sverigePall)
            ->setSwednet($swednet);
    }
    /**
     * Get DHLB2C value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLB2C|null
     */
    public function getDHLB2C()
    {
        return isset($this->DHLB2C) ? $this->DHLB2C : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDHLB2C method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDHLB2C method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDHLB2CForChoiceConstraintsFromSetDHLB2C($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DHLB2C can\'t be set as the property %s is already set. Only one property must be set among these properties: DHLB2C, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DHLB2C value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLB2C $dHLB2C
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setDHLB2C(\Mjarestad\DHL\QuotePrice\StructType\TDHLB2C $dHLB2C = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($dHLB2CChoiceErrorMessage = self::validateDHLB2CForChoiceConstraintsFromSetDHLB2C($dHLB2C))) {
            throw new \InvalidArgumentException($dHLB2CChoiceErrorMessage, __LINE__);
        }
        if (is_null($dHLB2C) || (is_array($dHLB2C) && empty($dHLB2C))) {
            unset($this->DHLB2C);
        } else {
            $this->DHLB2C = $dHLB2C;
        }
        return $this;
    }
    /**
     * Get DHLC2B value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLC2B|null
     */
    public function getDHLC2B()
    {
        return isset($this->DHLC2B) ? $this->DHLC2B : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDHLC2B method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDHLC2B method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDHLC2BForChoiceConstraintsFromSetDHLC2B($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DHLC2B can\'t be set as the property %s is already set. Only one property must be set among these properties: DHLC2B, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DHLC2B value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLC2B $dHLC2B
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setDHLC2B(\Mjarestad\DHL\QuotePrice\StructType\TDHLC2B $dHLC2B = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($dHLC2BChoiceErrorMessage = self::validateDHLC2BForChoiceConstraintsFromSetDHLC2B($dHLC2B))) {
            throw new \InvalidArgumentException($dHLC2BChoiceErrorMessage, __LINE__);
        }
        if (is_null($dHLC2B) || (is_array($dHLC2B) && empty($dHLC2B))) {
            unset($this->DHLC2B);
        } else {
            $this->DHLC2B = $dHLC2B;
        }
        return $this;
    }
    /**
     * Get DHLEuropack value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLEuropack|null
     */
    public function getDHLEuropack()
    {
        return isset($this->DHLEuropack) ? $this->DHLEuropack : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDHLEuropack method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDHLEuropack method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDHLEuropackForChoiceConstraintsFromSetDHLEuropack($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DHLEuropack can\'t be set as the property %s is already set. Only one property must be set among these properties: DHLEuropack, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DHLEuropack value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLEuropack $dHLEuropack
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setDHLEuropack(\Mjarestad\DHL\QuotePrice\StructType\TDHLEuropack $dHLEuropack = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($dHLEuropackChoiceErrorMessage = self::validateDHLEuropackForChoiceConstraintsFromSetDHLEuropack($dHLEuropack))) {
            throw new \InvalidArgumentException($dHLEuropackChoiceErrorMessage, __LINE__);
        }
        if (is_null($dHLEuropack) || (is_array($dHLEuropack) && empty($dHLEuropack))) {
            unset($this->DHLEuropack);
        } else {
            $this->DHLEuropack = $dHLEuropack;
        }
        return $this;
    }
    /**
     * Get DHLEuroplus value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLEuroplus|null
     */
    public function getDHLEuroplus()
    {
        return isset($this->DHLEuroplus) ? $this->DHLEuroplus : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDHLEuroplus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDHLEuroplus method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDHLEuroplusForChoiceConstraintsFromSetDHLEuroplus($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DHLEuroplus can\'t be set as the property %s is already set. Only one property must be set among these properties: DHLEuroplus, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DHLEuroplus value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLEuroplus $dHLEuroplus
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setDHLEuroplus(\Mjarestad\DHL\QuotePrice\StructType\TDHLEuroplus $dHLEuroplus = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($dHLEuroplusChoiceErrorMessage = self::validateDHLEuroplusForChoiceConstraintsFromSetDHLEuroplus($dHLEuroplus))) {
            throw new \InvalidArgumentException($dHLEuroplusChoiceErrorMessage, __LINE__);
        }
        if (is_null($dHLEuroplus) || (is_array($dHLEuroplus) && empty($dHLEuroplus))) {
            unset($this->DHLEuroplus);
        } else {
            $this->DHLEuroplus = $dHLEuroplus;
        }
        return $this;
    }
    /**
     * Get DHLExpress value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLExpress|null
     */
    public function getDHLExpress()
    {
        return isset($this->DHLExpress) ? $this->DHLExpress : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDHLExpress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDHLExpress method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDHLExpressForChoiceConstraintsFromSetDHLExpress($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DHLExpress can\'t be set as the property %s is already set. Only one property must be set among these properties: DHLExpress, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DHLExpress value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLExpress $dHLExpress
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setDHLExpress(\Mjarestad\DHL\QuotePrice\StructType\TDHLExpress $dHLExpress = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($dHLExpressChoiceErrorMessage = self::validateDHLExpressForChoiceConstraintsFromSetDHLExpress($dHLExpress))) {
            throw new \InvalidArgumentException($dHLExpressChoiceErrorMessage, __LINE__);
        }
        if (is_null($dHLExpress) || (is_array($dHLExpress) && empty($dHLExpress))) {
            unset($this->DHLExpress);
        } else {
            $this->DHLExpress = $dHLExpress;
        }
        return $this;
    }
    /**
     * Get DHLHomeDeliveryDhlTerminal value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminal|null
     */
    public function getDHLHomeDeliveryDhlTerminal()
    {
        return isset($this->DHLHomeDeliveryDhlTerminal) ? $this->DHLHomeDeliveryDhlTerminal : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDHLHomeDeliveryDhlTerminal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDHLHomeDeliveryDhlTerminal method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDHLHomeDeliveryDhlTerminalForChoiceConstraintsFromSetDHLHomeDeliveryDhlTerminal($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DHLHomeDeliveryDhlTerminal can\'t be set as the property %s is already set. Only one property must be set among these properties: DHLHomeDeliveryDhlTerminal, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DHLHomeDeliveryDhlTerminal value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminal $dHLHomeDeliveryDhlTerminal
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setDHLHomeDeliveryDhlTerminal(\Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminal $dHLHomeDeliveryDhlTerminal = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($dHLHomeDeliveryDhlTerminalChoiceErrorMessage = self::validateDHLHomeDeliveryDhlTerminalForChoiceConstraintsFromSetDHLHomeDeliveryDhlTerminal($dHLHomeDeliveryDhlTerminal))) {
            throw new \InvalidArgumentException($dHLHomeDeliveryDhlTerminalChoiceErrorMessage, __LINE__);
        }
        if (is_null($dHLHomeDeliveryDhlTerminal) || (is_array($dHLHomeDeliveryDhlTerminal) && empty($dHLHomeDeliveryDhlTerminal))) {
            unset($this->DHLHomeDeliveryDhlTerminal);
        } else {
            $this->DHLHomeDeliveryDhlTerminal = $dHLHomeDeliveryDhlTerminal;
        }
        return $this;
    }
    /**
     * Get DHLHomeDeliveryDhlTerminalReturn value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminalReturn|null
     */
    public function getDHLHomeDeliveryDhlTerminalReturn()
    {
        return isset($this->DHLHomeDeliveryDhlTerminalReturn) ? $this->DHLHomeDeliveryDhlTerminalReturn : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDHLHomeDeliveryDhlTerminalReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDHLHomeDeliveryDhlTerminalReturn method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDHLHomeDeliveryDhlTerminalReturnForChoiceConstraintsFromSetDHLHomeDeliveryDhlTerminalReturn($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DHLHomeDeliveryDhlTerminalReturn can\'t be set as the property %s is already set. Only one property must be set among these properties: DHLHomeDeliveryDhlTerminalReturn, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DHLHomeDeliveryDhlTerminalReturn value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminalReturn $dHLHomeDeliveryDhlTerminalReturn
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setDHLHomeDeliveryDhlTerminalReturn(\Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryDhlTerminalReturn $dHLHomeDeliveryDhlTerminalReturn = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($dHLHomeDeliveryDhlTerminalReturnChoiceErrorMessage = self::validateDHLHomeDeliveryDhlTerminalReturnForChoiceConstraintsFromSetDHLHomeDeliveryDhlTerminalReturn($dHLHomeDeliveryDhlTerminalReturn))) {
            throw new \InvalidArgumentException($dHLHomeDeliveryDhlTerminalReturnChoiceErrorMessage, __LINE__);
        }
        if (is_null($dHLHomeDeliveryDhlTerminalReturn) || (is_array($dHLHomeDeliveryDhlTerminalReturn) && empty($dHLHomeDeliveryDhlTerminalReturn))) {
            unset($this->DHLHomeDeliveryDhlTerminalReturn);
        } else {
            $this->DHLHomeDeliveryDhlTerminalReturn = $dHLHomeDeliveryDhlTerminalReturn;
        }
        return $this;
    }
    /**
     * Get DHLHomeDeliveryExternalTerminal value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminal|null
     */
    public function getDHLHomeDeliveryExternalTerminal()
    {
        return isset($this->DHLHomeDeliveryExternalTerminal) ? $this->DHLHomeDeliveryExternalTerminal : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDHLHomeDeliveryExternalTerminal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDHLHomeDeliveryExternalTerminal method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDHLHomeDeliveryExternalTerminalForChoiceConstraintsFromSetDHLHomeDeliveryExternalTerminal($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DHLHomeDeliveryExternalTerminal can\'t be set as the property %s is already set. Only one property must be set among these properties: DHLHomeDeliveryExternalTerminal, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DHLHomeDeliveryExternalTerminal value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminal $dHLHomeDeliveryExternalTerminal
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setDHLHomeDeliveryExternalTerminal(\Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminal $dHLHomeDeliveryExternalTerminal = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($dHLHomeDeliveryExternalTerminalChoiceErrorMessage = self::validateDHLHomeDeliveryExternalTerminalForChoiceConstraintsFromSetDHLHomeDeliveryExternalTerminal($dHLHomeDeliveryExternalTerminal))) {
            throw new \InvalidArgumentException($dHLHomeDeliveryExternalTerminalChoiceErrorMessage, __LINE__);
        }
        if (is_null($dHLHomeDeliveryExternalTerminal) || (is_array($dHLHomeDeliveryExternalTerminal) && empty($dHLHomeDeliveryExternalTerminal))) {
            unset($this->DHLHomeDeliveryExternalTerminal);
        } else {
            $this->DHLHomeDeliveryExternalTerminal = $dHLHomeDeliveryExternalTerminal;
        }
        return $this;
    }
    /**
     * Get DHLHomeDeliveryExternalTerminalReturn value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminalReturn|null
     */
    public function getDHLHomeDeliveryExternalTerminalReturn()
    {
        return isset($this->DHLHomeDeliveryExternalTerminalReturn) ? $this->DHLHomeDeliveryExternalTerminalReturn : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDHLHomeDeliveryExternalTerminalReturn method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDHLHomeDeliveryExternalTerminalReturn method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDHLHomeDeliveryExternalTerminalReturnForChoiceConstraintsFromSetDHLHomeDeliveryExternalTerminalReturn($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DHLHomeDeliveryExternalTerminalReturn can\'t be set as the property %s is already set. Only one property must be set among these properties: DHLHomeDeliveryExternalTerminalReturn, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DHLHomeDeliveryExternalTerminalReturn value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminalReturn $dHLHomeDeliveryExternalTerminalReturn
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setDHLHomeDeliveryExternalTerminalReturn(\Mjarestad\DHL\QuotePrice\StructType\TDHLHomeDeliveryExternalTerminalReturn $dHLHomeDeliveryExternalTerminalReturn = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($dHLHomeDeliveryExternalTerminalReturnChoiceErrorMessage = self::validateDHLHomeDeliveryExternalTerminalReturnForChoiceConstraintsFromSetDHLHomeDeliveryExternalTerminalReturn($dHLHomeDeliveryExternalTerminalReturn))) {
            throw new \InvalidArgumentException($dHLHomeDeliveryExternalTerminalReturnChoiceErrorMessage, __LINE__);
        }
        if (is_null($dHLHomeDeliveryExternalTerminalReturn) || (is_array($dHLHomeDeliveryExternalTerminalReturn) && empty($dHLHomeDeliveryExternalTerminalReturn))) {
            unset($this->DHLHomeDeliveryExternalTerminalReturn);
        } else {
            $this->DHLHomeDeliveryExternalTerminalReturn = $dHLHomeDeliveryExternalTerminalReturn;
        }
        return $this;
    }
    /**
     * Get DHLPall value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLPall|null
     */
    public function getDHLPall()
    {
        return isset($this->DHLPall) ? $this->DHLPall : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDHLPall method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDHLPall method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDHLPallForChoiceConstraintsFromSetDHLPall($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DHLPall can\'t be set as the property %s is already set. Only one property must be set among these properties: DHLPall, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DHLPall value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLPall $dHLPall
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setDHLPall(\Mjarestad\DHL\QuotePrice\StructType\TDHLPall $dHLPall = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($dHLPallChoiceErrorMessage = self::validateDHLPallForChoiceConstraintsFromSetDHLPall($dHLPall))) {
            throw new \InvalidArgumentException($dHLPallChoiceErrorMessage, __LINE__);
        }
        if (is_null($dHLPall) || (is_array($dHLPall) && empty($dHLPall))) {
            unset($this->DHLPall);
        } else {
            $this->DHLPall = $dHLPall;
        }
        return $this;
    }
    /**
     * Get DHLParti value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLParti|null
     */
    public function getDHLParti()
    {
        return isset($this->DHLParti) ? $this->DHLParti : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDHLParti method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDHLParti method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDHLPartiForChoiceConstraintsFromSetDHLParti($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DHLParti can\'t be set as the property %s is already set. Only one property must be set among these properties: DHLParti, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DHLParti value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLParti $dHLParti
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setDHLParti(\Mjarestad\DHL\QuotePrice\StructType\TDHLParti $dHLParti = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($dHLPartiChoiceErrorMessage = self::validateDHLPartiForChoiceConstraintsFromSetDHLParti($dHLParti))) {
            throw new \InvalidArgumentException($dHLPartiChoiceErrorMessage, __LINE__);
        }
        if (is_null($dHLParti) || (is_array($dHLParti) && empty($dHLParti))) {
            unset($this->DHLParti);
        } else {
            $this->DHLParti = $dHLParti;
        }
        return $this;
    }
    /**
     * Get DHLStycke value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDHLStycke|null
     */
    public function getDHLStycke()
    {
        return isset($this->DHLStycke) ? $this->DHLStycke : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDHLStycke method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDHLStycke method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDHLStyckeForChoiceConstraintsFromSetDHLStycke($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DHLStycke can\'t be set as the property %s is already set. Only one property must be set among these properties: DHLStycke, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DHLStycke value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDHLStycke $dHLStycke
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setDHLStycke(\Mjarestad\DHL\QuotePrice\StructType\TDHLStycke $dHLStycke = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($dHLStyckeChoiceErrorMessage = self::validateDHLStyckeForChoiceConstraintsFromSetDHLStycke($dHLStycke))) {
            throw new \InvalidArgumentException($dHLStyckeChoiceErrorMessage, __LINE__);
        }
        if (is_null($dHLStycke) || (is_array($dHLStycke) && empty($dHLStycke))) {
            unset($this->DHLStycke);
        } else {
            $this->DHLStycke = $dHLStycke;
        }
        return $this;
    }
    /**
     * Get DkEuroConnect value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDkEuroConnect|null
     */
    public function getDkEuroConnect()
    {
        return isset($this->DkEuroConnect) ? $this->DkEuroConnect : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDkEuroConnect method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDkEuroConnect method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDkEuroConnectForChoiceConstraintsFromSetDkEuroConnect($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DkEuroConnect can\'t be set as the property %s is already set. Only one property must be set among these properties: DkEuroConnect, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DkEuroConnect value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDkEuroConnect $dkEuroConnect
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setDkEuroConnect(\Mjarestad\DHL\QuotePrice\StructType\TDkEuroConnect $dkEuroConnect = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($dkEuroConnectChoiceErrorMessage = self::validateDkEuroConnectForChoiceConstraintsFromSetDkEuroConnect($dkEuroConnect))) {
            throw new \InvalidArgumentException($dkEuroConnectChoiceErrorMessage, __LINE__);
        }
        if (is_null($dkEuroConnect) || (is_array($dkEuroConnect) && empty($dkEuroConnect))) {
            unset($this->DkEuroConnect);
        } else {
            $this->DkEuroConnect = $dkEuroConnect;
        }
        return $this;
    }
    /**
     * Get DkEuroConnectDomestic value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDkEuroConnectDomestic|null
     */
    public function getDkEuroConnectDomestic()
    {
        return isset($this->DkEuroConnectDomestic) ? $this->DkEuroConnectDomestic : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDkEuroConnectDomestic method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDkEuroConnectDomestic method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDkEuroConnectDomesticForChoiceConstraintsFromSetDkEuroConnectDomestic($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DkEuroConnectDomestic can\'t be set as the property %s is already set. Only one property must be set among these properties: DkEuroConnectDomestic, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DkEuroConnectDomestic value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDkEuroConnectDomestic $dkEuroConnectDomestic
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setDkEuroConnectDomestic(\Mjarestad\DHL\QuotePrice\StructType\TDkEuroConnectDomestic $dkEuroConnectDomestic = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($dkEuroConnectDomesticChoiceErrorMessage = self::validateDkEuroConnectDomesticForChoiceConstraintsFromSetDkEuroConnectDomestic($dkEuroConnectDomestic))) {
            throw new \InvalidArgumentException($dkEuroConnectDomesticChoiceErrorMessage, __LINE__);
        }
        if (is_null($dkEuroConnectDomestic) || (is_array($dkEuroConnectDomestic) && empty($dkEuroConnectDomestic))) {
            unset($this->DkEuroConnectDomestic);
        } else {
            $this->DkEuroConnectDomestic = $dkEuroConnectDomestic;
        }
        return $this;
    }
    /**
     * Get DkEuroLineDomestic value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TDkEuroLineDomestic|null
     */
    public function getDkEuroLineDomestic()
    {
        return isset($this->DkEuroLineDomestic) ? $this->DkEuroLineDomestic : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDkEuroLineDomestic method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDkEuroLineDomestic method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDkEuroLineDomesticForChoiceConstraintsFromSetDkEuroLineDomestic($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DkEuroLineDomestic can\'t be set as the property %s is already set. Only one property must be set among these properties: DkEuroLineDomestic, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DkEuroLineDomestic value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TDkEuroLineDomestic $dkEuroLineDomestic
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setDkEuroLineDomestic(\Mjarestad\DHL\QuotePrice\StructType\TDkEuroLineDomestic $dkEuroLineDomestic = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($dkEuroLineDomesticChoiceErrorMessage = self::validateDkEuroLineDomesticForChoiceConstraintsFromSetDkEuroLineDomestic($dkEuroLineDomestic))) {
            throw new \InvalidArgumentException($dkEuroLineDomesticChoiceErrorMessage, __LINE__);
        }
        if (is_null($dkEuroLineDomestic) || (is_array($dkEuroLineDomestic) && empty($dkEuroLineDomestic))) {
            unset($this->DkEuroLineDomestic);
        } else {
            $this->DkEuroLineDomestic = $dkEuroLineDomestic;
        }
        return $this;
    }
    /**
     * Get Eurapid value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TEurapid|null
     */
    public function getEurapid()
    {
        return isset($this->Eurapid) ? $this->Eurapid : null;
    }
    /**
     * This method is responsible for validating the value passed to the setEurapid method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEurapid method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEurapidForChoiceConstraintsFromSetEurapid($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Eurapid can\'t be set as the property %s is already set. Only one property must be set among these properties: Eurapid, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Eurapid value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TEurapid $eurapid
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setEurapid(\Mjarestad\DHL\QuotePrice\StructType\TEurapid $eurapid = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($eurapidChoiceErrorMessage = self::validateEurapidForChoiceConstraintsFromSetEurapid($eurapid))) {
            throw new \InvalidArgumentException($eurapidChoiceErrorMessage, __LINE__);
        }
        if (is_null($eurapid) || (is_array($eurapid) && empty($eurapid))) {
            unset($this->Eurapid);
        } else {
            $this->Eurapid = $eurapid;
        }
        return $this;
    }
    /**
     * Get EuroConnect value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TEuroConnect|null
     */
    public function getEuroConnect()
    {
        return isset($this->EuroConnect) ? $this->EuroConnect : null;
    }
    /**
     * This method is responsible for validating the value passed to the setEuroConnect method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEuroConnect method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEuroConnectForChoiceConstraintsFromSetEuroConnect($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property EuroConnect can\'t be set as the property %s is already set. Only one property must be set among these properties: EuroConnect, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set EuroConnect value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TEuroConnect $euroConnect
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setEuroConnect(\Mjarestad\DHL\QuotePrice\StructType\TEuroConnect $euroConnect = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($euroConnectChoiceErrorMessage = self::validateEuroConnectForChoiceConstraintsFromSetEuroConnect($euroConnect))) {
            throw new \InvalidArgumentException($euroConnectChoiceErrorMessage, __LINE__);
        }
        if (is_null($euroConnect) || (is_array($euroConnect) && empty($euroConnect))) {
            unset($this->EuroConnect);
        } else {
            $this->EuroConnect = $euroConnect;
        }
        return $this;
    }
    /**
     * Get EuropremiumSE value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TEuropremiumSE|null
     */
    public function getEuropremiumSE()
    {
        return isset($this->EuropremiumSE) ? $this->EuropremiumSE : null;
    }
    /**
     * This method is responsible for validating the value passed to the setEuropremiumSE method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEuropremiumSE method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateEuropremiumSEForChoiceConstraintsFromSetEuropremiumSE($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property EuropremiumSE can\'t be set as the property %s is already set. Only one property must be set among these properties: EuropremiumSE, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set EuropremiumSE value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TEuropremiumSE $europremiumSE
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setEuropremiumSE(\Mjarestad\DHL\QuotePrice\StructType\TEuropremiumSE $europremiumSE = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($europremiumSEChoiceErrorMessage = self::validateEuropremiumSEForChoiceConstraintsFromSetEuropremiumSE($europremiumSE))) {
            throw new \InvalidArgumentException($europremiumSEChoiceErrorMessage, __LINE__);
        }
        if (is_null($europremiumSE) || (is_array($europremiumSE) && empty($europremiumSE))) {
            unset($this->EuropremiumSE);
        } else {
            $this->EuropremiumSE = $europremiumSE;
        }
        return $this;
    }
    /**
     * Get NorskInnland value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TNorskInnland|null
     */
    public function getNorskInnland()
    {
        return isset($this->NorskInnland) ? $this->NorskInnland : null;
    }
    /**
     * This method is responsible for validating the value passed to the setNorskInnland method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNorskInnland method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNorskInnlandForChoiceConstraintsFromSetNorskInnland($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property NorskInnland can\'t be set as the property %s is already set. Only one property must be set among these properties: NorskInnland, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set NorskInnland value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TNorskInnland $norskInnland
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setNorskInnland(\Mjarestad\DHL\QuotePrice\StructType\TNorskInnland $norskInnland = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($norskInnlandChoiceErrorMessage = self::validateNorskInnlandForChoiceConstraintsFromSetNorskInnland($norskInnland))) {
            throw new \InvalidArgumentException($norskInnlandChoiceErrorMessage, __LINE__);
        }
        if (is_null($norskInnland) || (is_array($norskInnland) && empty($norskInnland))) {
            unset($this->NorskInnland);
        } else {
            $this->NorskInnland = $norskInnland;
        }
        return $this;
    }
    /**
     * Get PaketExport value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TPaketExport|null
     */
    public function getPaketExport()
    {
        return isset($this->PaketExport) ? $this->PaketExport : null;
    }
    /**
     * This method is responsible for validating the value passed to the setPaketExport method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaketExport method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validatePaketExportForChoiceConstraintsFromSetPaketExport($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'ParcelConnect',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property PaketExport can\'t be set as the property %s is already set. Only one property must be set among these properties: PaketExport, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set PaketExport value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TPaketExport $paketExport
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setPaketExport(\Mjarestad\DHL\QuotePrice\StructType\TPaketExport $paketExport = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($paketExportChoiceErrorMessage = self::validatePaketExportForChoiceConstraintsFromSetPaketExport($paketExport))) {
            throw new \InvalidArgumentException($paketExportChoiceErrorMessage, __LINE__);
        }
        if (is_null($paketExport) || (is_array($paketExport) && empty($paketExport))) {
            unset($this->PaketExport);
        } else {
            $this->PaketExport = $paketExport;
        }
        return $this;
    }
    /**
     * Get ParcelConnect value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TParcelConnect|null
     */
    public function getParcelConnect()
    {
        return isset($this->ParcelConnect) ? $this->ParcelConnect : null;
    }
    /**
     * This method is responsible for validating the value passed to the setParcelConnect method
     * This method is willingly generated in order to preserve the one-line inline validation within the setParcelConnect method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateParcelConnectForChoiceConstraintsFromSetParcelConnect($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'SverigePall',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property ParcelConnect can\'t be set as the property %s is already set. Only one property must be set among these properties: ParcelConnect, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set ParcelConnect value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TParcelConnect $parcelConnect
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setParcelConnect(\Mjarestad\DHL\QuotePrice\StructType\TParcelConnect $parcelConnect = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($parcelConnectChoiceErrorMessage = self::validateParcelConnectForChoiceConstraintsFromSetParcelConnect($parcelConnect))) {
            throw new \InvalidArgumentException($parcelConnectChoiceErrorMessage, __LINE__);
        }
        if (is_null($parcelConnect) || (is_array($parcelConnect) && empty($parcelConnect))) {
            unset($this->ParcelConnect);
        } else {
            $this->ParcelConnect = $parcelConnect;
        }
        return $this;
    }
    /**
     * Get SverigePall value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSverigePall|null
     */
    public function getSverigePall()
    {
        return isset($this->SverigePall) ? $this->SverigePall : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSverigePall method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSverigePall method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSverigePallForChoiceConstraintsFromSetSverigePall($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'Swednet',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property SverigePall can\'t be set as the property %s is already set. Only one property must be set among these properties: SverigePall, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set SverigePall value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSverigePall $sverigePall
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setSverigePall(\Mjarestad\DHL\QuotePrice\StructType\TSverigePall $sverigePall = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($sverigePallChoiceErrorMessage = self::validateSverigePallForChoiceConstraintsFromSetSverigePall($sverigePall))) {
            throw new \InvalidArgumentException($sverigePallChoiceErrorMessage, __LINE__);
        }
        if (is_null($sverigePall) || (is_array($sverigePall) && empty($sverigePall))) {
            unset($this->SverigePall);
        } else {
            $this->SverigePall = $sverigePall;
        }
        return $this;
    }
    /**
     * Get Swednet value
     * @return \Mjarestad\DHL\QuotePrice\StructType\TSwednet|null
     */
    public function getSwednet()
    {
        return isset($this->Swednet) ? $this->Swednet : null;
    }
    /**
     * This method is responsible for validating the value passed to the setSwednet method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSwednet method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateSwednetForChoiceConstraintsFromSetSwednet($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DHLB2C',
            'DHLC2B',
            'DHLEuropack',
            'DHLEuroplus',
            'DHLExpress',
            'DHLHomeDeliveryDhlTerminal',
            'DHLHomeDeliveryDhlTerminalReturn',
            'DHLHomeDeliveryExternalTerminal',
            'DHLHomeDeliveryExternalTerminalReturn',
            'DHLPall',
            'DHLParti',
            'DHLStycke',
            'DkEuroConnect',
            'DkEuroConnectDomestic',
            'DkEuroLineDomestic',
            'Eurapid',
            'EuroConnect',
            'EuropremiumSE',
            'NorskInnland',
            'PaketExport',
            'ParcelConnect',
            'SverigePall',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property Swednet can\'t be set as the property %s is already set. Only one property must be set among these properties: Swednet, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set Swednet value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mjarestad\DHL\QuotePrice\StructType\TSwednet $swednet
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
     */
    public function setSwednet(\Mjarestad\DHL\QuotePrice\StructType\TSwednet $swednet = null)
    {
        // validation for constraint: choice(DHLB2C, DHLC2B, DHLEuropack, DHLEuroplus, DHLExpress, DHLHomeDeliveryDhlTerminal, DHLHomeDeliveryDhlTerminalReturn, DHLHomeDeliveryExternalTerminal, DHLHomeDeliveryExternalTerminalReturn, DHLPall, DHLParti, DHLStycke, DkEuroConnect, DkEuroConnectDomestic, DkEuroLineDomestic, Eurapid, EuroConnect, EuropremiumSE, NorskInnland, PaketExport, ParcelConnect, SverigePall, Swednet)
        if ('' !== ($swednetChoiceErrorMessage = self::validateSwednetForChoiceConstraintsFromSetSwednet($swednet))) {
            throw new \InvalidArgumentException($swednetChoiceErrorMessage, __LINE__);
        }
        if (is_null($swednet) || (is_array($swednet) && empty($swednet))) {
            unset($this->Swednet);
        } else {
            $this->Swednet = $swednet;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mjarestad\DHL\QuotePrice\StructType\TQuote
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
