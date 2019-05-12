<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class RewardsPunition extends Model
{
    protected $fillable = [
        'finance_year',
        'date',
        'manage_id',
        'dept_id',
        'type',
        'emp_id',
        'value',
        'reason'
    ];
}
