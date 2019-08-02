<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Classroom;
use Modules\Student\Entities\Level;
use Modules\Student\Entities\PayRuls;

class PayClass extends Model
{
    protected $fillable = [
        'value',
        'pay_rul_id',
        'level_id',
        'classroom_id',
        'education_year'
    ];
        
    public function classroom()
    {
        return $this->belongsTo(Classroom::Class);
    }
    
    public function level()
    {
        return $this->belongsTo(Level::Class);
    }
    
    public function payRul()
    {
        return $this->belongsTo(PayRuls::Class);
    }
    
}
