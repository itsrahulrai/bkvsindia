<?php

use App\Http\Controllers\Api\WebsiteApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('courses', [WebsiteApiController::class, 'courses'])->name('courses');
Route::get('categories', [WebsiteApiController::class, 'categories'])->name('categories');
Route::get('home-categories', [WebsiteApiController::class, 'Homecategories'])->name('home.categories');

Route::get('slider-courses', [WebsiteApiController::class, 'sliderCourses'])->name('slider.courses');

