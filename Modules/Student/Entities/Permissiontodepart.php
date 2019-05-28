<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Student;

class Permissiontodepart extends Model
{
    protected $fillable = [
        'date', 
        'note', 
        'student_id'
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
