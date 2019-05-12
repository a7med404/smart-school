<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class Progenitor extends Model
{
    protected $fillable = [
        'emp_id',
        'amount',
        'financial_year',
        'safe_id',
        'date',
        'months_number',
        'note'
    ];
}
