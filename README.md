
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# A simple package that sets the output of dates to a specific timezone while still maintaining UTC in the database (Or whatever is set as your application's timezone)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/network-rail-business-systems/laravel-date-timezone.svg?style=flat-square)](https://packagist.org/packages/network-rail-business-systems/laravel-date-timezone)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/network-rail-business-systems/laravel-date-timezone/run-tests?label=tests)](https://github.com/network-rail-business-systems/laravel-date-timezone/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/network-rail-business-systems/laravel-date-timezone/Check%20&%20fix%20styling?label=code%20style)](https://github.com/network-rail-business-systems/laravel-date-timezone/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/network-rail-business-systems/laravel-date-timezone.svg?style=flat-square)](https://packagist.org/packages/network-rail-business-systems/laravel-date-timezone)

The package provides a custom cast class that can be applied to your model attributes and will output dates in your desired timezone while 
maintaining the application's globally set timezone when persisting to the database.

## Installation

You can install the package via composer:

```bash
composer require network-rail-business-systems/laravel-date-timezone
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="date-timezone-config"
```

This is the contents of the published config file:

```php
return [
    'output-timezone' => env('OUTPUT_TIMEZONE', config('app.timezone'))
];
```

## Usage

```php
$laravelDateTimezone = new NetworkRailBusinessSystems\LaravelDateTimezone();
echo $laravelDateTimezone->echoPhrase('Hello, NetworkRailBusinessSystems!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Christopher Abey](https://github.com/Network-Rail-Business-Systems)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
