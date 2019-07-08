<?php

namespace HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient;

use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Dough\{DoughInterface, ThickCrustDough};
use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Sauce\{SauceInterface, PlumTomatoSauce};
use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Cheese\{CheeseInterface, Mozzarella};
use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Pepperoni\{PepperoniInterface, SlicedPepperoni};
use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Clams\{ClamsInterface, FrozenClams};
use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Veggies\{BlackOlives, Spinach, EggPlant};

class ChicagoPizzaIngridientFactory implements PizzaIngridientFactoryInterface
{
    public function createDough(): DoughInterface
    {
        return new ThickCrustDough();
    }

    public function createSauce(): SauceInterface
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): CheeseInterface
    {
        return new Mozzarella();
    }

    public function createVeggies(): array
    {
        return [new BlackOlives(), new Spinach(), new EggPlant()];
    }

    public function createPepperoni(): PepperoniInterface
    {
        return new SlicedPepperoni();
    }

    public function createClam(): ClamsInterface
    {
        return new FrozenClams();
    }
}
