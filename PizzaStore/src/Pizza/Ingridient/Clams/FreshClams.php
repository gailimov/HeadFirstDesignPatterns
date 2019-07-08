<?php

namespace HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Clams;

class FreshClams implements ClamsInterface
{
    public function __toString(): string
    {
        return 'Fresh';
    }
}
