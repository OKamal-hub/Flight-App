<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FlightController extends Controller
{
    public function getFlightDetails(Request $request)
    {
        $URL = 'http://api.aviationstack.com/v1/flights';

        $accessKey = '20ef6b21eff64138f0b7b50e60a67af0';
        $flightIATA = $request->flight_iata;


        $response = Http::get($URL, [
            'access_key' => $accessKey,
            'flight_iata' => $flightIATA,
            'limit' => 1
        ]);

        return response()->json([
           'flight_details' => $response['data']
        ]);

    }
}
