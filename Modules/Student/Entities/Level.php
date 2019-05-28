<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Classroom;

class Level extends Model
{
    protected $fillable = [
        'name', 
        'sort', 
        'head_master',
        'school_master'
        ];

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

}
