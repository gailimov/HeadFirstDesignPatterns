<?php

declare(strict_types = 1);

namespace Starbuzz;

class DarkRoast extends AbstractBeverage
{
    public function __construct()
    {
        $this->description = 'Dark Roast Coffee';
    }

    public function cost(): float
    {
        return .99;
    }
}
