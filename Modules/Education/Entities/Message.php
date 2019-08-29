<?php

namespace Modules\Education\Entities;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['title', 'message', 'is_read', 'student_parent_id', 'employee_id', 'reply']; 
}
