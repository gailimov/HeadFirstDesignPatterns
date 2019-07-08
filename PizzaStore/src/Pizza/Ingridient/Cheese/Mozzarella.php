<?php

namespace HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Cheese;

class Mozzarella implements CheeseInterface
{
    public function __toString(): string
    {
        return 'Mozzarella';
    }
}
