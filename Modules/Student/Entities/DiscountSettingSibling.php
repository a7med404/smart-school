<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;

class DiscountSettingSibling extends Model
{
    protected $fillable = [
        'ranking',
        'value',
        'type'
    ];
}
