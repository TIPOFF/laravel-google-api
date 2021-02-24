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

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Tipoff\GoogleApi\GoogleApiServiceProvider" --tag="google-api-config"
```

Add the following variables to your `.env` file and set them based on the contents of the
`client_secret.json` file you obtained from Google.
```
GOOGLE_MYBUSINESS_CLIENT_ID=
GOOGLE_MYBUSINESS_PROJECT_ID=
GOOGLE_MYBUSINESS_CLIENT_SECRET=
GOOGLE_MYBUSINESS_REDIRECT_URIS=
GOOGLE_MYBUSINESS_JAVASCRIPT_ORIGINS=
```

You can use the `|` character to separate multiple strings in the `GOOGLE_MYBUSINESS_REDIRECT_URIS` and `GOOGLE_MYBUSINESS_JAVASCRIPT_ORIGINS` settings.

Obtain an API access token for Google My Business and insert it into the `keys` table, giving it an identifying slug for the next step. (Make sure that the `value` field contains your token formatted as valid JSON.)

Set the value of `ACCESS_TOKEN_SLUG` in your `.env` file to the name of the slug in your `keys` table entry.

## Usage

```
// Instantiate the Google My Business Client.
$gmbClient = app()->make(\Google_Service_MyBusiness::class);

// Use the client to act on the API.
$gmblocations = $gmbClient->accounts_locations
    ->get('accounts/{account-id}/locations')
    ->toSimpleObject()
    ->locations;
```

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
