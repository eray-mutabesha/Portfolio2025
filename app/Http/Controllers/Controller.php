<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController


{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function sendMessage(Request $request)
    {
        $request->validate([
            'name'=>['required'],
            'email'=>['required'],
            'message'=>['required']
        ]);
      
        Message::create([
            'name'=>request('name'),
            'email'=>request('email'),
            'message'=>request('message')
        ]);
    
        // Send email
        Mail::raw(request('message'), function ($message) {
            $message->to('eraymutabesha13@gmail.com')
                    ->subject("New Message from " . request('name'));
        });
                
           
         return redirect('#contact')->with('success', 'Message sent successfully!');
    }
}
