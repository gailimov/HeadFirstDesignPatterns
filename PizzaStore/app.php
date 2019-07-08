<?php

use PizzaStore\{NyPizzaStore, ChicagoPizzaStore};

require_once __DIR__ . '/vendor/autoload.php';

$nyStore = new NyPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$nyPizza = $nyStore->orderPizza('clam');
echo 'Ethan ordered a ' . $nyPizza . PHP_EOL;

echo PHP_EOL;

$chicagoPizza = $chicagoStore->orderPizza('clam');
echo 'Joel ordered a ' . $chicagoPizza . PHP_EOL;
