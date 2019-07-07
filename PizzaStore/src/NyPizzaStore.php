<?php

namespace PizzaStore;

class NyPizzaStore extends AbstractPizzaStore
{
    public function createPizza(string $type): AbstractPizza
    {
        switch ($type) {
            case 'cheese':
                $pizza = new NyStyleCheesePizza();
                break;

            case 'pepperoni':
                $pizza = new NyStylePepperoniPizza();
                break;

            case 'clam':
                $pizza = new NyStyleClamPizza();
                break;

            case 'veggie':
                $pizza = new NyStyleVeggiePizza();
                break;

            default:
                throw new \Exception('Our menu don\'t have this kind of pizza');
        }

        return $pizza;
    }
}
