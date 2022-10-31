<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'father_name',
        'primary_phone_number',
        'whatsapp_number',
        'id_card_number',
        'gender',
        'marital_status',
        'date_of_birth',
        'branch_id',
        'email',
        'photo',
        'mosque_name',
        'description',
        'original_location',
        'current_location',
        'question_one',
        'question_two',
        'question_three',
        'question_four',
        'status',
        'course_id',
    ];

    /**
     * Get the branches that owns the Survey
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function branches(): BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }
}
