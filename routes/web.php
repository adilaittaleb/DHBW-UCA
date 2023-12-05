<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;


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




// Home Controller : Navigate in the Front Office 
Route::get('/',[HomeController::class, 'index']);
Route::get('/exchange_students',[HomeController::class, 'exchange_students']);
Route::get('/students_profiles',[HomeController::class, 'students_profiles']);
Route::get('/faculty_staff_exchange',[HomeController::class, 'faculty_staff_exchange']);
Route::get('/internships',[HomeController::class, 'internships']);
Route::get('/workshop',[HomeController::class, 'workshop']);
Route::get('/research_projects',[HomeController::class, 'research_projects']);
Route::get('/program',[HomeController::class, 'program']);
Route::get('/academic_programs',[HomeController::class, 'academic_programs']);
Route::get('/cultural_programs',[HomeController::class, 'cultural_programs']);
Route::get('/achievements',[HomeController::class, 'achievements']);
Route::get('/partners',[HomeController::class, 'partners']);
Route::get('/login',[HomeController::class, 'login']);
Route::get('/about',[HomeController::class, 'about']);
Route::get('/news',[HomeController::class, 'news']);







// Admin Controller : Navigate in the back Controller 
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/exchanges', [AdminController::class, 'exchanges'])->name('exchanges');
Route::get('/workshops', [AdminController::class, 'workshops'])->name('workshops');
Route::get('/projects', [AdminController::class, 'projects'])->name('projects');
Route::get('/fablabs', [AdminController::class, 'fablabs'])->name('fablabs');
Route::get('/programs', [AdminController::class, 'programs'])->name('programs');


// Teacher Part 
Route::get('/teachers', [AdminController::class, 'teachers'])->name('teachers');
Route::delete('/teacher-deleteRoute/{teacher}', [TeacherController::class, 'destroy'])->name('teachers.destroy');
Route::post('teachers.add', [TeacherController::class, 'store'])->name('teachers.add');

// Student Part 
Route::get('/students', [AdminController::class, 'students'])->name('students');
Route::delete('/student-deleteRoute/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::post('students.add', [StudentController::class, 'store'])->name('students.add');


