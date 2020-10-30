<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Employee\Entities\EvaluationEmp;

class EvaluationItem extends Model
{
    protected $fillable = [
        'name',
        'degree'
    ];


    public function evaluationItem()
    {
        return $this->hasMany(EvaluationEmp::class);
    }
}
