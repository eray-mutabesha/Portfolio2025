<?php

namespace App\Http\Controllers;

// app/Http/Controllers/ContactController.php
namespace App\Http\Controllers;

use App\Models\Message;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:100',
            'email' => 'required|email',
            'message' => 'required|string|max:500',
        ]);

        // Save message to database
        $message = Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        // Send email
        $details = [
            'name' => $message->name,
            'email' => $message->email,
            'message' => $message->message,
        ];

        Mail::to('eray@gmail.com')->send(new ContactMail($details));

        return back()->with('success', 'Message sent and saved successfully!');
    }
}
