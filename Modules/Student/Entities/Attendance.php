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
        // 'note'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
