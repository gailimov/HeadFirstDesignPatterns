<?php

namespace SimUDuck;

class FlyNoWay implements FlyBehaviorInterface
{
    public function fly(): void
    {
        echo 'I can\'t fly' . PHP_EOL;
    }
}
