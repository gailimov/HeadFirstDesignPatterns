<?php

namespace HeadFirstDesignPatterns\PizzaStore\Pizza;

class ClamPizza extends AbstractPizza
{
    public function prepare(): void
    {
        echo 'Preparing ' . $this->name . PHP_EOL;

        $this->dough = $this->ingridientFactory->createDough();
        $this->sauce = $this->ingridientFactory->createSauce();
        $this->cheese = $this->ingridientFactory->createCheese();
        $this->clam = $this->ingridientFactory->createClam();
        $this->veggies = $this->ingridientFactory->createVeggies();
    }
}
