<?php

declare(strict_types = 1);

namespace Starbuzz;

class Mocha extends AbstractCondimentDecorator
{
    public function __construct(AbstractBeverage $beverage)
    {
        parent::__construct($beverage);

        $this->description = $this->beverage->getDescription() . ', Mocha';
    }

    public function cost(): float
    {
        return .20 + $this->beverage->cost();
    }
}
