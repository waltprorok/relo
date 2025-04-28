<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $contactsCount = Contact::all()->count();
        $unRepliedContactsCount = Contact::where('replied', false)->count();
        $repliedContactsCount = Contact::where('replied', true)->count();
        return view('webapp.index', [
            'contactsCount' => $contactsCount,
            'repliedContactsCount' => $repliedContactsCount,
            'unRepliedContactsCount' => $unRepliedContactsCount
        ]);
    }
}
