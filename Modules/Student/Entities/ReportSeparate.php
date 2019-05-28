<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class ReportSeparate extends Model
{
    protected $fillable = [
        'student_id',
        'from',
        'to',
        'note'
    ];
}
