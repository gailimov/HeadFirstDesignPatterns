<?php

namespace PizzaStore\Pizza\Ingridient;

use PizzaStore\Pizza\Ingridient\Dough\{DoughInterface, ThickCrustDough};
use PizzaStore\Pizza\Ingridient\Sauce\{SauceInterface, PlumTomatoSauce};
use PizzaStore\Pizza\Ingridient\Cheese\{CheeseInterface, Mozzarella};
use PizzaStore\Pizza\Ingridient\Pepperoni\{PepperoniInterface, SlicedPepperoni};
use PizzaStore\Pizza\Ingridient\Clams\{ClamsInterface, FrozenClams};
use PizzaStore\Pizza\Ingridient\Veggies\{BlackOlives, Spinach, EggPlant};

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
