<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class OffPrint extends Model
{
    protected $fillable = [
        'student_id',
        'employee_id',
        'type'
    ]; 
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
