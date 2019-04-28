<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['name_ar', 'name_en', 'sort', 'is_end', 'level_id', 'division_id'];
}
