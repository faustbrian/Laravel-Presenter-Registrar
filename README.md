# Laravel Presenter Registrar

[![Build Status](https://img.shields.io/travis/faustbrian/Laravel-Presenter-Registrar/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Laravel-Presenter-Registrar)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/laravel-presenter-registrar.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Laravel-Presenter-Registrar.svg?style=flat-square)](https://github.com/faustbrian/Laravel-Presenter-Registrar/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Laravel-Presenter-Registrar.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Laravel-Presenter-Registrar)

## The Problem

A lot of times nowadays we are working with dozens of third-party packages and not all of those offer an easy way of replacing models used by them. This means it can become quite a task to extend or replace those if you would like to use something like a Presenter on these. This package tries to solve this issue by registering presenters like Laravel does with Policies to allow binding any Presenter to any model so you don't need to replace third-party models.

## Installation

### Requirements

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/laravel-presenter-registrar
```

## Usage

#### Register presenters via PresenterServiceProvider

```php
<?php

namespace App\Providers;

use BrianFaust\PresenterRegistrar\PresenterRegistrarServiceProvider as ServiceProvider;

class PresenterServiceProvider extends ServiceProvider
{
    protected $presenters = [
        'App\User' => 'App\Presenters\UserPresenter',
        'ThirdParty\Models\Model' => 'App\Presenters\ThirdPartyPresenter',
    ];
}
```

#### Create the previously registered presenter
```php
<?php

namespace App\Presenters;

use BrianFaust\PresenterRegistrar\Presenter;

class UserPresenter extends Presenter
{
    public function fullName()
    {
        return "{$this->model->firstName} {$this->model->lastName}";
    }
}
```

#### Use presenter from anywhere **(usually inside a view)**

``` php
{{ present($user)->fullName }}
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
