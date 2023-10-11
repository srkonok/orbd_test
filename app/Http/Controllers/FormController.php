<?php

namespace App\Http\Controllers;
use App\Models\FormData;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }


    public function create()
    {
        return view('form'); // Create a 'create.blade.php' view for your form
    }
    public function showForm()
    {
        return view('form'); // Replace 'form' with your actual view name
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'name_eng' => 'required|string|max:255',
            'fathers_name' => 'required|string|max:255',
            'fathers_name_eng' => 'required|string|max:255',
            'mothers_name' => 'required|string|max:255',
            'mothers_name_eng' => 'required|string|max:255',
            'spouse_name' => 'required|string|max:255',
            'spouse_name_eng' => 'required|string|max:255',
            'dob' => 'required|date',
            'religion' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'nid' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'tin' => 'required|string|max:255',
            'brn' => 'required|string|max:255',
            'present_address' => 'required|string|max:255',
            'division' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'upazila' => 'required|string|max:255',
            'permanent_address' => 'required|string|max:255',
        ]);

        // Create a new instance of the model and fill it with the validated data
        FormData::create($validatedData);

        // Optionally, you can return a success message or redirect to a success page
        return redirect()->route('display-rows')->with('success', 'Data inserted successfully!');
    }
}
