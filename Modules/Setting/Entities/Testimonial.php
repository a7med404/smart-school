<?php

namespace Modules\Setting\Entities;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = ['how', 'text', 'status'];
}
