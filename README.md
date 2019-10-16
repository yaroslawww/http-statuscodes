# Http status codes library

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://travis-ci.org/yaroslawww/http-statuscodes.svg?branch=master)](https://travis-ci.org/yaroslawww/http-statuscodes) 
[![StyleCI](https://github.styleci.io/repos/195302588/shield?branch=master&style=flat-square)](https://github.styleci.io/repos/215622139)
[![Quality Score](https://img.shields.io/scrutinizer/g/yaroslawww/http-statuscodes.svg?b=master)](https://scrutinizer-ci.com/g/yaroslawww/http-statuscodes/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/yaroslawww/http-statuscodes/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/yaroslawww/http-statuscodes/?branch=master)
[![PHP Version](https://img.shields.io/travis/php-v/yaroslawww/http-statuscodes.svg?style=flat-square)](https://packagist.org/packages/yaroslawww/http-statuscodes)
[![Packagist Version](https://img.shields.io/packagist/v/yaroslawww/http-statuscodes.svg)](https://packagist.org/packages/yaroslawww/http-statuscodes)
## Installation

You can install the package via composer:

```bash
    composer require yaroslawww/http-statuscodes
```
### Simple example

```php
    $manager = new \HttpStatusCodes\StatusCodeManager();
    $statusCode = $manager->makeStatusCode(201);
    if($statusCode) {
        $statusCode->getMessage();
        $statusCode->getCode();
        $statusCode->getDescription();
        $statusCode->getRFCNumber();
    }
```

```php
    $manager = new \HttpStatusCodes\StatusCodeManager();
    $statusCode = $manager->makeStatusCode('HTTP_OK');
    if($statusCode) {
        $statusCode->getMessage();
        $statusCode->getCode();
        $statusCode->getDescription();
        $statusCode->getRFCNumber();
    }
```

```php
    class CustomStatusCodes
    {
        /**
         * @rfc 1133
         * @description Test Description New Ok
         * @message OKAY!
         */
        const HTTP_OKAY = 3333;
    }
    $manager = new \HttpStatusCodes\StatusCodeManager();
    $statusCode = $manager->makeStatusCode(3333);
    if($statusCode) {
        $statusCode->getMessage();
        $statusCode->getCode();
        $statusCode->getDescription();
        $statusCode->getRFCNumber();
    }
```
## Testing

``` bash
    ./vendor/bin/phpunit
    # or
    composer test
```

## Security
If you discover any security related issues, please email yaroslav.georgitsa@gmail.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.