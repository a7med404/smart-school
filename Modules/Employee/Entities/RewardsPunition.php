<?php

namespace Modules\Employee\Entities;
use Modules\Employee\Entities\Managament;
use Illuminate\Database\Eloquent\Model;

class RewardsPunition extends Model
{
    protected $fillable = [
        'date',
        'type',
        'employee_id',
        'value',
        'reason'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

}
