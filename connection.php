<?php

require_once __DIR__ . "/vendor/autoload.php";
$collection = (new MongoDB\Client)->dblabiteh->rent;
$collection_cars = (new MongoDB\Client)->dblabiteh->cars;

?>