<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    protected $table = 'form_data'; // Specify the table name

    protected $fillable = [
        'name',
        'email',
        'gender',
        // Add other columns here as needed
    ];

    // Define any additional model-specific methods or relationships here
}
