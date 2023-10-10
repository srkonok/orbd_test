<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableName; // Import your Eloquent model

class YourControllerName extends Controller
{
    public function displayRows()
    {
        // Use the Eloquent model to retrieve all rows from the database
        $rows = TableName::all();

        // Pass the retrieved rows to a view for display
        return view('rows.index', ['rows' => $rows]);
    }
}
