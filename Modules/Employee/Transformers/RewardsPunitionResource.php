<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class RewardsPunitionResource extends JsonResource
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
            'finance_year'                 => $this->finance_year,
            'date'                         => $this->date,
            'managament_id'                => getName('managaments', $this->managament_id),
            'department_id'                => getName('departments', $this->department_id),
            'type'                         => RewardsPunition()[$this->type],
            'employee_id'                  => getName('employees', $this->employee_id),
            'value'                        => $this->value,
            'reason'                       => $this->reason
        ];
        // return parent::toArray($request);
    }
}
