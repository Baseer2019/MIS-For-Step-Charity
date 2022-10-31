<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGuarantee extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'user_id', 'survey_id', 'relation_id'];
    
}
