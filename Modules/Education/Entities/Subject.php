<?php

namespace Modules\Education\Entities;

use Illuminate\Database\Eloquent\Model;
// use Modules\Student\Entities\Level;
// use Modules\Student\Entities\Classroom;
use Modules\Student\Entities\Part;

class Subject extends Model
{
    protected $fillable = [
        'name', 'education_year', 'degree', 'pass_degree', /*'level_id', 'classroom_id',*/ 'part_id'
    ];
        
    // public function level()
    // {
    //     return $this->belongsTo(Level::class);
    // }

    // public function classroom()
    // {
    //     return $this->belongsTo(Classroom::class);
    // }

    public function part()
    {
        return $this->belongsTo(Part::class);
    }
}
