<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\FrenchiesController;
use App\Http\Controllers\Frenchies\FrenchiesLoginController;
use App\Http\Controllers\Frontend\AdmissionController;
use App\Http\Controllers\Frontend\CoursesDisplayController;
use App\Http\Controllers\Frontend\FranchiseApplyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\AdmissionLoginController;
use App\Http\Controllers\Users\UserDashboardController;
use App\Http\Controllers\Users\StudentLoginController;


// Student Login
Route::post('student/login', [StudentLoginController::class, 'login'])->name('student.login');
// Frenchies Login
Route::post('frenchies/login', [FrenchiesLoginController::class, 'login'])->name('frenchies.login');

Route::middleware(['auth:student'])->prefix('student')->name('student.')->group(function () {
    Route::get('dashboard', [StudentLoginController::class, 'dashboard'])->name('dashboard');
    Route::get('my-profile', [UserDashboardController::class, 'myProfile'])->name('my-profile');
    Route::get('id-card', [UserDashboardController::class, 'idCard'])->name('id-card');
    Route::get('setting', [UserDashboardController::class, 'setting'])->name('setting');
    Route::put('update/{id}', [UserDashboardController::class, 'updateProfile'])->name('update');
    Route::post('update-password', [UserDashboardController::class, 'updatePassword'])->name('password.update');
    Route::post('logout', [StudentLoginController::class, 'logout'])->name('logout');
    Route::get('student/result', [UserDashboardController::class, 'result'])->name('result');

    Route::get('marksheet/1st-year/{id}', [UserDashboardController::class, 'firstYear'])->name('marksheets.firstYear');
    Route::get('marksheet/2nd-year/{id}', [UserDashboardController::class, 'secondYear'])->name('marksheets.secondYear');

});



Route::get('student-zone/online-admission', [AdmissionController::class, 'create'])->name('online-admission');
Route::post('get-subcourses', [AdmissionController::class, 'getSubcourses'])->name('get.subcourses');
Route::post('online-admission/store', [AdmissionController::class, 'store'])->name('admission.store');


Route::post('franchise-apply', [FranchiseApplyController::class, 'franchiseApply'])->name('franchise.apply');

// Route::get('all-courses', [CoursesDisplayController::class, 'index'])->name('all-courses');


Route::get('courses/{slug}', [CoursesDisplayController::class, 'courseDetails'])->name('course-details');

// Route::get('courses/course-details/{slug}', function(){
//     return view('front.courses.course-details');
// })->name('course-details');


// Courses Route

Route::get('all-courses', function(){
    return view('front.courses.all-cources');
})->name('all-courses');




Route::get('/', function () {
    return view('front.index');
})->name('home');

Route::get('apply-franchise', function () {
    return view('front.apply-franchise');
})->name('apply-franchise');

Route::get('apply-for-certificate', function () {
    return view('front.apply-for-certificate');
})->name('apply-for-certificate');

Route::get('center-login', function () {
    return view('front.center-login');
})->name('center-login');

Route::get('contact-us', function () {
    return view('front.contact-us');
})->name('contact-us');





Route::get('student/enrolled-courses', function () {
    return view('front.user.enrolled-courses');
})->name('enrolled');

Route::get('student/certificate', function () {
    return view('front.user.certificate');
})->name('certificate');





Route::get('student/admin-card', function () {
    return view('front.user.admit-card');
})->name('admit-card');

Route::get('student/setting', function () {
    return view('front.user.setting');
})->name('setting');

// about us

Route::get('director-messages', function () {
    return view('front.about.director-messages');
})->name('director-messages');

Route::get('about-us', function () {
    return view('front.about.about-us');
})->name('about-us');

Route::get('why-us', function () {
    return view('front.about.why-us');
})->name('why-us');

Route::get('vision-mission', function () {
    return view('front.about.vision-mission');
})->name('vision-mission');

Route::get('disclaimer-center', function () {
    return view('front.about.disclaimer-center');
})->name('disclaimer-center');




// Certificate

Route::get('certificate/mhrd-letter', function(){
    return view('front.certificate.mhrd-letter');
})->name('mhrd-letter');

Route::get('certificate/qci', function(){
    return view('front.certificate.qci');
})->name('qci');

Route::get('certificate/iso', function(){
    return view('front.certificate.iso');
})->name('iso');

Route::get('certificate/mhrd-letter-govt-of-india', function(){
    return view('front.certificate.mhrd-letter-govt-of-india');
})->name('mhrd-letter-govt-of-india');

Route::get('certificate/niesbud-certification', function(){
    return view('front.certificate.niesbud-certification');
})->name('niesbud-certification');

Route::get('certificate/central-vigilance-commission', function(){
    return view('front.certificate.central-vigilance-commission');
})->name('central-vigilance-commission');

Route::get('certificate/msde-aiiros', function(){
    return view('front.certificate.msde-aiiros');
})->name('msde-aiiros');

Route::get('certificate/human-rights-aiiros', function(){
    return view('front.certificate.human-rights-aiiros');
})->name('human-rights-aiiros');

Route::get('certificate/ministry-of-labour', function(){
    return view('front.certificate.ministry-of-labour');
})->name('ministry-of-labour');

Route::get('certificate/women', function(){
    return view('front.certificate.women');
})->name('women');



Route::get('student-zone/center-benefit', function(){
    return view('front.student-zone.center-benefit');
})->name('center-benefit');

Route::get('student-zone/panelexam', function(){
    return view('front.student-zone.panelexam');
})->name('panelexam');

Route::get('certificate/application-form', function(){
    return view('front.certificate.application-form');
})->name('application-form');

Route::get('certificate/prospectus', function(){
    return view('front.certificate.prospectus');
})->name('prospectus');

Route::get('photo-gallery', function(){
    return view('front.gallery');
})->name('photo-gallery');

// Teacher Sectiom

Route::get('faculty', function(){
    return view('front.faculty');
})->name('faculty');

// Blog Section

Route::get('blog', function(){
    return view('front.blog.blogs');
})->name('blog');

Route::get('blog-details', function(){
    return view('front.blog.blog-details');
})->name('blog-details');





Route::view('contact', 'front.contact')->name('contact');


require __DIR__.'/auth.php';



Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('frenchies/login', [FrenchiesController::class, 'login'])->name('frenchies.login');

// Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
/* ======= Website  Routes  ========== */





/* ======= Frontend Website  Routes Start  ========== */






/* ======= Frontend Website  Routes End  ========== */





