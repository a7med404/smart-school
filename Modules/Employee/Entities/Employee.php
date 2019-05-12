<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'full_name',
        'gender',
        'religion',
        'birth_date',
        'identification_number',
        'manage_id',
        'dept_id',
        'hiring_date',
        'job_title',
        'martial_status',
        'start_date',
        'emploee_level',
        'join_year',
        'picture',
        'note'

    ];
}
