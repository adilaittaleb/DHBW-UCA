<?php


// App\Http\Controllers\YourController.php

use App\Models\Exchange;
use Illuminate\Http\Request;

class Exchangecontroller extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'date_start' => 'required|date',
            'date_end' => 'required|date',
            'type' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Event::create([
            'date_start' => $request->input('date_start'),
            'date_end' => $request->input('date_end'),
            'type' => $request->input('type'),
            'description' => $request->input('description'),
        ]);

        return redirect()->back()->with('success', 'Event added successfully');
    }
}
