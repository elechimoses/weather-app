<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class CityController extends Controller
{
    
    public function city($city)
    {
        $apiKey = env('OPEN_WEATHER_API_KEY');

        $url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey&mode=xml";

            try{                
        $response = Http::get($url);

        //Check for any error 400 or 500 level status code
        if($response->failed()){
            // process the failure
        }

        //Check if response has error with 500 level status code
         if($response->serverError()) {
            //process on server error
        }

        //Check if response has error with 400 level status code
        if($response->clientError()) {
            return response()->json([
                            'message' => 'city not found'
            ], 404, ['Content-Type => application/json']);
     
        }

        // It also allows to throw exceptions on the $response
        //If there's no error then the display return response
        return response($response->body(), 200)
            ->header('Content-Type', 'text/xml');
        
    }
    catch(\Exception $e) {
        //$e->getMessage() - will output "cURL error 6: Could not resolve host" in case of invalid domain
    }
    }

    public function find(Request $request)
    {
         $request->validate([
            'city' => ['required'],
        ]);

                $apiKey = env('OPEN_WEATHER_API_KEY');
                $city = $request->city;

         $url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey";

    try{                
        $response = Http::get($url);

        //Check for any error 400 or 500 level status code
        if($response->failed()){
            // process the failure
        }

        //Check if response has error with 500 level status code
         if($response->serverError()) {
            //process on server error
        }

        //Check if response has error with 400 level status code
        if($response->clientError()) {
            return response()->json([
                            'message' => 'city not found'
            ], 404, ['Content-Type => application/json']);
     
        }

        // It also allows to throw exceptions on the $response
        //If there's no error then the chain will continue and json() will be invoked
       
        return view('description', ['data' => $response->json()]);
    }
    catch(\Exception $e) {
        //$e->getMessage() - will output "cURL error 6: Could not resolve host" in case of invalid domain
    } 

    }
}
