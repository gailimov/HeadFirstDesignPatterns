<?php

namespace SimUDuck;

class FlyRocketPowered implements FlyBehaviorInterface
{
    public function fly(): void
    {
        echo 'I\'m flying with a rocket' . PHP_EOL;
    }
}
