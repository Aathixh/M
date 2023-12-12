<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ThingSpeakController extends Controller
{
    //
    // public function getDataFromThingSpeak()
    // {
    //     $channelId = '2375849';
    //     $apiKey = 'GXHH4D204XVSA1LO';

    //     $url = "https://api.thingspeak.com/channels/$channelId/feeds.json?api_key=$apiKey";

    //     $client = new Client();
    //     $response = $client->request('GET', $url);

    //     // Check if the request was successful (status code 200)
    //     if ($response->getStatusCode() == 200) {
    //         $data = json_decode($response->getBody(), true);

    //         // Check if the 'feeds' array is not empty
    //         if (!empty($data['feeds'])) {
    //             // Assuming latitude and longitude are fields in the 'feeds' array
    //             $latitude = $data['feeds'][0]['field 1']; // Change 'field1' to your actual field name
    //             $longitude = $data['feeds'][0]['field2']; // Change 'field2' to your actual field name
    //         } else {
    //             $latitude = null;
    //             $longitude = null;
    //         }

    //         return view('locate/location.blade.php')->with(compact('latitude', 'longitude'));
    //     }else {


    //         // Handle non-200 status code (e.g., log it, display a message, etc.)
    //         return response()->json(['error' => 'Failed to fetch data from ThingSpeak'], $response->getStatusCode());
    //     }catch(Exception $e) {
    //     // Handle exceptions (e.g., log it, display a message, etc.)
    //     return response()->json(['error' => $e->getMessage()], 500);
    // }
    //     }

    public function getDataFromThingSpeak()
    {
        $channelId = '2375849';
        $apiKey = 'GXHH4D204XVSA1LO';

        $url = "https://api.thingspeak.com/channels/$channelId/feeds.json?api_key=$apiKey";

        $client = new Client();

        try {
            $response = $client->request('GET', $url);

            // Check if the request was successful (status code 200)
            if ($response->getStatusCode() == 200) {
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

                return view('locate/location.blade.php')->with(['latitude' => $latitude, 'longitude' => $longitude]);
            } else {
                // Handle non-200 status code (e.g., log it, display a message, etc.)
                return response()->json(['error' => 'Failed to fetch data from ThingSpeak'], $response->getStatusCode());
            }
        } catch (\Exception $e) {
            // Handle exceptions (e.g., log it, display a message, etc.)
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
