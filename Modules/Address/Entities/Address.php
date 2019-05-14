<?php

namespace Modules\Address\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Employee\Entities\Employee;
use Modules\Student\Entities\Student;

class Address extends Model
{
    protected $fillable = ['street_1', 'street_2', 'city', 'local', 'home_number'];

    public function student()
    {
        return $this->belongsTo(Student::Class, 'id', 'address_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::Class, 'id', 'address_id');
    }
}
