<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData; // Import your Eloquent model

class YourControllerName extends Controller
{
    public function displayRows()
    {
        // Use the Eloquent model to retrieve all rows from the database
        $rows = FormData::all();

        // Pass the retrieved rows to a view for display
        return view('index', ['rows' => $rows]);
    }
    public function edit($id)
    {
        // Retrieve the record you want to edit by its ID
        $user= FormData::find($id);

        // Check if the record exists
        if (!$user) {
            return redirect()->route('display-rows')->with('error', 'User not found');
        }

        // Return a view with the record data
        return view('edit', compact('user'));
    }
    public function update(Request $request, $id)
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

    // Find the record to update by its ID
    $record = FormData::find($id);

    // Check if the record exists
    if (!$record) {
        // Handle the case where the record is not found, e.g., show an error message or redirect
    }

    // Update the record with the validated data
    $record->update($validatedData);

    // Redirect to a success page or route
    return redirect()->route('display-rows')->with('success', 'Record updated successfully!');
}
public function destroy($id)
{
    // Find the record to delete by its ID
    $record = FormData::find($id);

    // Check if the record exists
    if (!$record) {
        // Handle the case where the record is not found, e.g., show an error message or redirect
    }

    // Delete the record
    $record->delete();

    // Redirect to a success page or route
    return redirect()->route('display-rows')->with('success', 'Record deleted successfully!');
}
}
