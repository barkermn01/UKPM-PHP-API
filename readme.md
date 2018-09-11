# UKPM PHP Connector
A simple and easy to use class to aid in the validation and testing of a JSON-schema.
## How to Install
```
composer require "ukpm/UKPM-PHP-API"
```
## How to use
```php
require "../vendor/autoload.php";

use UKPM\Connector;
use UKPM\Client;

$publicKey = "";
$secretKey = "";

$connector = new Connector(new Client($publicKey, $secretKey), true);
```

# Documentation
To see the documentation you can open the docs/index.html then use the selector at the bottom of the left hand navigation to set it to php.

# License
Licensed under a propriatory lisence this library will only work with people provided with a set of keys
