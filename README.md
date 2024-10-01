# Laravel EnvLocal Support

![License](https://img.shields.io/github/license/akmnahid/laravel-local-env-support)
[![Total Downloads](https://poser.pugx.org/akmnahid/laravel-local-env-support/downloads)](https://packagist.org/packages/akmnahid/laravel-local-env-support)


A Laravel package to add support for `.env.local` files, allowing you to override environment variables defined in the main `.env` file without modifying it. This is particularly useful for local development and testing environments.



## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Features](#features)
- [Requirements](#requirements)
- [License](#license)

---

## Installation

You can install this package via Composer:

```bash
composer require akmnahid/laravel-local-env-support
```

If the package is not yet available on Packagist, you can include it via a VCS repository in your `composer.json`:

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/akmnahid/laravel-local-env-support"
        }
    ],
    "require": {
        "akmnahid/laravel-local-env-support": "dev-main"
    }
}
```

Then run:

```bash
composer update
```

---

## Usage

1. **Create a `.env.local` file** in the root directory of your Laravel project.

2. **Add environment variables** to `.env.local` that you wish to override from the main `.env` file.

   **Example `.env.local`:**

   ```dotenv
   APP_DEBUG=true
   DB_HOST=localhost
   ```

3. **Ensure `.env.local` is added to your `.gitignore`** file to prevent it from being committed to version control.

4. **Clear the configuration cache** if you have previously cached your configurations:

   ```bash
   php artisan config:clear
   ```

5. **Run your application** as usual. Variables defined in `.env.local` will override those in `.env`.

---

## Features

- **Override Environment Variables**: Variables in `.env.local` will override those defined in `.env`.

- **Easy to Use**: Simply install the package and create a `.env.local` file.

- **Auto-Discovery**: The package uses Laravel's auto-discovery feature, so no additional setup is required.

---

## Requirements

- **PHP**: >=7.3
- **Laravel**: >=8.0
- **Dependencies**:
    - `vlucas/phpdotenv`: >=5.5



## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

# Additional Notes

- **Environment File Order**: The variables in `.env.local` will override those in `.env`. This allows you to keep default settings in `.env` and customize only the necessary variables in `.env.local`.

- **Version Control**: It's recommended to add `.env.local` to your `.gitignore` file to prevent sensitive data from being committed to your repository.

- **Configuration Caching**: If you cache your configurations using `php artisan config:cache`, remember to clear the cache whenever you make changes to your environment files.

  ```bash
  php artisan config:clear
  ```

- **Auto-Discovery**: This package supports Laravel's package auto-discovery, so you don't need to manually add the service provider to your `config/app.php` file.
- **To Add Manually**: Add following to your config/app.php file:
```php
'providers' => [
    // Other Service Providers

    \LaravelEnvLocal\EnvLocalServiceProvider::class, // Add this line
],

```
---

# Troubleshooting

- **Variables Not Overriding**: If the variables from `.env.local` are not overriding those from `.env`, ensure that:

    - The `.env.local` file is located in the root directory of your Laravel project.
    - You have cleared the configuration cache using `php artisan config:clear`.
    - There are no syntax errors in your `.env.local` file.

- **Cache Issues**: Remember that environment variables are cached when you run `php artisan config:cache`. Always clear the cache after making changes to your environment files.

---

# Credits

- **Author**: [Your Name or Organization]
- **GitHub**: [https://github.com/akmnahid/laravel-local-env-support](https://github.com/akmnahid/laravel-local-env-support)

---

# Support

If you encounter any issues or have questions, feel free to open an issue on GitHub .

---

# Versioning

This project adheres to [Semantic Versioning](https://semver.org/). For the versions available, see the [tags on this repository](https://github.com/akmnahid/laravel-local-env-support/tags).

---

# Changelog

All notable changes to this project will be documented in this section.

- **v1.0.1**: Initial release with support for loading `.env.local` files.

---




Feel free to customize and extend this package to suit your specific needs. Contributions and suggestions are welcome!
