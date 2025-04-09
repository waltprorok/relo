<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('webapp.home');
    }

    public function show()
    {
        return view('marketing.contact');
    }


    public function contactSave(ContactRequest $request)
    {
//        try {
//            Contact::query()->create([
//                'name' => $request->get('name'),
//                'status' => $request->get('status'),
//                'email' => $request->get('email'),
//                'phone' => $request->get('phone'),
//                'zip' => $request->get('zip'),
//                'moving' => $request->get('moving'),
//                'message' => $request->get('message'),
//            ]);
//
//            Mail::to('waltprorok@gmail.com')->queue(new ContactForm($request));
//        } catch (Exception $exception) {
//            Log::info($exception->getMessage());
//        }
//
        return redirect()->route('contact.show')->with('success', 'The contact form was sent successfully');
    }
}
