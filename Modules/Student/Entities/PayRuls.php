<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class PayRuls extends Model
{
    protected $fillable = [
        'name',
        'is_mandatary',
        'note',
    ];
}
