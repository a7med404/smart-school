<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Employee\Entities\Employee;

class EmpAbsence extends Model
{
    protected $fillable = [
        'employee_id',
        'absence_from',
        'absence_to',
        'absence_reason'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class,'employee_id');
    }
    public function scopeSearched($query)
    {
        $search=request()->query('employee_id');

        if(!$search)
       {
           return $query;

       }
       return $query->where('employee_id','LIKE',"%{$search}%")
       ->get();
    }

}
