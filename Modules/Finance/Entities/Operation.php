<?php

namespace Modules\Finance\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Finance\Entities\PayRuls;
use Modules\Student\Entities\Student;
use Modules\Employee\Entities\Employee;
use Modules\Finance\Entities\RscType;

class Operation extends Model
{
    protected $fillable = ['id', 'pay_rul_id', 'student_id', 'amount', 'status','date','employee_id', 'rsc_type_id', 'note'];

    public function student()
	{
		return $this->belongsTo(Student::class, 'student_id', 'id');
	}
	public function rscType()
	{
		return $this->belongsTo(RscType::class, 'rsc_type_id', 'id');
	}

	public function employee()
	{
		return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }

    public function payRul()
	{
		return $this->belongsTo(PayRuls::class, 'pay_rul_id');
	}
    // public function transaction()
	// {
	// 	return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    // }
    // public function journal()
	// {
    // 	return $this->belongsTo(Journal::class);
	// }

    // public function payClass()
	// {
	// 	return $this->belongsTo(PayClass::class);
	// }



}
