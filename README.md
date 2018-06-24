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

* [FixerIO](https://fixer.io) = fixerio
* ~~[CurrencyLayer](https://currencylayer.com)~~ coming soon = currencylayer
* ~~[Open Exchange Rates](https://openexchangerates.org)~~ coming soon = open_exchange_rates
* ~~[json rates](http://jsonrates.com)~~ coming soon = json_rates
* ~~[Currency Converter API](https://www.currencyconverterapi.com)~~ coming soon = currency_converter_api

## Installation

You just require using composer and you're good to go!

```bash
composer require rackbeat/php-currency-api
```

If you're using Laravel, a service provider and facade is included to provide configuration of driver etc.

## Usage

### Initialize instance

```php
$api = Rackbeat\Currency\API::make('fixerio'); // driver from supported drivers.
```

### Set base currency (default = USD)

```php
$api->setBase(Rackbeat\Currency\Symbol::USD);
```

### Set symbols to return (default = all/[])

```php
$api->setSymbols([ Rackbeat\Currency\Symbol::DKK, Rackbeat\Currency\Symbol::EUR, Rackbeat\Currency\Symbol::USD ]);
```

*Please note, you are not required to use `Rackbeat\Currency\Symbol` to specify symbols. It's simply a convenience helper.*

### Get latest rates

```php
$api->get(); // Get latest rates for selected symbols, using set base currency
$api->get('DKK');  // Get latest rates for selected symbols, using DKK as base currency
```

### Convert amount from one currency to another

```php
$api->convert($fromCurrency = 'DKK', $toCurrency = 'EUR', 10.00); // Convert 10 DKK to EUR
```

### Get rate on specific date

```php
$api->historical($date = '2018-01-01'); // Get currency rate for base on 1st of January 2018
$api->historical($date = '2018-01-01', 'GBP'); // Get currency rate for GBP on 1st of January 2018
```

## Laravel

... todo

## Requirements
* PHP >= 7.1
