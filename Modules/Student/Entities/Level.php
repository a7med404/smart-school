<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Classroom;
use Modules\Student\Entities\PayClass;

class Level extends Model
{
    protected $fillable = [
        'name',
        'sort',
        'head_master',
        'school_master'
        ];

    

    public function payclasses()
    {
        return $this->hasMany('App\PayClass');
    }

}
