<?php

namespace PizzaStore;

class PizzaStore
{
    /**
     * @var SimplePizzaFactory
     */
    private $factory;

    public function __construct(SimplePizzaFactory $factory)
    {
        $this->factory = $factory;
    }

    public function orderPizza(string $type): AbstractPizza
    {
        $pizza = $this->factory->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }
}
