<?php

namespace HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient;

use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Dough\{DoughInterface, ThinCrustDough};
use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Sauce\{SauceInterface, MarinaraSauce};
use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Cheese\{CheeseInterface, ReggianoCheese};
use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Pepperoni\{PepperoniInterface, SlicedPepperoni};
use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Clams\{ClamsInterface, FreshClams};
use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Veggies\{Garlic, Onion, Mashroom, RedPepper};

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
