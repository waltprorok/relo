<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $contactsCount = Contact::all()->count();
        return view('webapp.index', ['contactsCount' => $contactsCount]);
    }
}
