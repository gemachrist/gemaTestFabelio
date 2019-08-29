<?php
namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Mail\ErrorReportMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class HomeController extends Controller {
		
    public function index(Request $request) {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://www.mocky.io/v2/5c9105cb330000112b649af8');
        $response = $request->getBody()->getContents();

        $str=str_replace("\r\n","",$response);
        $array_response = json_decode($str, true);

        $products = $array_response['products'];
        $furnitures = $array_response['furniture_styles'];
        // dd($array_response);
        return view('pages.catalog')
        ->with('products', $products)
        ->with('furnitures', $furnitures);
    }

    public function search(Request $request) {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://www.mocky.io/v2/5c9105cb330000112b649af8');
        $response = $request->getBody()->getContents();

        $str=str_replace("\r\n","",$response);
        $array_response = json_decode($str, true);

        $products = $array_response['products'];
        $furnitures = $array_response['furniture_styles'];
        // dd($array_response);
        return view('pages.result')
        ->with('products', $products)
        ->with('furnitures', $furnitures);
    }
}