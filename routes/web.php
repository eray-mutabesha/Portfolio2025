<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeBlogController;
use App\Models\Message;
use App\Models\Blog;



Route::get('/', function () {
    return view('homepage');
});

Route::get('/postblog', function () {
    return view('components/post-blog');
});

Route::get('/bloglist', function () {
    return view('components/blog-list');
});




Route::post('/', [Controller::class, 'sendMessage']);
Route::get('/', [HomeBlogController::class, 'index'])->name('home');

Route::post('/postblog', [BlogController::class, 'store'])->name('blogs.store');
Route::get('/bloglist', [BlogController::class, 'showArticles'])->name('articlesHome.showArticles');
