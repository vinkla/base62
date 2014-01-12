Base62 Algorithm
================

Convert integers to [base62](http://en.wikipedia.org/wiki/62) strings and back.

**Usage**
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
