<?php

namespace Modules\Address\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Student;
use Modules\Employee\Entities\Employee;

class Identifcation extends Model
{
    protected $fillable = ['type','issue_date','issue_place','identable_id'];

    public function student()
    {
        return $this->belongsTo(Student::Class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::Class);
    }
}
