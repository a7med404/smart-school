<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Address\Entities\Identifcation;
use Modules\Employee\Entities\BearInMind;
use Modules\Employee\Entities\EmpPerissions;
use Modules\Employee\Entities\EmpHoliday;
use Modules\Employee\Entities\EvaluationEmp;
use Modules\Employee\Entities\Managament;
use Modules\Employee\Entities\Department;
use Modules\Employee\Entities\EmpAbsence;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Notifications\Notifiable;
use Modules\Address\Entities\Address;
use Modules\Address\Entities\Contact;
use Modules\Employee\Entities\Progenitor;
use Laravel\Passport\HasApiTokens;

class Employee extends Authenticatable
{
    use SoftDeletes, LaratrustUserTrait, Notifiable, HasApiTokens;

    protected $hidden = [
        'password', 'remember_token',
    ];

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
        'note',
        'username',
        'password'
    ];

    public function username()
    {
        return 'username';
    }

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

    public function empabsence()
    {
        return $this->hasMany(EmpAbsence::class);
    }
     public function managament()
     {
         return $this->belongsTo(Managament::class);
    }
     public function department()
     {
         return $this->belongsTo(Department::class);
     }
    public function perission()
    {
        return $this->hasMany(EmpPerissions::class);
    }

    public function bearInMind()
    {
        return $this->hasMany(BearInMind::class);
    }

    public function addCalendEmployee(){
        return $this->belongsToMany(AddCalendEmployee::class);
    }

    public function EmpHoliday(){
        return $this->hasMany(Employee::class);
    }

    public function evaluationEmp(){
        return $this->hasMany(EvaluationEmp::class);
    }

    public function certificates()
    {
        return $this->hasMany(Certificat::class);
    }

}
