<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class AddCalend extends Model
{
    protected $fillable = [
        'management_id',
        'department_id',
        'employee_id',
        'calend_id',
        'date',
        'type'
    ];
}  
