# DHL Freight - QuotePrice

A wrapper for DHL Freight Sweden QuotePrice Web Service.

Package generated from https://www.dhltoolbox.se/DHLQuotePriceWS/QuotePrice.asmx?WSDL using wsdltophp/packagegenerator.

## Installation

#### With composer:

```bash
composer require mjarestad/dhl-quote-price
```

## How to use

```php
$quote = [
    'DHLStycke' => [
        'AgreementNo' => '',
        'Weight' => 1000,
        'Volume' => 2,
        'SenderReceiver' => [
            'FromPostCode' => '50630',
            'ToPostCode' => '26772',
        ]
    ]
];
```

More info coming soon!

## Built With

* [WsdlToPhp](WsdlToPhp) - Wsdl to Php Package Generator
## Authors

* **Mattias Jarestad**

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details