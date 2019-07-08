<?php

namespace HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient;

use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Dough\DoughInterface;
use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Sauce\SauceInterface;
use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Cheese\CheeseInterface;
use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Pepperoni\PepperoniInterface;
use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Clams\ClamsInterface;

interface PizzaIngridientFactoryInterface
{
    public function createDough(): DoughInterface;

    public function createSauce(): SauceInterface;

    public function createCheese(): CheeseInterface;

    public function createVeggies(): array;

    public function createPepperoni(): PepperoniInterface;

    public function createClam(): ClamsInterface;
}
