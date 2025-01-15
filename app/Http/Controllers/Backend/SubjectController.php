<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseDetail;
use Illuminate\Http\Request;
use App\Models\CourseSubject;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courseDetails  = CourseDetail::with('subjects','course')->latest()->get();
        // dd($courseDetails);
        return view('admin.subjects.index',compact('courseDetails'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::whereNotNull('parent_id')->select('id', 'name')->get();
        return view('admin.subjects.create', compact('courses'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'semester' => 'required|integer|between:1,8',
            'statement_mark' => 'required',
            'subjects' => 'required|array',
            'subjects.*.subject_code' => 'required|string|max:255',
            'subjects.*.name' => 'required|string|max:255',
            'subjects.*.min_marks' => 'required|integer|min:0',
            'subjects.*.max_marks' => 'required|integer|min:0',
        ]);

        DB::beginTransaction();

        try {
            $courseDetail = CourseDetail::create([
                'course_id' => $validated['course_id'],
                'semester' => $validated['semester'],
                'statement_mark' => $validated['statement_mark'],
            ]);

            $subjectsData = array_map(function($subject) use ($courseDetail) {
                return [
                    'course_detail_id' => $courseDetail->id, 
                    'subject_code' => $subject['subject_code'],
                    'subject_name' => $subject['name'],
                    'minimum_marks' => $subject['min_marks'],
                    'maximum_marks' => $subject['max_marks'],
                ];
            }, $validated['subjects']);
            
            CourseSubject::insert($subjectsData);
            DB::commit();

            return redirect()->route('admin.subject.index')->with('success', 'Course Created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error storing course and subjects:', ['error' => $e->getMessage()]);
            return back()->withErrors('Error: ' . $e->getMessage());
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
        $courses = Course::whereNotNull('parent_id')->select('id', 'name')->get();
        $courseDetails = CourseDetail::with('subjects')->findOrFail($id);
        return view('admin.subjects.create', compact('courseDetails', 'courses'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'semester' => 'required|integer|between:1,8',
            'statement_mark' => 'required',
            'subjects' => 'required|array',
            'subjects.*.subject_code' => 'required|string|max:255',
            'subjects.*.name' => 'required|string|max:255',
            'subjects.*.min_marks' => 'required|integer|min:0',
            'subjects.*.max_marks' => 'required|integer|min:0',
        ]);
    
        DB::beginTransaction();
    
        try {
            $courseDetail = CourseDetail::findOrFail($id);
            $courseDetail->update([
                'course_id' => $validated['course_id'],
                'semester' => $validated['semester'],
                'statement_mark' => $validated['statement_mark'],
            ]);
            $courseDetail->subjects()->delete();
            $subjectsData = array_map(function($subject) use ($courseDetail) {
                return [
                    'course_detail_id' => $courseDetail->id,
                    'subject_code' => $subject['subject_code'],
                    'subject_name' => $subject['name'],
                    'minimum_marks' => $subject['min_marks'],
                    'maximum_marks' => $subject['max_marks'],
                ];
            }, $validated['subjects']);
            CourseSubject::insert($subjectsData);
            DB::commit();
            return redirect()->route('admin.subject.index')->with('success', 'Course and Subjects updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error updating course and subjects:', ['error' => $e->getMessage()]);
            return back()->withErrors('Error: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $courseDetail = CourseDetail::findOrFail($id);
        $courseDetail->delete();
        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }

}
