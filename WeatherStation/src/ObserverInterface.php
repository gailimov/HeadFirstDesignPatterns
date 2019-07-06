<?php

declare(strict_types=1);

namespace WeatherStation;

interface ObserverInterface
{
    public function update(float $temperature, float $himidity, float $pressure): void;
}
