<?php

use PizzaStore\PizzaStore;
use PizzaStore\SimplePizzaFactory;

require_once __DIR__ . '/vendor/autoload.php';

$pizzaStore = new PizzaStore(new SimplePizzaFactory());
$pepperoni = $pizzaStore->orderPizza('pepperoni');
echo "\n";
$cheese = $pizzaStore->orderPizza('cheese');
