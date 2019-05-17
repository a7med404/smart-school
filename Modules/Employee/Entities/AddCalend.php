<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class AddCalend extends Model
{
    protected $fillable = [
        'managament_id',
        'department_id',
        'celand_name',
        'date'
    ];
}
