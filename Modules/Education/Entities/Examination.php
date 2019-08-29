<?php

namespace Modules\Education\Entities;

use Illuminate\Database\Eloquent\Model;
// use Modules\Student\Entities\Level;
// use Modules\Student\Entities\Classroom;

class Examination extends Model
{
    protected $fillable = ['student_id', 'subject_id', 'employee_id', 'type', 'his_degree', /*'level_id', 'classroom_id',*/ 'part_id'];
    
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
