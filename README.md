# Output dates in a specific timezone while still maintaining UTC in the database

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
protected $casts = [
    'created_at' => NetworkRailBusinessSystems\LaravelDateTimezone\Casts\DateTimezone::class;
]
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
