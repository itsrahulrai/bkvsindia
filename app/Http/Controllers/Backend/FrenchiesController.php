<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrenchiesController extends Controller
{
    public function dashboard()
    {
      
        return view('frenchies.dashboard');
    }


    public function login()
    {
        return view('frenchies.auth.login');
    }
}
