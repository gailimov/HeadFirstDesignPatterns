<?php

namespace PizzaStore\Pizza\Ingridient\Pepperoni;

class SlicedPepperoni implements PepperoniInterface
{
    public function __toString(): string
    {
        return 'Sliced';
    }
}
