<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Models\Message;
Route::get('/', function () {
    return view('homepage');
});


Route::post('/', [Controller::class, 'sendMessage']);
