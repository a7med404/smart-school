<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class ProgenitorResource extends JsonResource
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
            'amount'                       => $this->amount,
            'financial_year'               => $this->financial_year,
            'safe_id'                      => safes()[$this->safe_id],
            'date'                         => $this->date,
            'months_number'                => $this->months_number,
            'note'                         => $this->note 
        ];
        // return parent::toArray($request);
    }
}
