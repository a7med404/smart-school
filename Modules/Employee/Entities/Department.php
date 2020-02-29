<?php

namespace Modules\Employee\Entities;
use Modules\Employee\Entities\Managament;
use Modules\Employee\Entities\Employee;
use Modules\Employee\Entities\RewardsPunition;


use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'managament_id',
        'name'
    ];

    public function management(){

        return $this->belongsTo(Managament::class);
    }
 
}

