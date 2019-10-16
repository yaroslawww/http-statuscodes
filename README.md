# Http status codes library

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