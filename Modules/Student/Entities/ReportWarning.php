<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Student;

class ReportWarning extends Model
{
    protected $fillable = [
        'student_id',
        'note',
    ];
    
    public function student()
    {
        return $this->belongsTo(Student::Class);
    }
}
