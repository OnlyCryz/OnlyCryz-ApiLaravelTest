<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'university', 'career'];

    public function getCarrerAttribute()
    {
        return substr($this->career, 0, 120);
    }

    public function getPublishedAtAttribute()
    {
        Carbon::setLocale('es');
        return $this->created_at->diffForHumans();
    }

    public function getEditedAtAttribute()
    {
        Carbon::setLocale('es');
        return $this->updated_at->diffForHumans();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
