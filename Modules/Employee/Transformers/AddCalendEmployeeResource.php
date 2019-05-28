<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class AddCalendEmployeeResource extends JsonResource
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
            'management_id'         => getName('managaments', $this->managament_id),
            'department_id'         => getName('departments', $this->department_id),
            'employee_id'           => getName('employees', $this->employee_id),
            'calend_id'             => getName('calends', $this->calend_id),
            'date'                  => $this->date,
            'type'                  => calendType()[$this->type]
        ]; 
        // return parent::toArray($request);
    }
}
