<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class ReportWarning extends Model
{
    protected $fillable = [
        'student_id',
        'note',
    ];
}
