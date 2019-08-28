<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{  
    protected $fillable = ['id', 'pay_rul_id', 'student_id'];

    public function student()
	{
		return $this->belongsTo(Student::class, 'student_id', 'id');
	}
}
