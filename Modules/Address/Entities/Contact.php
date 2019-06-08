<?php

namespace Modules\Address\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Student;
use Modules\Employee\Entities\Employee;

class Contact extends Model
{
    protected $fillable = ['number_1', 'number_2', 'email', 'note', 'contactable_id', 'contactable_type'];

    public function student()
    {
        return $this->belongsTo(Student::Class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::Class);
    }

    public function contactable()
    {
        return $this->morphTo();
    }
}
