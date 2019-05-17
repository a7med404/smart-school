<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class EvaluationEmp extends Model
{
    protected $fillable = [
    'education_level',
    'department_id',
    'employee_id',
    'item_id',
    'real_degree',
    'degree',
    'date'
    ];
}
