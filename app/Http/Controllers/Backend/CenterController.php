<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Center;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Log;

class CenterController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $centers = Center::latest()->paginate(100); 
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
            'website' => 'nullable|url',
        ]);
        
        try {
            $centerCode = centerCode(); 
            $hashedPassword = bcrypt($request->mobile); 
            $photoPath = $this->uploadImage($request, 'certificateImage', 'uploads/images');
             Center::create([
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
                'address1' => $request->address1,
                'number_of_lab_rooms' => $request->number_of_lab_rooms,
                'space_available' => $request->space_available,
                'certificate' => $request->certificate,
                'certificateImage' => $photoPath,
                'date' => $request->date,
                'message' => $request->message,
                'status' => 'pending',
                'center_code' => $centerCode,
                'password' => $hashedPassword,
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
        $centers = Center::where('id', $id)->first();
        return view('admin.centers.create', compact('centers'));
                
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
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
            'website' => 'nullable|url',
        ]);
        try {
            $center = Center::findOrFail($id);
            $hashedPassword = $request->has('mobile') ? bcrypt($request->mobile) : $center->password;
            $photoPath = $this->uploadImage($request, 'certificateImage', 'uploads/images');
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
                'address1' => $request->address1,
                'certificate' => $request->certificate,
                'certificateImage' => $photoPath,
                'number_of_lab_rooms' => $request->number_of_lab_rooms,
                'space_available' => $request->space_available,
                'date' => $request->date,
                'message' => $request->message,
                'status' => $request->status,
                'password' => $hashedPassword, 
            ]);
            
            session()->flash('success', 'Center updated successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            Log::error('Error updating Center: ' . $e->getMessage());
            return redirect()->back()->withErrors('Error updating Center: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */ 

    public function destroy(string $id)
    {
        $center = Center::findOrFail($id);
        $linkedAdmissions = $center->admissions()->exists(); 
        if ($linkedAdmissions) {
            return response()->json(['status' => 'error', 'message' => 'Center cannot be deleted as it has linked admissions.'], 400);
        }
        $center->delete();
        return response(['status' => 'success', 'message' => 'Center deleted successfully!']);
    }

     /**
     * Status Change.
     */
    public function changeStatus(Request $request)
    {
        $center = Center::findOrFail($request->id);
        $center->status = $request->status; 
        $center->save();
        
        return response(['message' => 'Status has been updated!']);
    }
    
}
