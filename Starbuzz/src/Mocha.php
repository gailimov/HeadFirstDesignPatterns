<?php

declare(strict_types = 1);

namespace HeadFirstDesignPatterns\Starbuzz;

class Mocha extends AbstractCondimentDecorator
{
    public function __construct(AbstractBeverage $beverage)
    {
        $this->description = 'Mocha';
        $this->cost = .20;

        parent::__construct($beverage);
    }
}
