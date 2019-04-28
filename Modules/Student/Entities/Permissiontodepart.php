<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class Permissiontodepart extends Model
{
    protected $fillable = ['date', 'note', 'student_id'];
}
