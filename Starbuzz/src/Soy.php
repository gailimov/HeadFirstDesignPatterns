<?php

declare(strict_types = 1);

namespace HeadFirstDesignPatterns\Starbuzz;

class Soy extends AbstractCondimentDecorator
{
    public function __construct(AbstractBeverage $beverage)
    {
        $this->description = 'Soy';
        $this->cost = .15;

        parent::__construct($beverage);
    }
}
