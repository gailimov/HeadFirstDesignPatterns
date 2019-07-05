<?php

require_once __DIR__ . '/vendor/autoload.php';

use SimUDuck\MallardDuck;
use SimUDuck\ModelDuck;
use SimUDuck\FlyRocketPowered;

$mallard = new MallardDuck();
$mallard->performQuack();
$mallard->performFly();

$model = new ModelDuck();
$model->performFly();
$model->setFlyBehavior(new FlyRocketPowered());
$model->performFly();
