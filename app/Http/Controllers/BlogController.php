<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class BlogController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // Method for handling form submission
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload if image is provided
        $imagePath = $request->file('image') 
            ? $request->file('image')->store('blogs', 'public') 
            : null;

        // Create a new blog entry
        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'image_path' => $imagePath,
        ]);

        return redirect('#postblog')->with('success', 'Article successfully posted!');
    }



    public function showArticles()
    {
        // Fetch articles with sorting and pagination
        $articles = Blog::latest()->paginate(3); // Correct order
    
        return view('components/blog-list', compact('articles'));
    }
    
}
