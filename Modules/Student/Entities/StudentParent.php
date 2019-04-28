<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class StudentParent extends Model
{
    protected $fillable = ['mr_d', 'name', 'religion', 'relation', 'nationality', 'identifcation_number', 'qualification', 'job', 'work_place', 'martial', 'phone_number', 'address_id', 'email', 'is_die', 'note'];
}
