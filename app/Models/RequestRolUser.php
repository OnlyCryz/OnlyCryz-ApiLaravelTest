<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestRolUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'request_id',
        'role_user_id',
        'state_id',
        'reason',
    ];
}
