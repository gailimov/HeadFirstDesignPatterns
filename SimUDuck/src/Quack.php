<?php

namespace SimUDuck;

class Quack implements QuackBehaviorInterface
{
    public function quack(): void
    {
        echo 'Quack' . PHP_EOL;
    }
}
