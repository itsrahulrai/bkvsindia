<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Center;
use App\Models\CenterApply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CenterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centers = CenterApply::latest()->paginate(100); 
        return view('admin.centers.index',compact('centers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.centers.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
    $request->validate([
        'institute_name' => 'required',
        'director' => 'required',
        'phone' => 'required|numeric|digits:10',
        'mobile' => 'required|numeric|digits:10',
        'email' => 'required|email',
        'state' => 'required|string',
        'city' => 'required|string|max:100',
        'pincode' => 'required|numeric|digits:6',
        'website' => 'nullable|url', // Optional website validation
    ]);
    
    try {
        // Generate a unique center code
        $centerCode = centerCode(); 
        
        // Create the center
        $center = Center::create([
            'institute_name' => $request->institute_name,
            'director' => $request->director,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
            'website' => $request->website,
            'email' => $request->email,
            'state' => $request->state,
            'city' => $request->city,
            'pincode' => $request->pincode,
            'address' => $request->address,
            'message' => $request->message,
            'status' => 'pending', // Ensure status is set as 'pending'
            'center_code' => $centerCode, // Assign the generated center code
        ]);
        
        session()->flash('success', 'Center created successfully!');
        return redirect()->back();
    } catch (\Exception $e) {
        Log::error('Error creating Center: ' . $e->getMessage());
        return redirect()->back()->withErrors('Error creating Center: ' . $e->getMessage());
    }
}









    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        

        $centers = CenterApply::where('apply_id', $id)->first();
        // dd($centers);
        return view('admin.centers.create', compact('centers'));
                
    }

    /**
     * Update the specified resource in storage.
     */
public function update(Request $request, string $id)
{
    // dd($id);

    $request->validate([
        'institute_name' => 'required',
        'director' => 'required',
        'phone' => 'required|numeric|digits:10',
        'mobile' => 'required|numeric|digits:10',
        'website' => 'required|url',
        'email' => 'required|email',
        'state' => 'required|string',
        'city' => 'required|string|max:100',
        'pincode' => 'required|numeric|digits:6'
    ]);

    try {
        $center = CenterApply::where('apply_id', $id)->firstOrFail();
        // dd($center);
        $center->update([
            'institute_name' => $request->institute_name,
            'director' => $request->director,
            'phone' => $request->phone,
            'mobile' => $request->mobile,
            'website' => $request->website,
            'email' => $request->email,
            'state' => $request->state,
            'city' => $request->city,
            'pincode' => $request->pincode,
            'address' => $request->address,
            'message' => $request->message,
            'status' => 1,
        ]);

        session()->flash('success', 'Center updated successfully!');
        return redirect()->route('admin.center.index');
    } catch (\Exception $e) {
        Log::error('Error updating Center: ' . $e->getMessage());
        return redirect()->back()->with('error', 'There was an error updating the center.');
    }
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
