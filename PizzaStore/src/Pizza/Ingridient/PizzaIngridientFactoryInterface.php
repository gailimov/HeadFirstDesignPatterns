<?php

namespace PizzaStore\Pizza\Ingridient;

use PizzaStore\Pizza\Ingridient\Dough\DoughInterface;
use PizzaStore\Pizza\Ingridient\Sauce\SauceInterface;
use PizzaStore\Pizza\Ingridient\Cheese\CheeseInterface;
use PizzaStore\Pizza\Ingridient\Pepperoni\PepperoniInterface;
use PizzaStore\Pizza\Ingridient\Clams\ClamsInterface;

interface PizzaIngridientFactoryInterface
{
    public function createDough(): DoughInterface;

    public function createSauce(): SauceInterface;

    public function createCheese(): CheeseInterface;

    public function createVeggies(): array;

    public function createPepperoni(): PepperoniInterface;

    public function createClam(): ClamsInterface;
}
