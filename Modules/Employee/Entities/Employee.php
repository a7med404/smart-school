<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Employee\Entities\EmpAbsence;

class Employee extends Model
{
    protected $fillable = [
        'full_name',
        'gender',
        'religion',
        'birth_date',
        'identification_number',
        'managament_id',
        'department_id',
        'hiring_date',
        'job_title',
        'martial_status',
        'start_date',
        'emploee_level',
        'join_year',
        'picture',
        'address_id',
        'contact_id',
        'note'
    ];

    public function address()
    {
        return $this->hasOne(Address::class, 'address_id', 'id');
    }

    public function contact()
    {
        return $this->hasOne(Contact::class, 'contact_id', 'id');
    }

    public function absence()
    {
        return $this->hasMany(EmpAbsence::class);
    }
}
