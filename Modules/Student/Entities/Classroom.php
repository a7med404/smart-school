<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Finance\Entities\PayClass;
use Modules\Student\Entities\Part;
use Modules\Student\Entities\Level;


class Classroom extends Model
{
    protected $fillable = [
        'name',
        'sort',
        'level_id'
        ];

    public function parts()
    {
        return $this->hasMany(Part::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function payclasses()
    {
        return $this->hasMany(PayClass::class);
    }

}
