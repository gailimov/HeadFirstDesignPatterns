<?php

namespace PizzaStore;

class SimplePizzaFactory
{
    public function createPizza(string $type): AbstractPizza
    {
        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza();
                break;

            case 'pepperoni':
                $pizza = new PepperoniPizza();
                break;

            case 'clam':
                $pizza = new ClamPizza();
                break;

            case 'veggie':
                $pizza = new VeggiePizza();
                break;

            default:
                throw new \Exception('Our menu don\'t have this kind of pizza');
        }

        return $pizza;
    }
}
