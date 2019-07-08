<?php

namespace HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Cheese;

class ReggianoCheese implements CheeseInterface
{
    public function __toString(): string
    {
        return 'Reggiano';
    }
}
