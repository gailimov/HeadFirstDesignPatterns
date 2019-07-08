<?php

namespace HeadFirstDesignPatterns\PizzaStore;

use HeadFirstDesignPatterns\PizzaStore\Pizza\{AbstractPizza, CheesePizza, ClamPizza};
use HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\NyPizzaIngridientFactory;

class NyPizzaStore extends AbstractPizzaStore
{
    public function createPizza(string $type): AbstractPizza
    {
        $ingridientFactory = new NyPizzaIngridientFactory();

        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza($ingridientFactory);
                $pizza->setName('New York Style Cheese Pizza');
                break;

            case 'clam':
                $pizza = new ClamPizza($ingridientFactory);
                $pizza->setName('New York Style Clam Pizza');
                break;

            default:
                throw new \Exception(sprintf("Our menu doesn't have %s pizza", $type));
        }

        return $pizza;
    }
}
