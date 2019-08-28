<?php

namespace Modules\Finance\Entities;

use Illuminate\Database\Eloquent\Model;

class ClassroomPayClass extends Model
{
    protected $fillable = [
        'classroom_id',
        'pay_class_id'
    ];
}
