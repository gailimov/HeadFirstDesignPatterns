<?php

namespace PizzaStore\Pizza;

use PizzaStore\Pizza\Ingridient\PizzaIngridientFactoryInterface;
use PizzaStore\Pizza\Ingridient\Dough\DoughInterface;
use PizzaStore\Pizza\Ingridient\Sauce\SauceInterface;
use PizzaStore\Pizza\Ingridient\Cheese\CheeseInterface;
use PizzaStore\Pizza\Ingridient\Pepperoni\PepperoniInterface;
use PizzaStore\Pizza\Ingridient\Clams\ClamsInterface;

abstract class AbstractPizza
{
    /**
     * @var PizzaIngridientFactoryInterface
     */
    protected $ingridientFactory;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var DoughInterface
     */
    protected $dough;

    /**
     * @var SauceInterface
     */
    protected $sauce;

    /**
     * @var CheeseInterface
     */
    protected $cheese;

    /**
     * @var array
     */
    protected $veggies = [];

    /**
     * @var PepperoniInterface
     */
    protected $pepperoni;

    /**
     * @var ClamsInterface
     */
    protected $clam;

    public function __construct(PizzaIngridientFactoryInterface $ingridientFactory)
    {
        $this->ingridientFactory = $ingridientFactory;
    }

    abstract public function prepare(): void;

    public function bake(): void
    {
        echo 'Bake for 25 minutes at 350' . PHP_EOL;
    }

    public function cut(): void
    {
        echo 'Cutting the pizza into diagonal slices' . PHP_EOL;
    }

    public function box(): void
    {
        echo 'Place pizza in official PizzaStore box' . PHP_EOL;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function __toString(): string
    {
        $result = $this->name . PHP_EOL;

        if ($this->dough) {
            $result .= '- Dough: ' . $this->dough . PHP_EOL;
        }

        if ($this->sauce) {
            $result .= '- Sauce: ' . $this->sauce . PHP_EOL;
        }

        if ($this->cheese) {
            $result .= '- Cheese: ' . $this->cheese . PHP_EOL;
        }

        if ($this->pepperoni) {
            $result .= '- Pepperoni: ' . $this->pepperoni . PHP_EOL;
        }

        if ($this->clam) {
            $result .= '- Clam: ' . $this->clam . PHP_EOL;
        }

        if ($this->veggies) {
            $result .= '- Veggies: ' . implode(', ', $this->veggies);
        }

        return $result;
    }
}
