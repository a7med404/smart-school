<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class EvaluationEmp extends Model
{
    protected $fillable = [
    'level_id',
    'department_id',
    'employee_id',
    'item_id',
    'real_degree',
    'degree',
    'date'
    ];
}
