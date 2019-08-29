<?php

namespace Modules\Education\Entities;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $fillable = ['employee_id', 'day', 'subject_id', 'subject_number', 'time'];
}
