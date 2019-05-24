<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Address\Entities\Address;
use Modules\Address\Entities\Contact;
use Modules\Address\Entities\Identifcation;
use Modules\Student\Entities\Part;
use Modules\Student\Entities\health;
use Modules\Student\Entities\StudentParent;
use Modules\Student\Entities\Permissiontodepart;
use Modules\Student\Entities\Absence;
use Modules\Student\Entities\Attendance;

class Student extends Model
{
    protected $fillable = [
        'name', 'gender', 'religion', 'is_staff_son',
        'birthday', 'start_from', 'start_data',
        'start_year', 'student_parent_id', 'address_id', 'identifcation_id',
        'contact_id', 'level_id', 'classroom_id', 'part_id', 'note','study_lang','is_partner_son'
        ,'identifcation_number','identifcation_expire','health_id'
    ];

    public function address()
    {
        // return $this->hasOne(Address::class, 'address_id', 'id');
        return $this->belongsTo(Address::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    public function identifcation()
    {
        return $this->hasOne(Identifcation::class);
    }

    public function health()
    {
        return $this->hasOne(health::class);
    }

    public function part()
    {
        return $this->belongsTo(Part::class);
    }

    public function studentParent()
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