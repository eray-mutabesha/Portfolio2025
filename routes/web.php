<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeBlogController;
use App\Http\Controllers\AuthController;
use App\Models\Message;
use App\Models\Blog;



Route::get('/', function () {
    return view('homepage');
});


//middlewaare
Route::get('/postblog', function () {
    return view('components/post-blog'); // Your dashboard view
})->middleware('auth.custom')->name('postblog');


Route::get('/bloglist', function () {
    return view('components/blog-list');
});




Route::post('/', [Controller::class, 'sendMessage']);
Route::get('/', [HomeBlogController::class, 'index'])->name('home');



Route::get('/dashboard', function () {
    return view('components/dashboard'); // Your dashboard view
})->middleware('auth')->name('dashboard');


Route::get('/bloglist', [BlogController::class, 'showArticles'])->name('articlesHome.showArticles');
Route::post('/postblog', [BlogController::class, 'store'])->name('blogs.store');
// Admin-only

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginpost', [AuthController::class, 'loginpost'])->name('login.post');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'postregister'])->name('register.post');
