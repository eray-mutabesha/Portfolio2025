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

    return redirect('/')  ;
});
