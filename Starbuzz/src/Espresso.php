<?php

declare(strict_types = 1);

namespace HeadFirstDesignPatterns\Starbuzz;

class Espresso extends AbstractBeverage
{
    public function __construct()
    {
        $this->description = 'Espresso';
        $this->cost = 1.99;

        parent::__construct();
    }
}
