<?php

namespace PizzaStore;

abstract class AbstractPizzaStore
{
    public function orderPizza(string $type): AbstractPizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    abstract public function createPizza(string $type): AbstractPizza;
}
