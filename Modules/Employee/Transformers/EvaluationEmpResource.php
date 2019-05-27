<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class EvaluationEmpResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'education_level'           => education_level()[$this->education_level],
            'department_id'             => getName('departments', $this->department_id),
            'employee_id'               => getName('employees', $this->employee_id),
            'item_id'                   => getName('evaluation_items', $this->item_id),
            'real_degree'               => $this->real_degree,
            'degree'                    => $this->degree,
            'date'                      => $this->date 
        ];
        // return parent::toArray($request);
    }
}
