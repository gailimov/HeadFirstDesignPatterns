<?php

namespace SimUDuck;

class MallardDuck extends AbstractDuck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display(): void
    {
        echo 'I\'m real Mallard duck' . PHP_EOL;
    }
}
