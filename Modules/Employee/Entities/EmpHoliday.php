<?php

namespace Modules\Employee\Entities;
use Modules\Employee\Entities\Employee;

use Illuminate\Database\Eloquent\Model;

class EmpHoliday extends Model
{
    protected $fillable = [
        'employee_id',
        'add_holiday_id',
        'balance',
        'from',
        'to',
        'note'
    ];


     public function Employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
