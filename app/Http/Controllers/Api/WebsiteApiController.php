<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\View\Components\CourseCard;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebsiteApiController extends Controller
{

    // public function courses(Request $request)
    // {
    //     $query = Course::with('parent')
    //         ->whereNotNull('parent_id')
    //         ->where('status', 'active')
    //         ->orderByDesc('id');

    //     // Filter by categories (parent_id)
    //     if ($request->has('categories')) {
    //         $categoryIds = explode(',', $request->categories);
    //         $query->whereIn('parent_id', $categoryIds);
    //     }

    //     // Filter by skill level
    //     if ($request->has('skill_levels')) {
    //         $skillLevels = explode(',', $request->skill_levels);
    //         if (in_array('allskill', $skillLevels)) {
    //         } else {
    //             $query->whereIn('skill_level', $skillLevels);
    //         }
    //     }

    //     // Filter by price
    //     if ($request->has('price')) {
    //         $priceFilters = explode(',', $request->price);

    //         if (in_array('allprice', $priceFilters)) {  
    //         } else {
    //             $query->whereIn('price', $priceFilters);
    //         }
    //     }

    //     // Pagination
    //     $courses = $query->paginate(10);

    //     $courseCards = $courses->map(function ($course) {
    //         return view('components.course-card', ['course' => $course])->render();
    //     });

    //     return response()->json([
    //         'courseCards' => $courseCards,
    //         'currentPage' => $courses->currentPage(),
    //         'totalPages' => $courses->lastPage(),
    //     ]);
    // }


    public function courses(Request $request)
    {
        $query = Course::with('parent')
            ->whereNotNull('parent_id')
            ->where('status', 'active')
            ->orderByDesc('id');

        // Filter by categories (parent_id)
        if ($request->has('categories')) {
            $categoryIds = explode(',', $request->categories);
            $query->whereIn('parent_id', $categoryIds);
        }

        // Filter by skill level
        if ($request->has('skill_levels')) {
            $skillLevels = explode(',', $request->skill_levels);
            if (in_array('allskill', $skillLevels)) {
            } else {
                $query->whereIn('skill_level', $skillLevels);
            }
        }

        // Filter by price
        if ($request->has('price')) {
            $priceFilters = explode(',', $request->price);

            if (in_array('allprice', $priceFilters)) {  
            } else {
                $query->whereIn('price', $priceFilters);
            }
        }

                // Get course count for each skill level (Beginner, Intermediate, High)
            $beginnerCount = Course::where('skill_level', 'beginner')->count();
            $intermediateCount = Course::where('skill_level', 'intermediate')->count();
            $highCount = Course::where('skill_level', 'high')->count();

        // Pagination
        $courses = $query->paginate(10);

        $courseCards = $courses->map(function ($course) {
            return view('components.course-card', ['course' => $course])->render();
        });

        return response()->json([
            'courseCards' => $courseCards,
            'currentPage' => $courses->currentPage(),
            'totalPages' => $courses->lastPage(),
            'skillCounts' => [
                'beginner' => $beginnerCount,
                'intermediate' => $intermediateCount,
                'high' => $highCount
            ],
        ]);
    }



    public function categories()
    {
        $categories = Course::select('id', 'parent_id', 'name')
            ->whereNull('parent_id')
            ->where('status', 'active')
            ->withCount([
                'children as child_count' => function ($query) {
                    $query->where('status', 'active');
                }
            ])
            ->orderByDesc('id')
            ->limit(10)
            ->get();

        return response()->json($categories);
    }


    public function Homecategories()
    {
        $Homecategories = Course::select('id', 'name')
            ->whereNull('parent_id')
            ->where('status', 'active')
            ->latest()
            ->limit(6)
            ->get();
    
        return response()->json($Homecategories);
    }
    

    // public function sliderCourses(Request $request)
    // {
    //     $query = Course::with('parent')->whereNotNull('parent_id')->where('status', 'active')
    //         ->orderByDesc('id');
    
    //     if ($request->has('categories')) {
    //         $categoryIds = explode(',', $request->categories);
    //         $query->whereIn('parent_id', $categoryIds);
    //     }
    
    //     $courses = $query->get();
    
    //     // Debugging output
    //     Log::info('Fetched Courses:', $courses->toArray());
    
    //     return response()->json($courses);
    // }
    
    
    
    // public function sliderCourses(Request $request)
    // {
    //     $query = Course::with('parent')->whereNotNull('parent_id')->where('status', 'active')
    //         ->orderByDesc('id');

    //     if ($request->has('categories')) {
    //         $categoryIds = explode(',', $request->categories);
    //         $query->whereIn('parent_id', $categoryIds);
    //     }

    //     $courses = $query->get();

    //     // Loop through each course to add the full image path
    //     $courses->transform(function ($course) {
    //         // Assuming your images are stored under the 'public' folder, you can use storage_path or url helper.
    //         $course->image = asset($course->image);
    //         $course->thumbnail = asset($course->thumbnail);
    //         return $course;
    //     });

    //     // Debugging output
    //     Log::info('Fetched Courses:', $courses->toArray());

    //     return response()->json($courses);
    // }

    public function sliderCourses(Request $request)
{
    $query = Course::with('parent')->whereNotNull('parent_id')->where('status', 'active')->limit(10)->
        orderByDesc('id');

    if ($request->has('categories')) {
        $categoryIds = explode(',', $request->categories);
        $query->whereIn('parent_id', $categoryIds);
    }

    $courses = $query->get();

    // Loop through each course to add the full image path and parent category name
    $courses->transform(function ($course) {
        // Assuming your images are stored under the 'public' folder, you can use storage_path or url helper.
        $course->image = asset($course->image);
        $course->thumbnail = asset($course->thumbnail);

        // Add the parent category name to the course data
        if ($course->parent) {
            $course->category_name = $course->parent->name;
            $course->category_slug = $course->parent->slug;  // Add slug for the link
        } else {
            $course->category_name = 'No Parent Category'; // Default if no parent exists
            $course->category_slug = '#'; // Default slug if no parent
        }

        return $course;
    });

    // Debugging output
    Log::info('Fetched Courses:', $courses->toArray());

    return response()->json($courses);
}



}
