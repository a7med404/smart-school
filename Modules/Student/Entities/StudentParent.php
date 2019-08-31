<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\Student;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class StudentParent extends Authenticatable
{
    use HasApiTokens, Notifiable;
        
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    protected $fillable = [
        'mr_d',  
        'name', 
        'religion', 
        'relation', 
        'nationality', 
        'qualification', 
        'job', 
        'work_place', 
        'martial', 
        'phone_number', 
        'email', 
        'is_die', 
        'note',
        'username', 
        'password'
    ];

    public function username()
    {
        return 'username';
    }

    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_student_parents', 'student_parent_id', 'student_id');
    }
}
