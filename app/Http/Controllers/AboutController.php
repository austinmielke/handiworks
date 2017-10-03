<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __invoke() 
    {
        $page = 'about';
        $title = 'About the Artist';

        return view('about', compact(['page', 'title']));
    }
}
