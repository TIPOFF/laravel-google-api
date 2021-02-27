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
GOOGLE_CLIENT_ID=
GOOGLE_PROJECT_ID=
GOOGLE_CLIENT_SECRET=
GOOGLE_REDIRECT_URIS=
GOOGLE_JAVASCRIPT_ORIGINS=
```

You can use the `|` character to separate multiple strings in the `GOOGLE_REDIRECT_URIS` and `GOOGLE_JAVASCRIPT_ORIGINS` settings.

Obtain an API access token from Google and insert it into the `keys` table, giving it an identifying slug for the next step. (Make sure that the `value` field contains your token formatted as valid JSON.)

Set the value of `GOOGLE_ACCESS_TOKEN_SLUG` in your `.env` file to the name of the slug in your `keys` table entry.

**Note:** If you need to customize the client secret fields or access token value on a service-by-service basis, you may do so by setting values in your `.env` file for the service-specific values found in `config/google-api.php`. (For example, `YOUTUBE_CLIENT_ID`.)

If you do not set service-specific values, it will default to the options set above for each service.

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
