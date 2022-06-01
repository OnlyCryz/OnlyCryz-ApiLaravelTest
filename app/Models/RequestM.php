<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestM extends Model
{
    use HasFactory;
    protected $fillable = [
        'role_user_id',
        'summary',
        'description',
        'version',
        'start_use_date',
        'end_use_date',
        'exploratory_document',
        'reporting_status_document',
    ];
}
