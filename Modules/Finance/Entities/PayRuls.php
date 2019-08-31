<?php

namespace Modules\Finance\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Finance\Entities\PayClass;
use Modules\Finance\Entities\Operation;

class PayRuls extends Model
{
    protected $fillable = ['name', 'is_mandatary', 'note'];


    public function payclasses()
    {
        return $this->hasMany(PayClass::class);
    }

    public function operations()
	{
		return $this->hasMany(Operation::class);
	}
	

}
