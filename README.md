# Tinypng Laravel Package

tinypng-laravel is a Laravel package that provides an easy and seamless way to integrate the TinyPNG API into your Laravel application. This package allows you to compress, optimize, and resize images programmatically, ensuring faster load times and reduced storage usage.


## Installation

You can install the package via composer:

```bash
composer require digitalcorehub/tinypng-laravel
```


You can publish the config file with:

```bash
php artisan vendor:publish // select TinypngLaravelServiceProvider
```

This is the contents of the published config file:

```php
return [
      'api_key' => env('TINYPNG_API_KEY'),
];
```


## Usage

```php
use DigitalCoreHub\TinypngLaravel\Facades\TinypngLaravel;

TinypngLaravel::compressFromUrl("https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png", $outputPath);

TinypngLaravel::compressFromFile($inputPath, $outputPath);

TinypngLaravel::compressFromBuffer("base64", $outputPath);

TinypngLaravel::resize($inputPath, $outputPath, $options);
```

## API Reference

Please see [API Reference](https://tinypng.com/developers/reference) for details.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.


## Credits

- [DigitalCoreHub](https://github.com/DigitalCoreHub)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
