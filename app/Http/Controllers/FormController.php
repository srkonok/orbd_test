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

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'gender' => 'required|in:Male,Female',
        ]);
        $formData = new FormData;
        $formData->name = $validatedData['name'];
        $formData->email = $validatedData['email'];
        $formData->gender = $validatedData['gender'];
        $formData->save();
        // Process the form data as needed (e.g., save to a database)

        return "Form submitted successfully!<br>Name: {$validatedData['name']}<br>Email: {$validatedData['email']}<br>Gender: {$validatedData['gender']}";
        // return redirect()->route('success')->with('success', 'Form submitted successfully!');

    }
}
