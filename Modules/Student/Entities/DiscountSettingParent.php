<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class DiscountSettingParent extends Model
{
    protected $fillable = [
        'value',
        'experience_years',
        'type'    
    ];
}
