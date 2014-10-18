Base62 Algorithm
================
[![Build Status](https://img.shields.io/travis/vinkla/base62/master.svg?style=flat)](https://travis-ci.org/vinkla/base62)
[![Latest Stable Version](http://img.shields.io/packagist/v/vinkla/base62.svg?style=flat)](https://packagist.org/packages/vinkla/base62)
[![License](https://img.shields.io/packagist/l/vinkla/base62.svg?style=flat)](https://packagist.org/packages/vinkla/base62)

Base62 Algorithm package, convert integers to [base62](http://en.wikipedia.org/wiki/62) strings and back. Works well with [Laravel](https://github.com/laravel/laravel).


Installation
------------
Require this package in your `composer.json` and update composer.

```json
{
	"require": {
		"vinkla/base62": "~1.1"
	}
}
```

If using [Laravel](http://laravel.com) (not required), add the service provider to ```config/app.php``` in the providers array.

```php
'Vinkla\Base62\Base62ServiceProvider'
```

If you want you can use the facade for shorter code. Add the class to your aliases array.
```php
'Vinkla\Base62\Facades\Base62'
```

To add the configuration file to your `app/config/packages` directory, run the command below.
```bash
php artisan publish:config vinkla/base62
```

Usage
-----
Here's an example.
```php
$base = new Base62('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'); 

// Encode
$base->encode(4815162342); // Returns '5fRVGK'

// Decode
$base->decode('5fRVGK'); // Returns '4815162342'
```

## License

The Base62 package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
