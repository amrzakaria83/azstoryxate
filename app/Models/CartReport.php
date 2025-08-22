<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_rd',
        'price_rd',
        'qty',
        'project',
        'user_id',
    ];
}
