<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryReport extends Model
{
    use HasFactory;

    protected $fillable = ['days', 'salary', 'description', 'user_id', 'currency_id'];
}
