<p align="center">
    <img src="https://raw.githubusercontent.com/nunomaduro/laravel-any/master/docs/example.png" alt="Any example" height="300">
</p>

<p align="center">
  <a href="https://travis-ci.org/nunomaduro/laravel-any"><img src="https://img.shields.io/travis/nunomaduro/laravel-any/master.svg" alt="Build Status"></img></a>
  <a href="https://packagist.org/packages/nunomaduro/laravel-any"><img src="https://poser.pugx.org/nunomaduro/laravel-any/d/total.svg" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/nunomaduro/laravel-any"><img src="https://poser.pugx.org/nunomaduro/laravel-any/v/stable.svg" alt="Latest Version"></a>
  <a href="https://packagist.org/packages/nunomaduro/laravel-any"><img src="https://poser.pugx.org/nunomaduro/laravel-any/license.svg" alt="License"></a>
</p>

## About laravel-any

laravel-any was created by, and is maintained by [Nuno Maduro](https://github.com/nunomaduro), and is an Laravel collection macro that determine if any item from the collection passes the given truth test.

## Installation & Usage

> **Requires [PHP 7.2+](https://php.net/releases/)**

Create your package using [Composer](https://getcomposer.org):

```bash
composer require nunomaduro/laravel-any
```

How to use:

```php
$users = User::all();

// Returns `true` if the collection is not empty.
$users->any();

// Returns `true` if there is a user with a paid plan.
$users->any(fn ($user) => $user->has_paid_plan);

// Returns `true` if there is a user with a paid plan.
$users->any->has_paid_plan;
```

## Contributing

Thank you for considering to contribute to laravel-any. All the contribution guidelines are mentioned [here](CONTRIBUTING.md).

You can have a look at the [CHANGELOG](CHANGELOG.md) for constant updates & detailed information about the changes. You can also follow the twitter account for latest announcements or just come say hi!: [@enunomaduro](https://twitter.com/enunomaduro)

## Support the development
**Do you like this project? Support it by donating**

- PayPal: [Donate](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=66BYDWAT92N6L)
- Patreon: [Donate](https://www.patreon.com/nunomaduro)

## License

laravel-any is an open-sourced software licensed under the [MIT license](LICENSE.md).
