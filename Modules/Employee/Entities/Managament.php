<?php

namespace Modules\Employee\Entities;
use Modules\Employee\Entities\Department;
use Illuminate\Database\Eloquent\Model;

class Managament extends Model
{
    protected $fillable = [
        'name'
    ];

    public function departments(){

        return $this->hasMany(Department::class);
    }

public function Employee(){

        return $this->hasMany(Employee::class);
    }
}
