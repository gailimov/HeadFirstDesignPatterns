<?php

namespace PizzaStore;

class ChicagoPizzaStore extends AbstractPizzaStore
{
    public function createPizza(string $type): AbstractPizza
    {
        switch ($type) {
            case 'cheese':
                $pizza = new ChicagoStyleCheesePizza();
                break;

            case 'pepperoni':
                $pizza = new ChicagoStylePepperoniPizza();
                break;

            case 'clam':
                $pizza = new ChicagoStyleClamPizza();
                break;

            case 'veggie':
                $pizza = new ChicagoStyleVeggiePizza();
                break;

            default:
                throw new \Exception('Our menu don\'t have this kind of pizza');
        }

        return $pizza;
    }
}
