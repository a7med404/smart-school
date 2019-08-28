<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Employee\Entities\AddCalend;


class AddCalendEmployee extends Model
{
    protected $table="add_calends";
    protected $fillable = [
        'employee_id',
        'calend_id'
    ];

    public function calends(){

        return $this->hasMany(AddCalend::class);
    }


    public function employees()
    {
        return $this->belongsToMany(Employee::Class);
    }
}
