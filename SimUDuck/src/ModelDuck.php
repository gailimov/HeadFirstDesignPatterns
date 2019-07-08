<?php

namespace HeadFirstDesignPatterns\SimUDuck;

class ModelDuck extends AbstractDuck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    public function display(): void
    {
        echo 'I\'m a model duck' . PHP_EOL;
    }
}
