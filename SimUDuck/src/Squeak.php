<?php

namespace HeadFirstDesignPatterns\SimUDuck;

class Squeak implements QuackBehaviorInterface
{
    public function quack(): void
    {
        echo 'Squeak' . PHP_EOL;
    }
}
