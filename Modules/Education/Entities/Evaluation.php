<?php

namespace Modules\Education\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Employee\Entities\Employee;
use Modules\Student\Entities\Student;
use Modules\Education\Entities\Subject;

class Evaluation extends Model
{
    protected $fillable = ['student_id', 'subject_id', 'employee_id', 'for', 'ratio', 'note'];


    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
