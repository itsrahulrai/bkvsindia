<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Center;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class FranchiseApplyController extends Controller
{

    public function franchiseApply(Request $request)
    {
        $request->validate([
            'institute_name' => 'required',
            'director' => 'required',
            'mobile' => 'required|numeric|digits:10',
            'email' => 'required|email',
            'state' => 'required|string',
            'city' => 'required|string|max:100',
        ]);
        
        try {
            $hashedPassword = bcrypt($request->mobile); 
             Center::create([
                'institute_name' => $request->institute_name,
                'director' => $request->director,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'state' => $request->state,
                'city' => $request->city,
                'address' => $request->address,
                'number_of_lab_rooms' => $request->number_of_lab_rooms,
                'space_available' => $request->space_available,
                'message' => $request->message,
                'password' => $hashedPassword,
            ]);
            
            session()->flash('success', 'Franchise Apply successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            Log::error('Error creating Center: ' . $e->getMessage());
            return redirect()->back()->withErrors('Error creating Franchise: ' . $e->getMessage());
        }
    }
}
