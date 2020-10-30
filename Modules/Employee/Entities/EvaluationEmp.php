<?php

namespace Modules\Employee\Entities;
use Modules\Employee\Entities\Employee;
use Modules\Employee\Entities\EvaluationItem;
use Illuminate\Database\Eloquent\Model;

class EvaluationEmp extends Model
{
    protected $fillable = [
        'employee_id',
        'evaluation_item_id',
        'real_degree',
        'date'
    ]; 


    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function evaluationItem()
    {
        return $this->belongsTo(EvaluationItem::class);
    }
}
