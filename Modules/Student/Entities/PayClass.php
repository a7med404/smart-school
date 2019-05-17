<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Classroom;

class PayClass extends Model
{
    protected $fillable = ['classroom_id'];
        
    public function Classrooms()
    {
        return $this->belongsTo(Classroom::Class);
    }
}
