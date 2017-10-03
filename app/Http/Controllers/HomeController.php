<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() 
    {
        $page = 'home';
        $title = 'Home';

        return view('home', compact(['page', 'title']));
    }
}
