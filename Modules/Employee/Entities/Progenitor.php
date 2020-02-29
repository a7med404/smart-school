<?php

namespace Modules\Employee\Entities;
use Modules\Employee\Entities\Employee;
use Illuminate\Database\Eloquent\Model;

class Progenitor extends Model
{
    protected $fillable = [
        'employee_id',
        // 'amount',
        // 'financial_year',
        'transaction_id',
        // 'date',
        // 'months_number',
        // 'note'
    ];
public function employees(){
    return $this->belongsTo(Employee::class);
}

}
