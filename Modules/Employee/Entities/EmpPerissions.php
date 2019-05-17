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
        'from_houre',
        'to_houre',
        'date',
        'note'
    ];
}
