<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlaceInfoRequest;
use App\JapanPlaces\JapanPlaces;

class JapanPlacesController extends Controller
{
    public function main(PlaceInfoRequest $request)
    {
        $jp_place = new JapanPlaces($request->y, $request->z);

        return response($jp_place->getPlacesInformation())
            ->header('Content-Type', 'text/json')
            ->header('Access-Control-Allow-Origin', '*');
    }
}
