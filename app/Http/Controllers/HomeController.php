<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        return view('webapp.index');
    }
}
