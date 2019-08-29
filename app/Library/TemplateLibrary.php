<?php
namespace App\Library;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class TemplateLibrary
{

    public function menu() {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://www.mocky.io/v2/5c9105cb330000112b649af8');
        $response = $request->getBody()->getContents();

        $str=str_replace("\r\n","",$response);
        $array_response = json_decode($str, true);

        $furnitures = $array_response['furniture_styles'];
        
        return $menu = $array_response['furniture_styles'];
    }

}
?>