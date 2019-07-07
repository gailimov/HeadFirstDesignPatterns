<?php

declare(strict_types = 1);

namespace Starbuzz;

abstract class AbstractBeverage
{
    /**
     * @var string
     */
    protected $description = 'Unknown Beverage';

    public function getDescription(): string
    {
        return $this->description;
    }

    abstract public function cost(): float;
}
