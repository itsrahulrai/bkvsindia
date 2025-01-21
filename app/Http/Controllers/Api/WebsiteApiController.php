<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\View\Components\CourseCard;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebsiteApiController extends Controller
{
    public function courses(Request $request)
    {
        $query = Course::with('parent')->whereNotNull('parent_id')
            ->where('status', 'active')
            ->orderByDesc('id');

        if ($request->has('categories')) {
            $categoryIds = explode(',', $request->categories);
            $query->whereIn('parent_id', $categoryIds); 
        }

        $courses = $query->limit(10)->paginate(2);

        $courseCards = $courses->map(function ($course) {
            return view('components.course-card', ['course' => $course])->render();
        });

        return response()->json([
            'courseCards' => $courseCards,
            'currentPage' => $courses->currentPage(),
            'totalPages' => $courses->lastPage(),
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
    


}
