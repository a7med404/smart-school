<?php

namespace Modules\Employee\Entities;

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
}
