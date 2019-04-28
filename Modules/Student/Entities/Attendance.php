<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['absence_date', 'absence_reason'];
}
