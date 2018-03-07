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
        $subject = null;

        return view('contact', compact(['page', 'title', 'subject']));
    }

    public function getContactDesign() 
    {
        $page = 'contact';
        $title = 'Contact the Artist';
        $subject = 'Inquiry: Knit or Crochet Design';

        return view('contact', compact(['page', 'title', 'subject']));
    }

    public function getContactTeaching() 
    {
        $page = 'contact';
        $title = 'Contact the Artist';
        $subject = 'Inquiry: Teaching';

        return view('contact', compact(['page', 'title', 'subject']));
    }

    public function getContactSample() 
    {
        $page = 'contact';
        $title = 'Contact the Artist';
        $subject = 'Inquiry: Sample Knit or Crochet';

        return view('contact', compact(['page', 'title', 'subject']));
    }

    public function getContactCustom() 
    {
        $page = 'contact';
        $title = 'Contact the Artist';
        $subject = 'Inquiry: Custom Knit or Crochet';

        return view('contact', compact(['page', 'title', 'subject']));
    }

    public function getContactEditing() 
    {
        $page = 'contact';
        $title = 'Contact the Artist';
        $subject = 'Inquiry: Tech and Copy Editing';

        return view('contact', compact(['page', 'title', 'subject']));
    }

    public function getContactRepair() 
    {
        $page = 'contact';
        $title = 'Contact the Artist';
        $subject = 'Inquiry: Repair Knit or Crochet Items';

        return view('contact', compact(['page', 'title', 'subject']));
    }

    public function postContact(Request $request) 
    {
    	$request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'bodyMessage' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->bodyMessage
        ];

        Mail::to('handiworksltd@gmail.com')->send(new Contact($data));

        return redirect('/');
    }
}
