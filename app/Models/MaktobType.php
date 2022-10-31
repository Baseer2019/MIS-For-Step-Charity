<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaktobType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    /**
     * Get all of the maktobs for the MaktobType
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function maktobs(): HasMany
    {
        return $this->hasMany(Maktob::class);
    }
}
