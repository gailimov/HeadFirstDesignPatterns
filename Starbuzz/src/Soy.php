<?php

declare(strict_types = 1);

namespace Starbuzz;

class Soy extends AbstractCondimentDecorator
{
    public function __construct(AbstractBeverage $beverage)
    {
        parent::__construct($beverage);

        $this->description = $this->beverage->getDescription() . ', Soy';
    }

    public function cost(): float
    {
        return .15 + $this->beverage->cost();
    }
}
