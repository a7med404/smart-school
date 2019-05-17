<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class RewardsPunition extends Model
{
    protected $fillable = [
        'finance_year',
        'date',
        'managament_id',
        'department_id',
        'type',
        'employee_id',
        'value',
        'reason'
    ];
}
