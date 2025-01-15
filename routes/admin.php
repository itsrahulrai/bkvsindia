<?php
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AdmissionController;
use App\Http\Controllers\Backend\CoursesController;
use App\Http\Controllers\Backend\UserProfileController;
use App\Http\Controllers\Backend\CenterController;
use App\Http\Controllers\Backend\CertificateController;
use App\Http\Controllers\Backend\GenrateMarksheetController;
use App\Http\Controllers\Backend\MarksheetController;
use App\Http\Controllers\Backend\SubjectController;
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

Route::resource('subject', SubjectController::class);

Route::get('certificate/{id}/', [CertificateController::class, 'generateCertificate'])->name('generate.certificate');



Route::get('marksheet/1st-year/{id}', [MarksheetController::class, 'firstYear'])->name('marksheets.firstYear');
Route::get('marksheet/2st-year/{id}', [MarksheetController::class, 'secondYear'])->name('marksheets.secondYear');


Route::get('certificates/{id}', [MarksheetController::class, 'certificate'])->name('certificates');

// Route::get('marksheets/{id}', [MarksheetController::class, 'showYear'])->name('marksheets.showYear');


// Route::get('certificates', [MarksheetController::class, 'certificate'])->name('certificate.print');


Route::get('generate-marksheet-one-year/{id}', [GenrateMarksheetController::class, 'generateMarksheetOneYear'])->name('generateMarksheetOneYear');
Route::get('generate-marksheet-two-year/{id}', [GenrateMarksheetController::class, 'generateMarksheetTwoYear'])->name('generateMarksheetTwoYear');


// Route::get('generate-marksheet/{id}', [MarksheetController::class, 'marksheet'])->name('marksheet');


Route::put('marksheet/change-status', [GenrateMarksheetController::class, 'changeStatus'])->name('marksheet.change-status');
Route::resource('marksheet', GenrateMarksheetController::class);
