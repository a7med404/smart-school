<?php

namespace Modules\Employee\Entities;
use Modules\Employee\Entities\EmpPerissions;
use Modules\Employee\Entities\RewardsPunition;
use Modules\Employee\Entities\Department;
use Modules\Employee\Entities\Employee;

use Illuminate\Database\Eloquent\Model;

class Managament extends Model
{
    protected $fillable = [
        'name'
    ];

    public function departments(){

        return $this->hasMany(Department::class);
    }


    public function EmpPerssions(){
        return $this->hasMany(EmpPerissions::class);

    }
    // public function RewardsPunitions(){
    //  return $this->belongsTo(RewardsPunition::class);
    // }

}
