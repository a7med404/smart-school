<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class EmpHolidayResource extends JsonResource
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
            'employee_id'                  => getName('employees', $this->employee_id),
            'add_holiday_id'                   => getName('add_holidays', $this->holiday_id),
            'balance'                      => $this->balance,
            'from'                         => $this->from,
            'to'                           => $this->to,
            'note'                         => $this->note
        ];
        // return parent::toArray($request);
    }
}
