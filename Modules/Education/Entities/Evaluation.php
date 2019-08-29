<?php

namespace Modules\Education\Entities;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = ['student_id', 'subject_id', 'employee_id', 'for', 'ratio', 'note'];
}
