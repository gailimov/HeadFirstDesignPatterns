<?php

namespace HeadFirstDesignPatterns\PizzaStore\Pizza;

class CheesePizza extends AbstractPizza
{
    public function prepare(): void
    {
        echo 'Preparing ' . $this->name . PHP_EOL;

        $this->dough = $this->ingridientFactory->createDough();
        $this->sauce = $this->ingridientFactory->createSauce();
        $this->cheese = $this->ingridientFactory->createCheese();
        $this->veggies = $this->ingridientFactory->createVeggies();
    }
}
