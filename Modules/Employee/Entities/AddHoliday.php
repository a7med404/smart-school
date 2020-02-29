<?php

namespace Modules\Employee\Entities;
use Illuminate\Database\Eloquent\Model;
use Modules\Employee\Entities\EmpHoliday;

class AddHoliday extends Model
{
    protected $fillable = [
        'name'
    ];
    public function EmpHoliday()
    {
        return $this->hasMany(EmpHoliday::class);
    }
}
