<?php

namespace Modules\Employee\Entities;
use Modules\Employee\Entities\Managament;
use Illuminate\Database\Eloquent\Model;

class RewardsPunition extends Model
{
    protected $fillable = [
        'finance_year',
        'date',
        'management_id',
        'department_id',
        'type',
        'employee_id',
        'value',
        'reason'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);

    }
 
}
