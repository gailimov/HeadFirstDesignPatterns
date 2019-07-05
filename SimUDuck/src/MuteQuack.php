<?php

namespace SimUDuck;

class MuteQuack implements QuackBehaviorInterface
{
    public function quack(): void
    {
        echo '<< Silence >>' . PHP_EOL;
    }
}
