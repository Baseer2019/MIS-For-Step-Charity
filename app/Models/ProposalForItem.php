<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProposalForItem extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'verified_by_branch_director', 'verified_by_branch_admin',
    'verified_by_main_branch_director', 'verified_by_main_branch_admin', 'verified_by_general_office_finance',
    'verified_by_general_office_director', 'upload_file', 'user_id'];

    /**
     * Get the user that owns the ProposalForItem
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
