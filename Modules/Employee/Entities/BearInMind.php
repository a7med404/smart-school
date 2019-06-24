<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;

class BearInMind extends Model
{
    protected $fillable = [
        'note',
        'date',
        'empolyee_id'
    ];

    public function Employee()
    {
        return $this->belongsTo('Modules\Employee\Entities\Employee','empolyee_id');
    }
}
