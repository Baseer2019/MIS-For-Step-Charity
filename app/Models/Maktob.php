<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maktob extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'status_for_sending', 'reference_to', 'maktob_type_id'];

    /**
     * Get the maktobType that owns the Maktob
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function maktobType(): BelongsTo
    {
        return $this->belongsTo(MaktobType::class);
    }
}
