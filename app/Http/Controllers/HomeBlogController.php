<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class HomeBlogController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


public function index()
{
    $articlesHome = Blog::latest()->paginate(3); // Get paginated data
    return view('homepage', compact('articlesHome')); // Pass variable to view
}
    
}
