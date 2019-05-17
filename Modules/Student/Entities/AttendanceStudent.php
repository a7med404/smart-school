<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class AttendanceStudent extends Model
{
    protected $fillable = ['attendance_id', 'student_id'];
}
