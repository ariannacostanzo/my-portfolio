<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function send(Request $request)
    {
        $details = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:5000',
        ]);
        $recipient = config('mail.from.address');

        Mail::to($recipient)->send(new ContactFormMail($details));

        return redirect()->back()->with('success', 'Email inviata correttamente!');
    }
}