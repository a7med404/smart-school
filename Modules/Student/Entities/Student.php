<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'gender', 'religion', 'is_staff_son', 'identifcation_number', 'identifcation_expire', 'birthday', 'start_from', 'start_data', 'start_year', 'student_parent_id', 'study_language_id', 'address_id', 'contact_id', 'level_id', 'classroom_id', 'part_id', 'note'
    ];
}