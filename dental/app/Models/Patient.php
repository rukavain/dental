<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'gender',
        'date_of_birth',
        'facebook_name',
        'package',
        'phone_number',
        'date_of_next_visit',
        'address'
    ];
}
