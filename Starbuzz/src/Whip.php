<?php

declare(strict_types = 1);

namespace Starbuzz;

class Whip extends AbstractCondimentDecorator
{
    public function __construct(AbstractBeverage $beverage)
    {
        parent::__construct($beverage);

        $this->description = 'Whip';
    }

    public function cost(): float
    {
        return .10 + $this->beverage->cost();
    }
}
