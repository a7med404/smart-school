<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Student;

class Health extends Model
{
    protected $fillable =  ['doctor_name', 'doctor_number', 'blood_type', 'insurance_number', 'health_status'];

    public function student()
    {
        return $this->belongsTo(Student::Class);
    }
}
