<?php

namespace Modules\Address\Entities;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['number_1', 'number_2', 'email', 'note'];
}
