<?php

declare(strict_types = 1);

namespace Starbuzz;

class DarkRoast extends AbstractBeverage
{
    public function __construct()
    {
        $this->description = 'Dark Roast Coffee';
        $this->cost = .99;

        parent::__construct();
    }
}
