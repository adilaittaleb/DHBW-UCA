<?php

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



// Home Controller : Navigate in the Front Office 
    Route::get('/', function () {
        return view('front.index');
    });







// Admin Controller : Navigate in the back Controller 
    Route::get('/admin', function () {
        return view('back.index');
    });
    Route::get('/students', function () {
        return view('back.students');
    });
    Route::get('/teachers', function () {
        return view('back.teachers');
    });
    Route::get('/exchanges', function () {
        return view('back.exchanges');
    });
    Route::get('/workshops', function () {
        return view('back.workshops');
    });
    Route::get('/projects', function () {
        return view('back.projects');
    });
    Route::get('/fablabs', function () {
        return view('back.teachers');
    });
    Route::get('/programs', function () {
        return view('back.teachers');
    });

