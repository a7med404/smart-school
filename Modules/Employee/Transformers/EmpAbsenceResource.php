<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class EmpAbsenceResource extends JsonResource
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
            'empolyee_id'                         => getName('employees', $this->employee_id),
            'absence_from'                        => $this->absence_from,
            'absence_to'                          => $this->absence_to,
            'absence_reason'                      => $this->absence_reason
        ];
        // return parent::toArray($request);
    }
}
