<?php

use WeatherStation\{WeatherData, CurrentConditionsDisplay};

require_once __DIR__ . '/vendor/autoload.php';

$weatherData = new WeatherData();
$currentDisplay = new CurrentConditionsDisplay($weatherData);

$weatherData->setMeasurements(80, 65, 30.4);
