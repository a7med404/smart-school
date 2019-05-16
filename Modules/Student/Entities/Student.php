<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Address\Entities\Address;
use Modules\Address\Entities\Contact;
use Modules\Student\Entities\Part;
use Modules\Student\Entities\health;
use Modules\Student\Entities\StudentParent;
use Modules\Student\Entities\Permissiontodepart;
use Modules\Student\Entities\Absence;

class Student extends Model
{
    protected $fillable = [
        'name', 'gender', 'religion', 'is_staff_son', 'identifcation_number',
        'identifcation_expire', 'birthday', 'start_from', 'start_data',
        'start_year', 'student_parent_id', 'address_id',
        'contact_id', 'level_id', 'classroom_id', 'part_id', 'note'
    ];

    public function address()
    {
        // return $this->hasOne(Address::class, 'address_id', 'id');
        return $this->hasOne(Address::class);
    }

    public function contact()
    {
        return $this->hasOne(Contact::class);
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

    public function permissiontodepart()
    {
        return $this->hasMany(Permissiontodepart::class);
    }

    public function absence()
    {
        return $this->hasMany(Absence::class);
    }

}