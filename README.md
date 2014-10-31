Base62 Algorithm
================

![image](https://raw.githubusercontent.com/vinkla/vinkla.github.io/master/images/base62-package.png)

Base62 Algorithm package, convert integers to [base62](http://en.wikipedia.org/wiki/62) strings and back. Works well with [Laravel](https://github.com/laravel/laravel).

```php
// The base string.
$string = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

// Setup the Base62 instance.
$base = new Base62($string);

// Encode an integer.
$base->encode(4815162342); // returns '5fRVGK'

// Decode a string.
$base->decode('5fRVGK'); // returns 4815162342
```

[![Build Status](https://img.shields.io/travis/vinkla/base62/master.svg?style=flat)](https://travis-ci.org/vinkla/base62)
[![Latest Stable Version](http://img.shields.io/packagist/v/vinkla/base62.svg?style=flat)](https://packagist.org/packages/vinkla/base62)
[![License](https://img.shields.io/packagist/l/vinkla/base62.svg?style=flat)](https://packagist.org/packages/vinkla/base62)

## Installation
Require this package in your `composer.json` and update composer.

```json
{
	"require": {
		"vinkla/base62": "~1.0"
	}
}
```

If using [Laravel](http://laravel.com) (not required), add the service provider to ```config/app.php``` in the providers array.

```php
'Vinkla\Base62\Base62ServiceProvider'
```

If you want you can use the facade. Add the reference in ```config/app.php``` to your aliases array.
```php
'Base62' => 'Vinkla\Base62\Facades\Base62'
```

To add the configuration file to your `app/config/packages` directory, run the command below.
```bash
php artisan publish:config vinkla/base62
```

## License

The Base62 package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
