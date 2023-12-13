<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class ThingSpeakController extends Controller
{
    public function getDataFromThingSpeak()
    {
        $apiKey = 'GXHH4D204XVSA1LO';
        $url = "https://api.thingspeak.com/channels/2375849/feeds.json?api_key=$apiKey&results=2";

        $client = new Client();


        $response = Http::get($url, ['api_key' => $apiKey, 'results' => 1]);

        // Check if the request was successful (status code 200)

        $data = $response->json();

        // Check if the 'feeds' array is not empty
        //dd($data);

        // Assuming latitude and longitude are fields in the 'feeds' array
        $latitude = $data['feeds'][0]['field1']; // Change 'field1' to your actual field name
        $longitude = $data['feeds'][0]['field2']; // Change 'field2' to your actual field name

        //dd($latitude ,$longitude);

        return view('locate.location')->with(['latitude' => $latitude, 'longitude' => $longitude]);

    }
}

