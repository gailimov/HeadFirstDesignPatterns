<?php

declare(strict_types = 1);

namespace Starbuzz;

class Whip extends AbstractCondimentDecorator
{
    public function __construct(AbstractBeverage $beverage)
    {
        $this->description = 'Whip';
        $this->cost = .10;

        parent::__construct($beverage);
    }
}
