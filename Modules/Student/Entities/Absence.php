<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Student;

class Absence extends Model
{
    protected $fillable = [
        'student_id',
        'absence_from',
        'absence_to',
        'absence_reason'
    ];

    public function student()
    {
        return $this->belongsTo(Student::Class);
    }
}