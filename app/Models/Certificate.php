<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'user_id', 'course_id', 'certificate_type_id'];


    public function certificateType()
    {
        return $this->belongsTo(CertificateType::class);
    }

}
