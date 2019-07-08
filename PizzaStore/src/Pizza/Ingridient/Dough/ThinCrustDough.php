<?php

namespace PizzaStore\Pizza\Ingridient\Dough;

class ThinCrustDough implements DoughInterface
{
    public function __toString(): string
    {
        return 'Thin Crust';
    }
}
