<?php

use PizzaStore\{NyPizzaStore, ChicagoPizzaStore};

require_once __DIR__ . '/vendor/autoload.php';

$nyStore = new NyPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$pizza = $nyStore->orderPizza('cheese');
echo 'Ethan ordered a ' . $pizza->getName() . PHP_EOL;

echo PHP_EOL;

$pizza = $chicagoStore->orderPizza('cheese');
echo 'Joel ordered a ' . $pizza->getName() . PHP_EOL;
