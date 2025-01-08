<?php
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CoursesController;
use App\Http\Controllers\Backend\FrenchiesController;
use App\Http\Controllers\Backend\UserProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('frenchies.dashboard');
});
Route::get('dashboard', [FrenchiesController::class, 'dashboard'])->name('dashboard');




// Display user profile page
Route::get('profile', [UserProfileController::class, 'index'])->name('user.profile');
// Update user profile
Route::put('profile/update', [UserProfileController::class, 'updateProfile'])->name('user.profile.update');
// Update user profile password
Route::post('profile/update-password', [UserProfileController::class, 'updatePassword'])->name('user.profile.update.password');



