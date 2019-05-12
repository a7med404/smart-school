<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class EmpHoliday extends Model
{
    protected $fillable = [
        'emp_id',
        'holiday_id',
        'balance',
        'from',
        'to',
        'note'
    ];
}
