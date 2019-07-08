<?php

namespace HeadFirstDesignPatterns\Starbuzz;

abstract class AbstractCondimentDecorator extends AbstractBeverage
{
    /**
     * @var AbstractBeverage
     */
    protected $beverage;

    public function __construct(AbstractBeverage $beverage)
    {
        $this->beverage = $beverage;

        parent::__construct();
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', ' . $this->description;
    }

    public function getCost(): float
    {
        return $this->beverage->getCost() + $this->cost;
    }
}
