<?php

namespace PizzaStore\Pizza\Ingridient\Sauce;

class PlumTomatoSauce implements SauceInterface
{
    public function __toString(): string
    {
        return 'Plum Tomato';
    }
}
