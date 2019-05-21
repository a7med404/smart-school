<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Classroom;

class PayClass extends Model
{
    protected $fillable = [
        'value',
        'pay_rul_id',
        'level_id',
        'classroom_id',
        'academic_year'
    ];
        
    public function Classrooms()
    {

        return $this->belongsTo(Classroom::Class);
    }
}
