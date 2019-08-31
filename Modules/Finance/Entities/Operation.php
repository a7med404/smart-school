<?php

namespace Modules\Finance\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Finance\Entities\Transaction;
use Modules\Finance\Entities\PayRuls;
use Modules\Student\Entities\Student;

class Operation extends Model
{  
    protected $fillable = ['id', 'pay_class_id', 'student_id', 'transaction_id'];

    public function student()
	{
		return $this->belongsTo(Student::class, 'student_id', 'id');
	}

    public function transaction()
	{
		return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
	}

    public function payClass()
	{
		return $this->belongsTo(PayClass::class);
	}

    public function payRul()
	{
		return $this->belongsTo(PayRuls::class, 'pay_rul_id');
	}


}
