<?php

namespace Modules\Student\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Student\Entities\PayClass;

class PayRuls extends Model
{
    protected $fillable = ['name', 'is_mandatary', 'note'];


    public function payclasses()
    {
        return $this->hasMany(PayClass::class);
    }

}
