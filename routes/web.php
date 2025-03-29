<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Contact\ContactController;
use App\Models\Message;
Route::get('/', function () {
    return view('homepage');
});

Route::post('/',function (){

    request()->validate([
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

    return redirect('/')  ;
});
