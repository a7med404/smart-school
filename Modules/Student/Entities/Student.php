<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Address\Entities\Address;
use Modules\Address\Entities\Contact;
use Modules\Address\Entities\Identifcation;
use Modules\Student\Entities\Level;
use Modules\Student\Entities\Classroom;
use Modules\Student\Entities\Part;
use Modules\Student\Entities\Health;
use Modules\Student\Entities\StudentParent;
use Modules\Student\Entities\Permissiontodepart;
use Modules\Student\Entities\Absence;
use Modules\Student\Entities\Attendance;
use Modules\Student\Entities\ReportSeparate;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'gender',
        'religion',
        'is_staff_son',
        'birthday',
        'start_data',
        'education_year',
        'study_status',
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
        return $this->hasOne(Health::class);
    }

    public function part()
    {
        return $this->belongsTo(Part::class);
    }

    public function studentParents()
    {
        return $this->belongsToMany(StudentParent::class);
    }

    public function permissiontodeparts()
    {
        return $this->hasMany(Permissiontodepart::class);
    }

    public function absences()
    {
        return $this->hasMany(Absence::class);
    }

    public function reportSeparates()
    {
        return $this->hasMany(ReportSeparate::class);
    }

    // public function attendance()
    // {
    //     return $this->hasMany(Attendance::class);
    // }
    public function scopeSearched($query)
    {
        $search=request()->query('level');

        $gender=request()->query('gender');
        if(!$search)
       {
           return $query;

       }
       return $query->where('level_id','LIKE',"%{$search}%")
       ->orWhere('gender','LIKE',"%{$gender}%")
       ->get();
    }


}
