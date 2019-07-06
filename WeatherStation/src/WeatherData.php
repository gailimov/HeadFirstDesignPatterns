<?php

declare(strict_types=1);

namespace WeatherStation;

class WeatherData implements SubjectInterface
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

    public function registerObserver(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(ObserverInterface $observer): void
    {
        foreach ($this->observers as $index => $thisObserver) {
            if ($thisObserver == $observer) {
                unset($this->observers[$index]);
            }
        }
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->himidity, $this->pressure);
        }
    }

    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temperature, float $himidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->himidity = $himidity;
        $this->pressure = $pressure;

        $this->measurementsChanged();
    }
}
