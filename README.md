Base62 Algorithm
================

Convert integers to [base62](http://en.wikipedia.org/wiki/62) strings and back.

[![Build Status](https://travis-ci.org/vinkla/base62.png?branch=master)](https://travis-ci.org/vinkla/base62)

Installation
------------
This is class is in the [Packagist repository](https://packagist.org/packages/vinkla/base62) and can be installed like any other [Composer](https://getcomposer.org/) package.

```json
{
	"require": {
		"vinkla/base62": "dev-master"
	}
}
```

Using laravel?
--------------
If you're using [Laravel](http://laravel.com) and want to use a more Laravel-like syntax you only have to follow these steps.

Open your ```app/config/app.php``` file and scroll down to your providers and add the following.

```php
'providers' => array(
	...
	'Vinkla\Base62\Base62ServiceProvider',
)
```
