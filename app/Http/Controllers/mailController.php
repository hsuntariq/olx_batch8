<?php

namespace App\Http\Controllers;

use App\Mail\productMail;
use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
    public function sendMail(Request $req)
    {
        $formFields = $req->validate([
            "price" => 'required',
            "title" => 'required',
            "location" => 'required',
            "description" => 'required',
            "user" => 'required',
            "mail" => 'required',
            "image" => 'required'
        ]);

        Mail::to($formFields['mail'])->send(new productMail($formFields));
        return back()->with('message', 'Email sent successfully!');
    }
}
