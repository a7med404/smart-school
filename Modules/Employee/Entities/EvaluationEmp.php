<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class EvaluationEmp extends Model
{
    protected $fillable = [
    'education_level',
    'dept_id',
    'emp_id',
    'item_id',
    'real_degree',
    'degree',
    'date'
    ];
}
