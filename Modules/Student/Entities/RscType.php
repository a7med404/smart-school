<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class RscType extends Model
{
    protected $fillable = ['id', 'name', 'note', 'deletable'];
}
