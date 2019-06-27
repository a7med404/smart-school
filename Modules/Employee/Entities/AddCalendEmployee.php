<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class AddCalendEmployee extends Model
{
    protected $table="add_calends";
    protected $fillable = [
        'employee_id',
        'managament_id',
        'department_id',
        'calend_id'
    ];
}
