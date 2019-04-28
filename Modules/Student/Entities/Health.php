<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    protected $fillable =  ['doctor_name', 'doctor_number', 'blood_type', 'insurance_number', 'health_status'];
}
