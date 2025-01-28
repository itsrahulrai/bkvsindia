<?php
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CoursesController;
use App\Http\Controllers\Backend\FrenchiesController;
use App\Http\Controllers\Backend\UserProfileController;
use App\Http\Controllers\Frenchies\CenterController;
use App\Http\Controllers\Frenchies\FrenchiesLoginController;
use App\Http\Controllers\Frenchies\FrenchiesStudentController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('frenchies.dashboard');
});
Route::get('dashboard', [FrenchiesController::class, 'dashboard'])->name('dashboard');

Route::put('admission/change-status', [FrenchiesStudentController::class, 'changeStatus'])->name('admission.change-status');
Route::resource('admission', FrenchiesStudentController::class);

Route::post('logout', [FrenchiesLoginController::class, 'logout'])->name('logout');



Route::resource('center', CenterController::class);





// Display user profile page
Route::get('profile', [UserProfileController::class, 'index'])->name('user.profile');
// Update user profile
Route::put('profile/update', [UserProfileController::class, 'updateProfile'])->name('user.profile.update');
// Update user profile password
Route::post('profile/update-password', [UserProfileController::class, 'updatePassword'])->name('user.profile.update.password');



