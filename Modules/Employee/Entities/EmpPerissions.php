<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class EmpPerissions extends Model
{
    protected $fillable = [
        'manage_id',
        'dept_id',
        'emp_id',
        'perission_id',
        'from_houre',
        'to_houre',
        'date',
        'note'
    ];
}
