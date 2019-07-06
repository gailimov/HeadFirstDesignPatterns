<?php

declare(strict_types=1);

namespace WeatherStation;

use SplSubject;
use SplObserver;

class WeatherData implements SplSubject
{
    /**
     * @var array
     */
    private $observers = [];

    /**
     * @var float
     */
    private $temperature;

    /**
     * @var float
     */
    private $himidity;

    /**
     * @var float
     */
    private $pressure;

    public function attach(SplObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        foreach ($this->observers as $index => $thisObserver) {
            if ($thisObserver == $observer) {
                unset($this->observers[$index]);
            }
        }
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function measurementsChanged(): void
    {
        $this->notify();
    }

    public function setMeasurements(float $temperature, float $himidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->himidity = $himidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }

    public function getTemperature(): float
    {
        return $this->temperature;
    }

    public function getHimidity(): float
    {
        return $this->himidity;
    }

    public function getPressure(): float
    {
        return $this->pressure;
    }
}
