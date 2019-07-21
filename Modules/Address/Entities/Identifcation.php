<?php

namespace Modules\Address\Entities;

use Illuminate\Database\Eloquent\Model;

class Identifcation extends Model
{
    protected $fillable = ['type', 'identifcation_number', 'issue_date', 'issue_place','identifcationable_id', 'identifcationable_type'];

    public function identifcationable()
    {
        return $this->morphTo();
    }
}
