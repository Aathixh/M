<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ThingSpeakController extends Controller
{
    //
    public function getDataFromThingSpeak()
    {
        $channelId = '2375849';
        $apiKey = 'GXHH4D204XVSA1LO';

        $url = "https://api.thingspeak.com/channels/$channelId/feeds.json?api_key=$apiKey";

        $client = new Client();
        $response = $client->request('GET', $url);

        $data = json_decode($response->getBody(), true);

        // Check if the 'feeds' array is not empty
        if (!empty($data['feeds'])) {
            // Assuming latitude and longitude are fields in the 'feeds' array
            $latitude = $data['feeds'][0]['field1']; // Change 'field1' to your actual field name
            $longitude = $data['feeds'][0]['field2']; // Change 'field2' to your actual field name
        } else {
            $latitude = null;
            $longitude = null;
        }

        return view('locate/location')->with(compact('latitude', 'longitude'));
    }
}
