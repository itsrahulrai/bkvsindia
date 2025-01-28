<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   
    public function handle(Request $request, Closure $next, $role)
    {

        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();
       
        if ($user->role != $role) {
            if ($user->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role == 'user') {
                return redirect()->route('user.dashboard');
            } else {
                return redirect('login');
            }
        }

        return $next($request);
    }

  
    
    // public function handle(Request $request, Closure $next, $role)
    // {
    //     if (!Auth::check()) {
    //         return redirect('login'); // Redirect unauthenticated users to login
    //     }

    //     $user = Auth::user();

    //     if ($user->role !== $role) {
    //         switch ($user->role) {
    //             case 'admin':
    //                 return redirect()->route('admin.dashboard');
    //             case 'user': // Redirect `user` role to user dashboard
    //                 return redirect()->route('user.dashboard');
    //             case 'frenchies':
    //                 return redirect()->route('frenchies.dashboard');
    //             default:
    //                 Auth::logout();
    //                 return redirect('login')->withErrors(['role' => 'Unauthorized role.']);
    //         }
    //     }

    //     return $next($request); // Proceed if role matches
    // }

}
