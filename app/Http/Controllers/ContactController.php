<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactForm;
use App\Mail\ContactFormToUser;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('webapp.contacts.contacts', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('marketing.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {
        try {
            Contact::query()->create([
                'name' => $request->get('name'),
                'status' => $request->get('status'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'current_zip_code' => $request->get('current_zip_code'),
                'moving_to_city' => $request->get('moving_to_city'),
                'message' => $request->get('message'),
            ]);

            Mail::to('test@example.com')->send(new ContactForm($request));
            Mail::to($request->get('email'))->send(new ContactFormToUser($request));
        } catch (Exception $exception) {
            Log::info($exception->getMessage());
        }

        return redirect()->route('contact.create')->with('success', 'The contact form was sent successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
