<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class DashboardController extends Controller
{
    public function index()
    {
        $contactsCount = Contact::all()->count();
        $unRepliedContactsCount = Contact::query()->where('replied', false)->count();
        $repliedContactsCount = Contact::query()->where('replied', true)->count();

        return view('webapp.index', [
            'contactsCount' => $contactsCount,
            'repliedContactsCount' => $repliedContactsCount,
            'unRepliedContactsCount' => $unRepliedContactsCount
        ]);
    }
}
