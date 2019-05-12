<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class AddCalend extends Model
{
    protected $fillable = [
        'manage_id',
        'dept_id',
        'celand_name',
        'date'
    ];
}
