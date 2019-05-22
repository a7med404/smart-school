<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Part;
use Modules\Student\Entities\Level;
use Modules\Student\Entities\PayClass;

class Classroom extends Model
{
    protected $fillable = ['name_ar','name_en', 'sort', 'is_end', 'level_id','division_id'];

    public function parts()
    {
        return $this->hasMany(Part::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
    
    public function payClasses()
    {
        return $this->belongsTo(PayClass::Class);
    }
}
