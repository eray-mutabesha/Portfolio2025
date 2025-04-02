<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BlogController;
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



Route::post('/postblog', [BlogController::class, 'store'])->name('blogs.store');
Route::post('/', [Controller::class, 'sendMessage']);

// Route::get('/bloglist', [BlogController::class, 'showArticles']);

Route::get('/bloglist', function () {
    $blogs = Blog::latest()->paginate(10);
    return view('components/blog-list', [
        'blogs' => $blogs
    ]);
});

