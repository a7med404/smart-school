<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class EmpPerissionName extends Model
{
    protected $fillable = [
        'name',
        'discount'
    ];
}
