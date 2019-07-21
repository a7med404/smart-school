<?php

namespace Modules\Address\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\User\Entities\User;
use Modules\Company\Entities\Company;
use Modules\Company\Entities\Employee;

class Address extends Model
{
    protected $fillable = ['street_1', 'street_2', 'city', 'addressable_id', 'addressable_type', 'local', 'home_number'];

    // public function company()
    // {
    //     return $this->belongsTo(Company::Class);
    //     // return $this->belongsTo('App\User', 'address_id', 'other_key');
    // }

    // public function employee()
    // {
    //     return $this->belongsTo(Employee::Class);
    // }

    public function addressable()
    {
        return $this->morphTo();
    }
}
