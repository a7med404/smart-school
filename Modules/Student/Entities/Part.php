<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Classroom;
use Modules\Student\Entities\Student;
class Part extends Model
{
    protected $fillable = ['name_ar', 'name_en', 'max_student_number', 'sort', 'level_id', 'classroom_id'];

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
