# Import Wordpress to Laravel

This library provides CLI commands to import Wordpress contents from a Wordpress eXtended RSS (WXR) export file.

## Installation

Add package to your composer.json

```json
{
    "require": {
        "bendechrai/wordpress-import": "~1.0.0"
    }
}
```

And update your vendors

```
$ php composer.phar update bendechrai/wordpress-import
```

## Usage

At it's most basic, you can list the full usage information by issuing:

```
$ php artisan wpimport
```

## Contributors

At the moment, this is a personal project to help me import from Wordpress to Laravel 5.5. I would love community contributions to expand the functionality, and also to test across different versions of PHP and Laravel, and even other frameworks.
