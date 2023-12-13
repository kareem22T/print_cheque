<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::guard('admin')->user()) {
            return $next($request);
        }

        // Redirect to login page if not authenticated as admin
        return redirect('/login');
    }
}
