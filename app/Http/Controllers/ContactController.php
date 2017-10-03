<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke()
    {
        $page = 'contact';
        $title = 'Contact the Artist';

        return view('contact', compact(['page', 'title']));
    }
}
