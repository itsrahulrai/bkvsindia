<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admission;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */

    public function create(): View|RedirectResponse
    {
        if (Auth::check()) {
            $user = Auth::user();
    
            // Redirect based on user roles
            switch ($user->role) {
                case 'admin':
                    return redirect()->route('admin.dashboard');
                case 'frenchies':
                    return redirect()->route('frenchies.dashboard');
                case 'user':
                    return redirect()->route('user.dashboard');
                default:
                    // Handle unexpected roles
                    Auth::logout();
                    return redirect()->route('login')->withErrors(['role' => 'Unauthorized role.']);
            }
        }
    
        // Return login view for unauthenticated users
        return view('auth.login');
    }


    


    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        
        $request->authenticate();
        $request->session()->regenerate();

        // Check intended URL
        $intendedUrl = session('url.intended', null);

        if ($intendedUrl) {
            return redirect($intendedUrl);
        }
        $user = $request->user();
        switch ($user->role) {

            case 'admin':
                return redirect()->route('admin.dashboard');
            case 'frenchies':
                return redirect()->route('frenchies.dashboard');
            case 'user':
                return redirect()->route('user.dashboard');
            default:
                // Handle unexpected roles
                Auth::logout();
                return redirect()->route('login')->withErrors(['role' => 'Unauthorized role.']);
        }
    }


  

 
    

    
  
    
    




    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
