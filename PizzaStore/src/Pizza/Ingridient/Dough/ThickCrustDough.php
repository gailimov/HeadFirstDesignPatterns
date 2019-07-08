<?php

namespace PizzaStore\Pizza\Ingridient\Dough;

class ThickCrustDough implements DoughInterface
{
    public function __toString(): string
    {
        return 'Thick Crust';
    }
}
