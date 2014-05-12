Base62 Algorithm [![Build Status](https://travis-ci.org/vinkla/base62.png?branch=master)](https://travis-ci.org/vinkla/base62)
================

Base62 Algorithm Composer package. Convert integers to [base62](http://en.wikipedia.org/wiki/62) strings and back.


Installation
------------
This is class is in the [Packagist repository](https://packagist.org/packages/vinkla/base62) and can be installed like any other [Composer](https://getcomposer.org/) package.

```json
{
	"require": {
		"vinkla/base62": "~1.0"
	}
}
```

If using [Laravel](http://laravel.com) (not required), add the service provider to ```app/config/app.php``` in the providers array.

```php
	'Vinkla\Base62\Base62ServiceProvider'
```
