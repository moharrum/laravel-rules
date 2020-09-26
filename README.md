## Table of Contents

-   [Introduction](#introduction)
-   [Installation](#installation)
-   [Available rules](#available-rules)
-   [Localization](#localization)
-   [License](#license)

## Introduction

> What is Laravel Rules?

A set of useful extra validation rules for the [Laravel](https://laravel.com) framework.

> Why Laravel Rules?

Rules included in this package written by me (or other contributers) where not a part of [Laravel](https://laravel.com) validation rules at the time they where written. They are a collection of rules that where needed by me or others at that time, please see [Laravel](https://laravel.com) docs first before using any of rules in this package.

## Installation

Install the package via composer:

```bash
composer require moharrum/laravel-rules
```

Edit `config/app.php`, add package service provider (ignore this step if you have package discovery enabled):

```php
'providers' => [
    Moharrum\LaravelRules\Providers\LaravelRulesServiceProvider::class,
]
```

Finally, publish the configuration file:

```php
php artisan vendor:publish --provider="Moharrum\LaravelRules\Providers\LaravelRulesServiceProvider"
```

## Available rules

-   **[alpha_num_space](docs/strings/ALPHA_NUM_SPACE.md)** - Determine whether or not the given string consists of a combination of letters, numbers, spaces.

## Localization

Publishing the language files:

```bash
php artisan vendor:publish --provider="Moharrum\LaravelRules\Providers\LaravelRulesServiceProvider"
```

Published files can be found at `/resources/lang/vendor/laravel-rules`.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.
