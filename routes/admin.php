<?php
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AdmissionController;
use App\Http\Controllers\Backend\CoursesController;
use App\Http\Controllers\Backend\UserProfileController;
use App\Http\Controllers\Backend\CenterController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});
Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


// Display user profile page
Route::get('profile', [UserProfileController::class, 'index'])->name('user.profile');
// Update user profile
Route::put('profile/update', [UserProfileController::class, 'updateProfile'])->name('user.profile.update');
// Update user profile password
Route::post('profile/update-password', [UserProfileController::class, 'updatePassword'])->name('user.profile.update.password');




Route::resource('courses', CoursesController::class);
Route::put('center/change-status', [CenterController::class, 'changeStatus'])->name('center.change-status');
Route::resource('center', CenterController::class);


Route::put('admission/change-status', [AdmissionController::class, 'changeStatus'])->name('admission.change-status');
Route::resource('admission', AdmissionController::class);