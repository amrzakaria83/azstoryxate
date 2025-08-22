<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact_request extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name_ar', 
        'name_en',
        'email',
        'phone',
        'message',
        'course',
        'from_time',
        'time', // 0 = 1 hour , 1 = 2 hour,2 = 3 hour ,3 = 4 hour
        'action', //0 = active - 1 = prepayed - 2 = done - 3 = cancelled- 4 = requested - 5 = Unavillable
        'age',
        'marital_status',
        'status',
        'qualification',
        'job',
        
    ];
}
