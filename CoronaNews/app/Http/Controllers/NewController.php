<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

class NewController extends Controller
{
    public function index()
    {
        $client = new Client(['verify' => 'C:\xampp\php\extras\ssl\cacert.pem']);
    	$response = $client->request('GET', 'http://newsapi.org/v2/top-headlines?country=eg&category=health&apiKey=c3a28f5bf8ca45d299987d1c8ba82745');
    	$statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        
        $data = json_decode($body, true)['articles'];
        
        return view('welcome')->with('articles' , $data);
    }
}
