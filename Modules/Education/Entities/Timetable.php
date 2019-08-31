<?php

namespace Modules\Education\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Employee\Entities\Employee;
use Modules\Education\Entities\Subject;
use Modules\Student\Entities\Part;

class Timetable extends Model
{
    protected $fillable = ['employee_id', 'day', 'subject_id', 'subject_number', 'time', 'part_id'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function part()
    {
        return $this->belongsTo(Part::class);
    }
}
