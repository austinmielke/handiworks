<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function isActive($uri)
    {
        if (Route::current() === $uri ) {
            return ' active';
        }    
    }
}
