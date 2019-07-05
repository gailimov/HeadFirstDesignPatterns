<?php

namespace SimUDuck;

class FlyWithWings implements FlyBehaviorInterface
{
    public function fly(): void
    {
        echo 'I\'m flying' . PHP_EOL;
    }
}
