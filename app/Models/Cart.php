<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_rd',
        'price_rd',
        'date',
        'project',
        'barcode',
        'user_id',
    ];
}
