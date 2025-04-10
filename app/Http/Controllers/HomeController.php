<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('webapp.home', ['contacts' => $contacts]);
    }
}
