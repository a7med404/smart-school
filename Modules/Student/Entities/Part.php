<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $fillable = ['name_ar', 'name_en', 'max_student_number', 'sort', 'level_id', 'classroom_id'];
}
