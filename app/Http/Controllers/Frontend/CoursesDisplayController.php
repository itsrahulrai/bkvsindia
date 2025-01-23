<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursesDisplayController extends Controller
{
    public  function courseDetails($slug)
    {
        $coursedetails = Course::with('parent')->whereNotNull('parent_id')
        ->where('slug', $slug)
        ->orderByDesc('id')->first();

        // dd($coursedetails);
        return view('front.courses.course-details',compact('coursedetails'));
    }
}
