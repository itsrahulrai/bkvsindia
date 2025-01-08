<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CourseName;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = CourseName::latest()->get();
        return view('admin.courses.index', compact('courses'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_title' => 'required',
            'course_name' => 'required',
            'duration' => 'required|numeric',
            'mode' => 'required',
            'eligibility' => 'required',
            'course_fees' => 'required|numeric',
        ]);
        CourseName::create([
            'course_title' => $request->course_title,
            'course_name' => $request->course_name,
            'duration' => $request->duration,
            'mode' => $request->mode,
            'eligibility' => $request->eligibility,
            'course_fees' => $request->course_fees,
        ]);
        session()->flash('success', 'Course created successfully!');
        return redirect()->back();
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
        $course = CourseName::findorFail($id);
        return view('admin.courses.create', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'course_title' => 'required',
            'course_name' => 'required',
            'duration' => 'required|numeric',
            'mode' => 'required',
            'eligibility' => 'required',
            'course_fees' => 'required|numeric',
        ]);
       $course = CourseName::findOrFail($id);
            $course->update([
            'course_title' => $request->course_title,
            'course_name' => $request->course_name,
            'duration' => $request->duration,
            'mode' => $request->mode,
            'eligibility' => $request->eligibility,
            'course_fees' => $request->course_fees,
        ]);
        
        session()->flash('success', 'Course updated successfully!');
        return redirect()->back();
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = CourseName::findOrFail($id); 
        $course->delete();
        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
