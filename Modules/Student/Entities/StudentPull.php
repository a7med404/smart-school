<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Student;

class StudentPull extends Model
{
    protected $fillable = [
        'student_id',
        'pull_date',
        'reason'
    ];

    public function student()
    {
        return $this->belongsTo(Student::Class);
    }
}