<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $courses = Course::whereNotNull('parent_id')->latest()->get();

        $courses = Course::latest()->get();
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::whereNull('parent_id')->latest()->get();
        return view('admin.courses.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'parent_id' => 'required',
            'name' => 'required',
            'duration' => 'required|numeric',
            'mode' => 'required',
            'eligibility' => 'required',
            'fees' => 'required|numeric',
        ]);

        try {
            Course::create([
                'parent_id' => $request->parent_id,
                'name' => $request->name,
                'duration' => $request->duration,
                'mode' => $request->mode,
                'eligibility' => $request->eligibility,
                'fees' => $request->fees,
            ]);
            session()->flash('success', 'Course created successfully!');
            return redirect()->back();
        } catch (\Exception $e) {
            Log::error('Error updating Center: ' . $e->getMessage());
            return redirect()->back()->withErrors('Error updating Center: ' . $e->getMessage());
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
        $course = Course::findOrFail($id);
        $courses = Course::whereNull('parent_id')->latest()->get();
        return view('admin.courses.create', compact('course', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'parent_id' => 'required',
            'name' => 'required',
            'duration' => 'required|numeric',
            'mode' => 'required',
            'eligibility' => 'required',
            'fees' => 'required|numeric',
        ]);

        try {
            $course = Course::findOrFail($id);
            $course->update([
                'parent_id' => $request->parent_id,
                'name' => $request->name,
                'duration' => $request->duration,
                'mode' => $request->mode,
                'eligibility' => $request->eligibility,
                'fees' => $request->fees,
            ]);

            session()->flash('success', 'Course updated successfully!');
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
        $course = Course::findOrFail($id);
        $course->delete();
        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }
}
