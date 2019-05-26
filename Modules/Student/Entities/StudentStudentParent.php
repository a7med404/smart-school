<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class StudentStudentParent extends Model
{
    protected $fillable = [
        'student_parent_id',
        'student_id'
    ];
}
