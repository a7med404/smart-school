<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Employee\Entities\Employee;

class BearInMind extends Model
{
    protected $fillable = [
        'note',
        'date',
        'employee_id'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
