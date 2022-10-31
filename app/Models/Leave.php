<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $fillable = ['start_date', 'end_date', 'description', 'user_id', 'leave_type_id'];

    /**
     * Get the leaveType that owns the Leave
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function leaveType(): BelongsTo
    {
        return $this->belongsTo(Leave_type::class);
    }
}
