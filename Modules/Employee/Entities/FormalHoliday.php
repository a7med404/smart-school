<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class FormalHoliday extends Model
{
    protected $fillable = [
        'name',
        'start',
        'finish'
    ];
}
