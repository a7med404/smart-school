<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class AddCalendEmployee extends Model
{
    protected $fillable = [
        'employee_id',
        'calend_id'
    ];
}
