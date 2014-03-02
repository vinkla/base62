Base62 Algorithm
================

Base62 Algorithm Composer package. Convert integers to [base62](http://en.wikipedia.org/wiki/62) strings and back.

[![Build Status](https://travis-ci.org/vinkla/base62.png?branch=master)](https://travis-ci.org/vinkla/base62)
[![Latest Stable Version](https://poser.pugx.org/vinkla/base62/v/stable.png)](https://packagist.org/packages/vinkla/base62)
[![Total Downloads](https://poser.pugx.org/vinkla/base62/downloads.png)](https://packagist.org/packages/vinkla/base62)
[![License](https://poser.pugx.org/vinkla/base62/license.png)](https://packagist.org/packages/vinkla/base62)

Installation
------------
This is class is in the [Packagist repository](https://packagist.org/packages/vinkla/base62) and can be installed like any other [Composer](https://getcomposer.org/) package.

```json
{
	"require": {
		"vinkla/base62": "1.0.*@dev"
	}
}
```

Using laravel?
--------------
If you're using [Laravel](http://laravel.com) and want to use a more Laravel-like syntax you have to add the class to Laravel providers array located within ```app/config/app.php```.

```php
'providers' => array(
	...
	'Vinkla\Base62\Base62ServiceProvider',
)
```
