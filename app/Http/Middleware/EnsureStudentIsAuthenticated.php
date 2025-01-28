<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureStudentIsAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        // Ensure that the 'student' guard is used (you can also pass the guard dynamically)
        $guard = $guards[0] ?? 'student';

        // If the user is not authenticated, redirect them to the login page
        if (!Auth::guard($guard)->check()) {
            return redirect()->route('login');
        }

        // If authenticated, proceed with the request
        return $next($request);
    }
}
