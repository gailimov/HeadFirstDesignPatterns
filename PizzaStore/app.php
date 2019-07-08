<?php

use HeadFirstDesignPatterns\PizzaStore\{NyPizzaStore, ChicagoPizzaStore};

require_once __DIR__ . '/../vendor/autoload.php';

$nyStore = new NyPizzaStore();
$chicagoStore = new ChicagoPizzaStore();

$nyPizza = $nyStore->orderPizza('cheese');
echo 'Ethan ordered a ' . $nyPizza . PHP_EOL . PHP_EOL;

$chicagoPizza = $chicagoStore->orderPizza('cheese');
echo 'Joel ordered a ' . $chicagoPizza . PHP_EOL . PHP_EOL;

$nyPizza = $nyStore->orderPizza('clam');
echo 'Martin ordered a ' . $nyPizza . PHP_EOL . PHP_EOL;

$chicagoPizza = $chicagoStore->orderPizza('clam');
echo 'Bob ordered a ' . $chicagoPizza . PHP_EOL;
