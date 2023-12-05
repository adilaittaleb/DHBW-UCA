<?php
// app/Http/Controllers/AdminController.php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Student;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('back.index');
    }

    public function students()
    {
        $students = Student::all();
        return view('back.students',compact('students'));
    }

    public function teachers()
    {
        $teachers = Teacher::all();
        return view('back.teachers',compact('teachers'));
    }

    public function exchanges()
    {
        return view('back.exchanges');
    }

    public function workshops()
    {
        return view('back.workshops');
    }

    public function projects()
    {
        return view('back.projects');
    }

    public function fablabs()
    {
        return view('back.fablabs');
    }

    public function programs()
    {
        return view('back.programs');
    }
}
