<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Student;

class Attendance extends Model
{
    protected $fillable = [
        'date',
        'status',
        'student_id',
        'note'
    ];
    
    public function students()
    {
        return $this->belongsToMany(Student::Class, 'attendance_student', 'student_id', 'attendance_id');
    }
}
