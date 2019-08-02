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

        return $this->hasMany('App\Department');
    }

}
