<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagTool extends Model
{
    use HasFactory;

    protected $fillable = [
        'tag_id',
        'tool_id',
    ];
}
