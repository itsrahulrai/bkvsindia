<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CoursesController extends Controller
{
    use ImageUploadTrait;
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
            'name' => 'required',
            'duration' => 'required',
            'mode' => 'required',
            'eligibility' => 'required',
            'fees' => 'required|numeric',
        ]);

        $photoPath = $this->uploadImage($request, 'image', 'uploads/courses');
        $thumbnailPath = $this->uploadImage($request, 'thumbnail', 'uploads/courses');

        try {
            Course::create([
                'parent_id' => $request->parent_id,
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'duration' => $request->duration,
                'mode' => $request->mode,
                'eligibility' => $request->eligibility,
                'fees' => $request->fees,
                'content' => $request->content,
                'sidecontent' => $request->sidecontent,
                'skill_level' => $request->skill_level,
                'price' => $request->price,
                'image' => $photoPath,
                'thumbnail' => $thumbnailPath,
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
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'duration' => 'required',
            'mode' => 'required',
            'eligibility' => 'required',
            'fees' => 'required|numeric',
            'slug' => 'unique:courses,slug,' . $id, 
        ]);

        $photoPath = null;
        if ($request->hasFile('image')) {
            $photoPath = $this->uploadImage($request, 'image', 'uploads/courses');
        }

        $thumbnailPath = null;
        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $this->uploadImage($request, 'thumbnail', 'uploads/courses');
        }

        try {
            $course = Course::findOrFail($id);
            $course->update([
                'parent_id' => $request->parent_id,
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'duration' => $request->duration,
                'mode' => $request->mode,
                'eligibility' => $request->eligibility,
                'fees' => $request->fees,
                'content' => $request->content,
                'sidecontent' => $request->sidecontent,
                'skill_level' => $request->skill_level,
                'price' => $request->price,
               'image' => $photoPath ?? $course->image,
               'thumbnail' => $thumbnailPath ?? $course->thumbnail,
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
        $linkedAdmissions = $course->admissions()->exists(); 
    
        if ($linkedAdmissions) {
            return response()->json(['status' => 'error', 'message' => 'Course cannot be deleted as it has linked admissions.'], 400);
        }
        $course->delete();
    
        return response()->json(['status' => 'success', 'message' => 'Course deleted successfully!']);
    }
    

}
