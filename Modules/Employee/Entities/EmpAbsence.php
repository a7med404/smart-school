<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Employee\Entities\Employee;

class EmpAbsence extends Model
{
    protected $fillable = [
        'empolyee_id',
        'absence_from',
        'absence_to',
        'absence_reason'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::Class,'empolyee_id');
    }

}
