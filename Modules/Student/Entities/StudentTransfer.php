<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Student;

class StudentTransfer extends Model
{
    protected $fillable = [
        'student_id',
        'transfer_to',
        'duration',
        'payment_status'                        
    ];

    public function student()
    {
        return $this->belongsTo(Student::Class);
    }
}
