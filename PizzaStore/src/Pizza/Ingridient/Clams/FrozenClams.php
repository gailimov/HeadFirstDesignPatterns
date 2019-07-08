<?php

namespace PizzaStore\Pizza\Ingridient\Clams;

class FrozenClams implements ClamsInterface
{
    public function __toString(): string
    {
        return 'Frozen';
    }
}
