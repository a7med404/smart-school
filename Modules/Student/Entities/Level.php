<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Classroom;

class Level extends Model
{
    protected $fillable = ['name_ar', 'name_en', 'sort', '', ''];

    public function classroom()
    {
        return $this->hasMany(Classroom::class);
    }

}
