<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Student;

class ReportSeparate extends Model
{
    protected $fillable = [ 
        'student_id',
        'from',
        'to',
        'note'
    ];

    
    public function student()
    {
        return $this->belongsTo(Student::Class);
    }
}
