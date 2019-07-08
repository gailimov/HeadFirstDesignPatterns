<?php

declare(strict_types = 1);

namespace HeadFirstDesignPatterns\WeatherStation;

use SplObserver;
use SplSubject;

class CurrentConditionsDisplay implements SplObserver, DisplayElementInterface
{
    /**
     * @var float
     */
    private $temperature;

    /**
     * @var float
     */
    private $himidity;

    /**
     * @var SplSubject
     */
    private $weatherData;

    public function __construct(SplSubject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->attach($this);
    }

    public function update(SplSubject $subject): void
    {
        if ($subject instanceof WeatherData) {
            $this->temperature = $subject->getTemperature();
            $this->himidity = $subject->getHimidity();

            $this->display();
        }
    }

    public function display(): void
    {
        printf("Current conditions: %.01fF degrees and %.01f himidity\n", $this->temperature, $this->himidity);
    }
}
