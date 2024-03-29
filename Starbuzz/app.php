<?php

use HeadFirstDesignPatterns\Starbuzz\{Espresso, DarkRoast, HouseBlend, Mocha, Whip, Soy};

require_once __DIR__ . '/../vendor/autoload.php';

$beverage = new Espresso();
echo $beverage->getDescription() . ' $' . $beverage->getCost() . PHP_EOL;

$beverage2 = new DarkRoast();
$beverage2 = new Mocha($beverage2);
$beverage2 = new Mocha($beverage2);
$beverage2 = new Whip($beverage2);
echo $beverage2->getDescription() . ' $' . $beverage2->getCost() . PHP_EOL;

$beverage3 = new HouseBlend();
$beverage3 = new Soy($beverage3);
$beverage3 = new Mocha($beverage3);
$beverage3 = new Whip($beverage3);
echo $beverage3->getDescription() . ' $' . $beverage3->getCost() . PHP_EOL;
