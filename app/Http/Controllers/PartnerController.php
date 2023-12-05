<?php

// App\Http\Controllers\YourController.php

use App\Models\Partner;
use Illuminate\Http\Request;

class YourController extends Controller
{
    public function storePartner(Request $request)
    {
        $request->validate([
            'name_company' => 'required|string|max:255',
            'function_company' => 'required|string|max:255',
            'description' => 'required|string',
            'adress' => 'required|string|max:255',
            'email_company' => 'required|email|max:255',
            'website' => 'required|string|max:255',
            'fax' => 'required|string|max:255',
            'logo' => 'nullable|string|max:255',
        ]);

        Partner::create([
            'name_company' => $request->input('name_company'),
            'function_company' => $request->input('function_company'),
            'description' => $request->input('description'),
            'adress' => $request->input('adress'),
            'email_company' => $request->input('email_company'),
            'website' => $request->input('website'),
            'fax' => $request->input('fax'),
            'logo' => $request->input('logo'),
        ]);

        return redirect()->back()->with('success', 'Partner added successfully');
    }
}

