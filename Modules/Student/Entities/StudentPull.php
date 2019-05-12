<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class StudentPull extends Model
{
    protected $fillable = [
        'student_id',
        'pull_date',
        'reason'
    ];
}
