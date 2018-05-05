<?php
require "../vendor/autoload.php";

use UKPM\Connector;
use UKPM\Client;

$publicKey = "";
$secretKey = "";

$connector = new Connector(new Client($publicKey, $secretKey), true);
$output = $connector->test->get();
print_r($output);

