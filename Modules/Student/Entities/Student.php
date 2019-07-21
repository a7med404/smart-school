<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Address\Entities\Address;
use Modules\Address\Entities\Contact;
use Modules\Address\Entities\Identifcation;
use Modules\Student\Entities\Part;
use Modules\Student\Entities\Health;
use Modules\Student\Entities\StudentParent;
use Modules\Student\Entities\Permissiontodepart;
use Modules\Student\Entities\Absence;
use Modules\Student\Entities\Attendance;
use Modules\Student\Entities\Level;

class Student extends Model
{
    protected $fillable = [
        'name', 
        'gender', 
        'religion', 
        'is_staff_son',
        'birthday', 
        'start_data',
        'education_year', 
        'study_status', 
        'student_parent_id', 
        'level_id', 
        'classroom_id', 
        'part_id', 
        'note',
        'is_partner_son',
        'health_id'
    ];

    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }

    public function contacts()
    {
        return $this->morphMany(Contact::class, 'contactable');
    }
    
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function identifcations()
    {
        return $this->morphMany(Identifcation::class, 'identifcationable');
    }

    public function health()
    {
        return $this->hasMany(Health::class);
    }

    public function part()
    {
        return $this->belongsTo(Part::class);
    }

    public function studentParents()
    {
        return $this->belongsTo(StudentParent::class);
    }

    public function permissiontodeparts()
    {
        return $this->hasMany(Permissiontodepart::class);
    }

    public function absences()
    {
        return $this->hasMany(Absence::class);
    }

    public function attendances()
    {
        return $this->belongsToMany(Attendance::Class, 'attendance_student', 'attendance_id', 'student_id');
    }
}