<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class Calend extends Model
{
    protected $fillable = [
        'name',
        'discount_percentage',
        'type'
    ];


    public function addCalendEmp()
    {
        return $this->hasMany(AddCalendEmployee::class);
    }
}
