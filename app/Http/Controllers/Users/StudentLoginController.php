<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Admission;
use Illuminate\Http\Request;

class StudentLoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'enroll_no' => 'required|string',
            'dob' => 'required|date',
        ]);
        $student = Admission::where('enroll_no', $request->enroll_no)
            ->where('dob', $request->dob)
            ->first();
        if (!$student) {
            return back()->withErrors(['error' => 'Invalid Enrollment Number or Date of Birth']);
        }
        Auth::guard('student')->login($student);
        return redirect()->route('student.dashboard');
    }

      public function dashboard()
      {
        return view('front.user.dashboard');
      }
 

    public function logout(Request $request)
    {
        Auth::guard('student')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect()->route('login');
    }
    
}
