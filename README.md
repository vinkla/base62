Base62 Algorithm Composer package
=================================

Convert integers to [base62](http://en.wikipedia.org/wiki/62) strings and back.

Installation
--------------
This is class is in the [Packagist repository](https://packagist.org/packages/vinkla/base62) and can be installed like any other [Composer](https://getcomposer.org/) package.

```json
{
	"require": {
		"vinkla/base62": "dev-master"
	}
}
```

Usage
--------------
```php
<?php

require('vendor/autoload.php');

/**
 * Convert from base 10 to another base.
 */
Base62::encode(4815162342); // 5fRVGK

/**
 * Convert a from a given base to base 10.
 */
Base62::decode('5fRVGK'); // 4815162342
```
