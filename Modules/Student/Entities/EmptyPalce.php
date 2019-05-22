<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class EmptyPalce extends Model
{
    protected $fillable = [
        'level_id',
        'classroom_id',
        'part_id',
        'name'
    ];
}
