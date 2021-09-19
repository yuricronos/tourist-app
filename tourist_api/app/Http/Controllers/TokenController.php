<?php

namespace App\Http\Controllers;

class TokenController extends Controller
{
    public function getCsrfToken()
    {
        $data = array(
            'token' => csrf_token()
        );
        return response(json_encode($data))
            ->header('Content-Type', 'text/json')
            ->header('Access-Control-Allow-Origin', '*');
    }
}
