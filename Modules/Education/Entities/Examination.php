<?php

namespace Modules\Education\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Employee\Entities\Employee;
use Modules\Student\Entities\Student;
use Modules\Education\Entities\Subject;
use Modules\Student\Entities\Part;

// use Modules\Student\Entities\Level;
// use Modules\Student\Entities\Classroom;

class Examination extends Model
{
    protected $fillable = ['student_id', 'subject_id', 'employee_id', 'type', 'ratio', /*'level_id', 'classroom_id',*/ 'part_id'];
    
    // public function level()
    // {
    //     return $this->belongsTo(Level::class);
    // }

    // public function classroom()
    // {
    //     return $this->belongsTo(Classroom::class);
    // }

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

    public function part()
    {
        return $this->belongsTo(Part::class);
    }
}
