# pAPI SDK

![main workflow](https://github.com/emergingtravel/papi-sdk-python/workflows/Main/badge.svg)
![license](https://img.shields.io/github/license/emergingtravel/papi-sdk-python.svg)
![downloads/month](https://img.shields.io/packagist/dm/emerging-travel/papi-sdk)
![php version](https://img.shields.io/packagist/php-v/emerging-travel/papi-sdk)

pAPI SDK is a PHP SDK for [ETG APIv3](https://docs.emergingtravel.com/).
The abbreviation "pAPI" stands for "Partner API". 
To know more about the benefits of our API integration or to sign up please check our [website](https://www.ratehawk.com/lp/en/API).

## Requirements

- PHP 7.2+

The package depends on the following:

- [guzzlehttp/guzzle](https://github.com/guzzle/guzzle)
- [netresearch/jsonmapper](https://github.com/cweiske/jsonmapper)

## Installation

```
composer install emerging-travel/papi-sdk-php
```

## Quickstart

To start using ETG APIv3 you need a key, which you received after registration. 
A key is a combination of an `id` and `uuid`. These are passed into each request as a Basic Auth header after initialization.
`APIv3` supports all arguments provided by [guzzle](https://github.com/guzzle/guzzle).

```php
require 'vendor/autoload.php';
use PAPI\APIv3\Client;

$client = new Client('1000:022a2cf1-d279-02f3-9c3c-596aa09b827b');
```

Then you can use all available methods. Say you want to check an overview of the available methods (which is `api/b2b/v3/overview` endpoint), you do:

```php
$overview = $client->overview()
```

Note: if you don't provide your headers and specifically your `User-Agent` in requests options then it will be automatically added, ex. `papi_sdk/v1.0.0 GuzzleHttp/7 (php/7.4.20)`
