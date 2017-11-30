<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function getHome()
    {
    	$page = 'home';
        $title = 'Home';

        return view('home', compact(['page', 'title']));
    }

    public function getAbout()
    {
    	$page = 'about';
        $title = 'About the Artist';

        return view('about', compact(['page', 'title']));
    }

    public function getContact()
    {
    	$page = 'contact';
        $title = 'Contact the Artist';

        return view('contact', compact(['page', 'title']));
    }

    public function postContact(Request $request) 
    {
    	$request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'bodyMessage' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'bodyMessage' => $request->bodyMessage
        ];

        Mail::to('contact.handiworksltd@gmail.com')->send(new Contact($data));

        return redirect('/');
    }
}
