<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\FrenchiesController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Models\Page;

// Route::get('/', function () {
//     return view('front/index');
// })->name('home');

Route::get('/', function () {
    return view('welcome');
})->name('home');










Route::view('contact', 'front.contact')->name('contact');


require __DIR__.'/auth.php';



Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('frenchies/login', [FrenchiesController::class, 'login'])->name('frenchies.login');

// Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
/* ======= Website  Routes  ========== */





/* ======= Frontend Website  Routes Start  ========== */






/* ======= Frontend Website  Routes End  ========== */



