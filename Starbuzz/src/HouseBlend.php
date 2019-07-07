<?php

declare(strict_types = 1);

namespace Starbuzz;

class HouseBlend extends AbstractBeverage
{
    public function __construct()
    {
        $this->description = 'House Blend Coffee';
    }

    public function cost(): float
    {
        return .89;
    }
}
