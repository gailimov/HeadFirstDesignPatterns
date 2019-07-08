<?php

namespace HeadFirstDesignPatterns\PizzaStore\Pizza\Ingridient\Sauce;

class MarinaraSauce implements SauceInterface
{
    public function __toString(): string
    {
        return 'Marinara';
    }
}
