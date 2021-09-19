<?php

namespace App\JapanPlaces;

class JapanPlaces implements JapanPlaceInterface
{
    // client_id=BWCVTWRDBLGA1CIWUF2Y2QWOXVIHXYMFAIWVHQYZZ1ZQ5BUP
    // client_secret=1NZV1TJX3DYPKW2125ENZL3JSJ42JEQG2XGBJ1FYEZECEQVD
    // near=Osaka,JP
    // limit=10
    // categoryId=4deefb944765f83613cdba6e
    // v=20210912

    private const API_ENDPOINT = "https://api.foursquare.com/v2/venues/search";

    private const DEFAULT_PARAMS = array(
        'client_id' => 'BWCVTWRDBLGA1CIWUF2Y2QWOXVIHXYMFAIWVHQYZZ1ZQ5BUP',
        'client_secret' => '1NZV1TJX3DYPKW2125ENZL3JSJ42JEQG2XGBJ1FYEZECEQVD',
        'v' => '20210918',
        'categoryId' => '4deefb944765f83613cdba6e'
    );

    private $user_defined_params = array(
        'near' => '',
        'limit' => 10 // make the default value of 10
    );

    public function __construct(string $city, string $zone, int $limit = 10)
    {
        $this->user_defined_params['near'] = $city . "," . $zone;
        $this->user_defined_params['limit'] = $limit;
    }

    public function getPlacesInformation(): string
    {
        $default_params = array();
        foreach (self::DEFAULT_PARAMS as $key => $value) {
            array_push($default_params, $key . '=' . $value);
        }

        $user_defined_params = array();
        foreach ($this->user_defined_params as $key => $value) {
            array_push($user_defined_params, $key . "=" . $value);
        }

        $all_params = implode('&', $default_params) . "&" .  implode('&', $user_defined_params);

        $api_request = self::API_ENDPOINT . "?" . $all_params;

        return file_get_contents($api_request);
    }
}
