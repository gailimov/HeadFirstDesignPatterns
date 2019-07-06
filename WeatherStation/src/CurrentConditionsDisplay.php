<?php

declare(strict_types=1);

namespace WeatherStation;

class CurrentConditionsDisplay implements ObserverInterface, DisplayElementInterface
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
     * @var SubjectInterface
     */
    private $weatherData;

    public function __construct(SubjectInterface $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $himidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->himidity = $himidity;

        $this->display();
    }

    public function display(): void
    {
        printf("Current conditions: %.01fF degrees and %.01f himidity\n", $this->temperature, $this->himidity);
    }
}
