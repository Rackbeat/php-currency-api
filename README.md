# API Wrapper for popular currency rate APIs

Dont worry about your favorite service suddenly shutting down or switching plans on you. Switch away easily.

<p align="center"> 
<a href="https://travis-ci.org/Rackbeat/php-currency-api"><img src="https://img.shields.io/travis/Rackbeat/php-currency-api.svg?style=flat-square" alt="Build Status"></a>
<a href="https://coveralls.io/github/Rackbeat/php-currency-api"><img src="https://img.shields.io/coveralls/Rackbeat/php-currency-api.svg?style=flat-square" alt="Coverage"></a>
<a href="https://packagist.org/packages/rackbeat/php-currency-api"><img src="https://img.shields.io/packagist/dt/rackbeat/php-currency-api.svg?style=flat-square" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/rackbeat/php-currency-api"><img src="https://img.shields.io/packagist/v/rackbeat/php-currency-api.svg?style=flat-square" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/rackbeat/php-currency-api"><img src="https://img.shields.io/packagist/l/rackbeat/php-currency-api.svg?style=flat-square" alt="License"></a>
</p>

## Supported APIs

* [FixerIO](https://fixer.io)
* ~~[CurrencyLayer](https://currencylayer.com)~~ coming soon
* ~~[Open Exchange Rates](https://openexchangerates.org)~~ coming soon
* ~~[json rates](http://jsonrates.com)~~ coming soon
* ~~[Currency Converter API](https://www.currencyconverterapi.com)~~ coming soon

## Installation

You just require using composer and you're good to go!

```bash
composer require rackbeat/php-currency-api
```

If you're using Laravel, a service provider and facade is included to provide configuration of driver etc.

## Usage

```php
Rackbeat\VAT::include($amountExclVat = 100.0, 25); // 125.0
Rackbeat\VAT::exclude($amountInclVat = 100.0, 25); // 80.0
Rackbeat\VAT::amount($amountInclVat = 100.0, 25); // 25.0
Rackbeat\VAT::percentage($amountInclVat = 100.0, $amountExclVat = 80.0); // 0.25
```

## Laravel

... todo

## Requirements
* PHP >= 7.1
