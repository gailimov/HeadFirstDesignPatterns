<?php

declare(strict_types = 1);

namespace HeadFirstDesignPatterns\Starbuzz;

abstract class AbstractBeverage
{
    /**
     * @var string
     */
    protected $description;

    /**
     * @var float
     */
    protected $cost;

    public function __construct()
    {
        $this->ensureBeverageIsValid($this->description, 'Each beverage must have a description');
        $this->ensureBeverageIsValid(!is_null($this->cost), 'Each beverage must have a cost');
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getCost(): float
    {
        return $this->cost;
    }

    private function ensureBeverageIsValid($expression, string $message): void
    {
        if (!$expression) {
            throw new \Error($message);
        }
    }
}
