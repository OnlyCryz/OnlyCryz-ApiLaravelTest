<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolUserTool extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_user_id',
        'state_id',
        'tool_id',
        'reason',
    ];
}
