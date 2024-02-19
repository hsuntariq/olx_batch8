<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function registerUser(Request $request)
    {
        $formFields = $request->validate([
            "name" => 'required',
            "email" => 'required',
            "password" => 'required',
            "address" => 'required',
            "phone" => 'required',
            "location" => 'required',
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        // create the row in the User table
        $user = User::create($formFields);
        auth()->login($user);
        return back();



    }


    public function signOut(Request $request)
    {
        auth()->logout();
        $request->session()->regenerateToken();
        return back();
    }

    public function signIn(Request $req)
    {
        $formFields = $req->validate([
            "email" => 'required',
            "password" => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $req->session()->regenerateToken();
            return back()->with('message', 'Welcome ' . auth()->user()->name);
        } else {
            return back()->with('message', 'Invalid Credentials');
        }


    }


}
