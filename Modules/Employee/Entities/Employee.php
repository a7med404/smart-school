<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Address\Entities\Identifcation;
use Modules\Employee\Entities\EmpAbsence;

class Employee extends Model
{    
    protected $fillable = [
        'full_name',
        'gender',
        'religion',
        'birth_date',
        'managament_id',
        'department_id',
        'hiring_date',
        'job_title',
        'martial_status',
        'start_date',
        'join_year',
        'picture',
        'address_id',
        'contact_id',
        'identification_id',
        'note'
    ];

    public function addresses()
    {
        // return $this->hasOne(Address::class, 'address_id', 'id');
        return $this->morphMany(Address::class, 'addressable');
    }

    public function contacts()
    {
        return $this->morphMany(Contact::class, 'contactable');
    }

    public function identifcations()
    {
        return $this->morphMany(Identifcation::class, 'identifcationable');
    }

    public function absence()

    {
        return $this->hasMany(EmpAbsence::class);
    }

    public function addcalends(){

        return $this->belongsToMany(AddCalend::class);
    }



}
