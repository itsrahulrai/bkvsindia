<?php

namespace App\Http\Controllers\Frenchies;

use App\Http\Controllers\Controller;
use App\Models\Center;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class FrenchiesLoginController extends Controller
{
    public function login(Request $request)
    {
        // dd($request->all());


        $request->validate([
            'center_code' => 'required',
        ]);
        $center = Center::where('center_code', $request->center_code)
            ->first();

        // dd($center);

        if (!$center) {
            return back()->withErrors(['error' => 'Invalid Enrollment Number or Date of Birth']);
        }
        Auth::guard('frenchies')->login($center);
        return redirect()->route('frenchies.dashboard');
    }

      public function dashboard()
      {
        return view('frenchies.dashboard');
      }
 

    public function logout(Request $request)
    {
        Auth::guard('frenchies')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect()->route('login');
    }
}
