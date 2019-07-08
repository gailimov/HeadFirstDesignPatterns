<?php

namespace PizzaStore;

use PizzaStore\Pizza\{AbstractPizza, CheesePizza, ClamPizza};
use PizzaStore\Pizza\Ingridient\ChicagoPizzaIngridientFactory;

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
