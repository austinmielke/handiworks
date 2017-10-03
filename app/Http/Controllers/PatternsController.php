<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatternsController extends Controller
{
    public function __invoke()
    {
        $page = 'patterns';
        $title = 'Patterns';

        return view('patterns', compact(['page', 'title']));
    }
}
