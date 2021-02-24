# Laravel Package for tracking Google laravel-google-api

[![Latest Version on Packagist](https://img.shields.io/packagist/v/tipoff/laravel-google-api.svg?style=flat-square)](https://packagist.org/packages/tipoff/laravel-google-api)
![Tests](https://github.com/tipoff/laravel-google-api/workflows/Tests/badge.svg)
[![Total Downloads](https://img.shields.io/packagist/dt/tipoff/laravel-google-api.svg?style=flat-square)](https://packagist.org/packages/tipoff/laravel-google-api)

This is where your description should go.

## Installation

You can install the package via composer:

```bash
composer require tipoff/laravel-google-api
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Tipoff\GoogleApi\GoogleApiServiceProvider" --tag="laravel-google-api-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Tipoff\GoogleApi\GoogleApiServiceProvider" --tag="laravel-google-api-config"
```

Add the following variables to your `.env` file and set them based on the contents of the
`client_secret.json` file you obtained from Google.
```
GOOGLE_MYBUSINESS_CLIENT_ID
GOOGLE_MYBUSINESS_PROJECT_ID
GOOGLE_MYBUSINESS_CLIENT_SECRET
GOOGLE_MYBUSINESS_REDIRECT_URIS
GOOGLE_MYBUSINESS_JAVASCRIPT_ORIGINS
```

## Models

We include the following model in this package:

**List of Models**

- Key

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Tipoff](https://github.com/tipoff)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
