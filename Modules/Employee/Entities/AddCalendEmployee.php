<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Employee\Entities\AddCalend;
use Modules\Employee\Entities\Calend;


class AddCalendEmployee extends Model
{
    // protected $table="add_calend_employees";
    protected $fillable = [
        'employee_id',
        'calend_id',
        'date'
    ];

    // public function calends(){

    //     return $this->hasMany(AddCalend::class);
    // }

    public function calend(){

        return $this->belongsTo(Calend::class);
    }


    public function employee()
    {
        return $this->belongsTo(Employee::Class);
    }
}
