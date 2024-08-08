<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CourseteacherController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [HomeController::class,'welcome']);
// Route::get('/home',[HomeController::class,'index']);
// Route::get('/Display',[HomeController::class,'view']);
// Route::get('/',function(){
//     return view('home');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/search',[SearchController::class,'search'])->name('search');
Route::resource('/students', StudentController::class);
Route::resource('/teachers', TeacherController::class);
Route::resource('/courses',CourseController::class);
Route::resource('/payments', PaymentController::class);
Route::resource('/enrolls',EnrollmentController::class);
Route::resource('/courseteachers',CourseteacherController::class);
// Route::resource('students', 'StudentController');
// Route::resource('courses', 'CourseController');
// Route::resource('teachers', 'TeacherController');
// Route::resource('enrollments', 'EnrollmentController');
// Route::resource('payments', 'PaymentController');
//Route::get('/', [HomeController::class, 'index']);

