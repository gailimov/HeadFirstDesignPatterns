<?php

declare(strict_types = 1);

namespace Starbuzz;

class Espresso extends AbstractBeverage
{
    public function __construct()
    {
        $this->description = 'Espresso';
    }

    public function cost(): float
    {
        return 1.99;
    }
}
