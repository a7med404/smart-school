<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'student_id',
        'absence_from',
        'absence_to',
        'absence_reason'
        ];
}
