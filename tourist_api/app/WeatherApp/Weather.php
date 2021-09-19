<?php

namespace App\WeatherApp;

class Weather implements WeatherInterface
{
    // ?q=osaka,jp&APPID=
    private const API_ENDPOINT = "https://api.openweathermap.org/data/2.5/weather";
    private const APP_ID = "9a2781d4a7bb661359129f576e0f800e";

    private $location = "";

    public function __construct($city, $zone)
    {
        $this->location = $city . "," . $zone;
    }

    public function getForecast(): string
    {
        
        $input_params = "?q=" . $this->location . "&APPID=" . self::APP_ID;
        $api_request = self::API_ENDPOINT . $input_params . "&lang=en";
        return file_get_contents($api_request);
    }
}
