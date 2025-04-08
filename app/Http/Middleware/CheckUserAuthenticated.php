<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserAuthenticated
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            // User not logged in — redirect to login
            return redirect()->route('login')->with('error', 'You must be logged in to access this page.');
        }

        // Optional: Check for specific condition like role
        // if (Auth::user()->role !== 'admin') {
        //     abort(403, 'Unauthorized');
        // }

        return $next($request);
    }
}
