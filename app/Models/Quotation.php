<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'quality', 'price', 'bill_image', 'discount', 'status_for_buying',
     'general_office_status',
    'financial_status_afg', 'currency_id', 'proposalForItem_id'];
}
