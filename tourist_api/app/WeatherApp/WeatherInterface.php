<?php

namespace App\WeatherApp;

interface WeatherInterface
{
    public function getForecast() : string;
}

