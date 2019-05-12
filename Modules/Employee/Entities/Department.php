<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'manage_id',
        'name'
    ];
}
