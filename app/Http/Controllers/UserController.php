<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserAccountRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user = request()->user();
        return view('webapp.users.account', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserAccountRequest $request)
    {
        /** @var User $user */
        $user = Auth::user();
        $user->name = $request->get('name');

        if ($request->get('email') !== $user->email) {
            $user->email = $request->get('email');
        }

        $user->save();

        if ($request->get('current_password') !== null) {
            if (! (Hash::check($request->get('current_password'), Auth::user()->password))) {
                return redirect()->back()->with('error', 'Your current password does not match with the new password you provided. Please try again.');
            }

            if (strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
                return redirect()->back()->with('error', 'New Password cannot be same as your current password. Please choose a different password.');
            }

            $request->validate([
                'current_password' => 'required',
                'new_password' => 'required|string|min:8|confirmed',
            ]);

            $user->password = Hash::make($request->get('new_password'));
            $user->save();


            return redirect()->back()->with('success', 'Password changed successfully!');
        }

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
