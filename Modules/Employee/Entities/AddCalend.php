<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Employee\Entities\AddCalendEmployee;

class AddCalend extends Model
{
    protected $fillable = [
        'employee_id',
        'calend_id',
        'date',
        'type'
    ];

    public function Addcaltoemp()
    {
        return $this->belongsTo(AddCalendEmployee::class);
    }

}
