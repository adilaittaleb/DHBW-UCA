<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return back()->with('success', 'Teacher deleted successfully.');
    }


    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'speciality' => 'required|string|max:255',
            'nationnality' => 'required|string|max:255',
            'university' => 'required|string|in:UCA,DHBW',
            'email_teacher' => 'required|email|max:255|unique:teachers,email_teacher',
        ]);
        $photo = $request->file('photo');
        $filename = time() . '_' . $photo->getClientOriginalName();
        $photo->storeAs('public/teachers/', $filename);
        $teacher = new Teacher();
        $teacher->firstname = $request->input('firstname');
        $teacher->lastname = $request->input('lastname');
        $teacher->speciality = $request->input('speciality');
        $teacher->nationnality = $request->input('nationnality');
        $teacher->university = $request->input('university');
        $teacher->email_teacher = $request->input('email_teacher');
        $teacher->phone_number = $request->input('phone_number');
        $teacher->photo = $filename;
        $teacher->save();
        return redirect()->back()->with('success', 'Teacher added successfully');
    }
}
