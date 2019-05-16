<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Employee\Entities\Employee;

class EmpAbsence extends Model
{
    protected $fillable = [];

    public function employee()
    {
        return $this->belongsTo(Employee::Class);
    }
}
