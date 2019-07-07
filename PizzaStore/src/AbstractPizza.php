<?php

namespace PizzaStore;

abstract class AbstractPizza
{
    public function prepare()
    {
        echo 'Preparing ' . static::class . PHP_EOL;
    }

    public function bake()
    {
        echo 'Baking ' . static::class . PHP_EOL;
    }

    public function cut()
    {
        echo 'Cutting ' . static::class . PHP_EOL;
    }

    public function box()
    {
        echo 'Boxing ' . static::class . PHP_EOL;
    }
}
