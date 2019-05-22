<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class Resignation extends Model
{
    protected $fillable = [
        'employee_id',
        'applicant_to',
        'reason'
    ];
}
