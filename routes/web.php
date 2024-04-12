<?php

use App\Http\Controllers\CollageController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EducationYearController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [CourseController::class, 'listAllCourses']);


Route::resource('/teachers', TeacherController::class);
Route::resource('/subjects', SubjectController::class);
Route::resource('/collages', CollageController::class);
Route::resource('/education_years', EducationYearController::class);
Route::resource('/departments', DepartmentController::class);
Route::resource('/levels', LevelController::class);
Route::get('/courses/list-all-courses', [CourseController::class, 'listAllCourses'])->name('courses.list-all-courses');
Route::resource('/courses', CourseController::class);
Route::get('references/course-references/{id}', [ReferenceController::class, 'courseReferences'])->name('references.course-references');
Route::get('references/references-download/{id}', [ReferenceController::class, 'downloadReference'])->name('references.references-download');
Route::resource('/references', ReferenceController::class);
