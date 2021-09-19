<?php

namespace App\Http\Controllers;

use App\Http\Requests\WeatherRequest;
use App\WeatherApp\Weather;

class WeatherController extends Controller
{
    public function main(WeatherRequest $request)
    {
        $weather = new Weather($request->y, $request->z);

        return response($weather->getForecast())
            ->header('Content-Type', 'text/json')
            ->header('Access-Control-Allow-Origin', '*');
    }
}
