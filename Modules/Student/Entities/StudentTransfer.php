<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class StudentTransfer extends Model
{
    protected $fillable = [
        'student_id',
        'transfer_to',
        'duration',
        'payment_status'                        
    ];
}
