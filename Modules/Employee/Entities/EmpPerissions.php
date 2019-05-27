<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class EmpPerissions extends Model
{
    protected $fillable = [
        'managament_id',
        'department_id',
        'employee_id',
        'perission_id',
        'from_hour',
        'to_hour',
        'date',
        'note'
    ];
}
