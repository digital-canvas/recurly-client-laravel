recurly-client-laravel
======================

Integrates the Recurly API with Laravel 4

A simple [Laravel 4](http://four.laravel.com/) service provider for including the [Recurly PHP Client](https://github.com/recurly/recurly-client-php).

## Installation

The Recurly Service Provider can be installed via [Composer](http://getcomposer.org) by requiring the
`digital-canvas/recurly-client-laravel` package in your project's `composer.json`.

```json
{
    "require": {
        "digital-canvas/recurly-client-laravel": "1.*"
    }
}
```

Run composer update to pull in the libraries.
```bash
composer update
```


## Configure

To use the Recurly Service Provider, you must register the provider when bootstrapping your Laravel application.

Add 'DigitalCanvas\Recurly\RecurlyServiceProvider' to the list of service providers in app/config/app.php
```php
'DigitalCanvas\Recurly\RecurlyServiceProvider',
```

Create a config file for the package
```bash
php artisan config:publish digital-canvas/recurly-client-laravel
```

Edit the config and set the subdomain and apiKey values to match the Recurly credentials.
If you plan to use recurly.js you must also set the privateKey value.

## Usage

You may use the the api classes following the documentation at http://docs.recurly.com/client-libraries/php
