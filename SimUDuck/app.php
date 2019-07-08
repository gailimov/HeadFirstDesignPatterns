<?php

use HeadFirstDesignPatterns\SimUDuck\{MallardDuck, ModelDuck, FlyRocketPowered};

require_once __DIR__ . '/../vendor/autoload.php';

$mallard = new MallardDuck();
$mallard->performQuack();
$mallard->performFly();

$model = new ModelDuck();
$model->performFly();
$model->setFlyBehavior(new FlyRocketPowered());
$model->performFly();
