<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remittance extends Model
{
    use HasFactory;

    protected $fillable = ['date_of_remittance', 'date_of_receive', 'remittance_number', 'amount',
     'status_of_receive',
    'currency_id', 'receiver_id', 'sender_id'];

    public function sender()
    {
        $this->belongsTo(User::class, 'sender_id');
    }

    public function receiver()
    {
        $this->belongsTo(User::class, 'receiver_id');
    }

}
