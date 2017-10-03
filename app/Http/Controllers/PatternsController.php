<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PatternsController extends Controller
{

    protected function getPatterns()
    {
        $login = env('RAVELRY_API_ACCESS_KEY');
        $password = env('RAVELRY_API_PERSONAL_KEY');
        $url = 'https://api.ravelry.com/patterns/search.json?designer=handiworks-ltd';
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

        public function list() 
        { 
            $page = 'patterns'; 
            $title = 'Patterns'; 
            $patterns = $this->getPatterns(); 
            
            return view('patterns', compact(['page', 'title', 'patterns'])); }
}
