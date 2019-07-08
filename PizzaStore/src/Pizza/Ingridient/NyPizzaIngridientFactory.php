<?php

namespace PizzaStore\Pizza\Ingridient;

use PizzaStore\Pizza\Ingridient\Dough\{DoughInterface, ThinCrustDough};
use PizzaStore\Pizza\Ingridient\Sauce\{SauceInterface, MarinaraSauce};
use PizzaStore\Pizza\Ingridient\Cheese\{CheeseInterface, ReggianoCheese};
use PizzaStore\Pizza\Ingridient\Pepperoni\{PepperoniInterface, SlicedPepperoni};
use PizzaStore\Pizza\Ingridient\Clams\{ClamsInterface, FreshClams};
use PizzaStore\Pizza\Ingridient\Veggies\{Garlic, Onion, Mashroom, RedPepper};

class NyPizzaIngridientFactory implements PizzaIngridientFactoryInterface
{
    public function createDough(): DoughInterface
    {
        return new ThinCrustDough();
    }

    public function createSauce(): SauceInterface
    {
        return new MarinaraSauce();
    }

    public function createCheese(): CheeseInterface
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        return [new Garlic(), new Onion(), new Mashroom(), new RedPepper()];
    }

    public function createPepperoni(): PepperoniInterface
    {
        return new SlicedPepperoni();
    }

    public function createClam(): ClamsInterface
    {
        return new FreshClams();
    }
}
