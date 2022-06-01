<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnologicalChoise extends Model
{
    use HasFactory;

    protected $fillable = [
        'request_id',
        'payment_method_id',
        'name',
        'brand',
        'model',
        'referential_value',
        'quotation_document',
    ];
}
