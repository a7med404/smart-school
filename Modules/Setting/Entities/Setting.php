<?php

namespace Modules\Setting\Entities;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'slug', 'name_setting', 'value', 'type', 'keyword', 'description',
    ];
}
