<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Student;

class StudentParent extends Model
{
    protected $fillable = [
        'mr_d', 
        'name', 
        'religion', 
        'relation', 
        'nationality', 
        'identifcation_id', 
        'qualification', 
        'job', 
        'work_place', 
        'martial', 
        'phone_number', 
        'address_id', 
        'email', 
        'is_die', 
        'note'
    ];

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
