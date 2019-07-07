<?php

namespace Starbuzz;

abstract class AbstractCondimentDecorator extends AbstractBeverage
{
    /**
     * @var AbstractBeverage
     */
    protected $beverage;

    public function __construct(AbstractBeverage $beverage)
    {
        $this->beverage = $beverage;
    }
}
