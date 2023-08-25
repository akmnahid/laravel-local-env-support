# Laravel EnvLocal Support

![License](https://img.shields.io/github/license/akmnahid/laravel-env-local-support)
[![Total Downloads](https://poser.pugx.org/akmnahid/laravel-env-local-support/downloads)](https://packagist.org/packages/akmnahid/laravel-env-local-support)

The `laravel-env-local-support` package allows Laravel developers to seamlessly integrate environment-specific `.env.local` configurations, enhancing adaptability across different development stages.

## Installation

Via Composer:

```bash
composer require akmnahid/laravel-env-local-support
```

After installation, Laravel's package discovery will automatically register its service provider. If for any reason you need to manually register the provider, add it to the providers array in `config/app.php`:

```php
Akmnahid\LaravelEnvLocalSupport\LaravelEnvLocalSupportServiceProvider::class,

```

## Usage
Once installed, if an .env.local file is present in your Laravel project's root directory, this package ensures that it is loaded over the default .env file for non-production environments.

This allows developers to keep environment-specific configurations separate, ensuring cleaner and more manageable configuration management.

## License
The MIT License (MIT). Please see License File for more information