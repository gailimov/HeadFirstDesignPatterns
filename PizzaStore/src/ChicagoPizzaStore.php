<?php

namespace HeadFirstDesignPatterns\PizzaStore;

use HeadFirstDesignPatterns\PizzaStore\Pizza\{AbstractPizza, CheesePizza, ClamPizza};
use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\ChicagoPizzaIngridientFactory;

class ChicagoPizzaStore extends AbstractPizzaStore
{
    public function createPizza(string $type): AbstractPizza
    {
        $ingridientFactory = new ChicagoPizzaIngridientFactory();

        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza($ingridientFactory);
                $pizza->setName('Chicago Style Cheese Pizza');
                break;

            case 'clam':
                $pizza = new ClamPizza($ingridientFactory);
                $pizza->setName('Chicago Style Clam Pizza');
                break;

            default:
                throw new \Exception(sprintf("Our menu doesn't have %s pizza", $type));
        }

        return $pizza;
    }
}
