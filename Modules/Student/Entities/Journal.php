<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Employee\Entities\Employee;
use Modules\Student\Entities\Transaction;

class Journal extends Model
{      
	protected $fillable = ['status','date','employee_id', 'note'];

	public function employee()
	{
		return $this->belongsTo(Employee::class, 'employee_id', 'id');
	}

	public function transactions()
	{
		return $this->hasMany(Transaction::Class, 'journals');
	}

	public function transaction()
	{
		if ($this->first()->status == "0") { 
			$return = $this->hasOne(Transaction::Class, 'journals', 'id')->where('type', '=', 0);
		} else if ($this->first()->status == "1") {
			$return = $this->hasOne(Transaction::Class, 'journals', 'id')->where('type', '!=', 0);
		}
		return $return;
	}
}
