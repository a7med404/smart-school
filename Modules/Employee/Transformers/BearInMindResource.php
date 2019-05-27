<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class BearInMindResource extends JsonResource
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
            'note'                        => $this->note,
            'date'                        => $this->date,
            'employee_id'                 => getName('employees', $this->employee_id)
        ];
        // return parent::toArray($request);
    }
}
