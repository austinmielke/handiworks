<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PatternsController extends Controller
{

    protected function getPatternsList()
    {
        $login = config('ravelry_api.ACCESS_KEY');
        $password = config('ravelry_api.PERSONAL_KEY');
        $url = config('ravelry_api.BASE_URL') . 'search.json?designer=Handiworks+LTD';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");
        $result = json_decode(curl_exec($ch));
        $patterns = array_reverse($result->patterns);
        curl_close($ch);
        return $patterns;
    }

    protected function getPatternInfo($id)
    {
        $login = config('ravelry_api.ACCESS_KEY');
        $password = config('ravelry_api.PERSONAL_KEY');
        $url = config('ravelry_api.BASE_URL') . $id . '.json';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");
        $results = json_decode(curl_exec($ch));
        curl_close($ch);
        $pattern = $results->pattern;
        return $pattern;
    }

    public function list() 
    { 
        $patterns = $this->getPatternsList();
        $page = 'patterns'; 
        $title = 'Patterns';  
        
        return view('patternList', compact(['page', 'title', 'patterns'])); 
    }

    public function show($id)
    {
        $pattern = $this->getPatternInfo($id);
        $page = 'patterns'; 
        $title = $pattern->name;
        
        return view('pattern', compact(['page', 'title', 'pattern'])); 
    }
}
