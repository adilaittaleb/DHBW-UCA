<?php
// App\Http\Controllers\YourController.php

use App\Models\Internship;
use Illuminate\Http\Request;

class IntershipController extends Controller
{
    public function storeInternship(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'date_start' => 'required|date',
            'date_end' => 'required|date',
            'company' => 'required|string|max:255',
            'partner_id' => 'nullable|exists:partners,id',
        ]);

        Internship::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'date_start' => $request->input('date_start'),
            'date_end' => $request->input('date_end'),
            'company' => $request->input('company'),
            'partner_id' => $request->input('partner_id'),
        ]);

        return redirect()->back()->with('success', 'Internship added successfully');
    }
}