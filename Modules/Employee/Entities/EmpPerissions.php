<?php

namespace Modules\Employee\Entities;
use Modules\Employee\Entities\Managament;
use Illuminate\Database\Eloquent\Model;

class EmpPerissions extends Model
{
    protected $fillable = [
        'managament_id',
        'department_id',
        'employee_id',
        'perission_id',
        'from_hour',
        'to_hour',
        'date',
        'note'
    ];
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function managament()
    {
        return $this->belongsTo(Managament::class);
    }
}
