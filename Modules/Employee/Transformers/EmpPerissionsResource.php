<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class EmpPerissionsResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
         return parent::toArray($request);

        return [
            'managament_id'         => getName('managaments', $this->managament_id),
            'department_id'         => getName('departments', $this->department_id),
            'employee_id'           => getName('employees', $this->employee_id),
            'perission_id'          => getName('emp_perissions', $this->perission_id),
            'from_hour'            => $this->from_hour,
            'to_hour'              => $this->to_hour,
            'date'                  => $this->date,
            'note'                  => $this->note
        ];
    }
}
