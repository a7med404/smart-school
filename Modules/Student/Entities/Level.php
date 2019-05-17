<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Classroom;

class Level extends Model
{
    protected $fillable = ['name', 'sort', 'manager_name', 'super_name'];

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }

}
