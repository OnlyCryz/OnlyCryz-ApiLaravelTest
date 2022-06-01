<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'model',
        'manufacturing_date',
        'expiration_date',
        'description',
        'manufacturer',
        'available_quantity',
    ];
}
