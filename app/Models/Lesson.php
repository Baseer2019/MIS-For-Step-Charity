<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id', 'course_id', 'attendance_id'];

    public function assingments()
    {
        return $this->hasMany(Assignment::class);
    }
}
