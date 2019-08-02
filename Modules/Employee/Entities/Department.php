<?php

namespace Modules\Employee\Entities;
use Modules\Employee\Entities\Managament;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'managament_id',
        'name'
    ];

    public function management(){

        return $this->belongsTo(Managament::class);
    }
}
