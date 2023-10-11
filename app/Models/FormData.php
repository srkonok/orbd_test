<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    protected $table = 'user_table'; // Specify the table name

    protected $fillable = [
        'name',
        'name_eng',
        'fathers_name',
        'fathers_name_eng',
        'mothers_name',
        'mothers_name_eng',
        'spouse_name',
        'spouse_name_eng',
        'dob',
        'religion',
        'gender',
        'nid',
        'occupation',
        'nationality',
        'tin',
        'brn',
        'present_address',
        'division',
        'district',
        'upazila',
        'permanent_address',
    ];
    

    // Define any additional model-specific methods or relationships here
}
