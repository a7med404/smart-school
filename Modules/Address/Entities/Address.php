<?php

namespace Modules\Address\Entities;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['street_1', 'street_2', 'city', 'local', 'home_number'];
}
