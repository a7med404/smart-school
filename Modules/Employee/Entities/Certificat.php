<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class Certificat extends Model
{
    protected $fillable = [
        'name',
        'Applicant',
        'type',
        'major',
        'degree',
        'qualification_date',
        'experience_years',
        'employee_id'
    ];
}
